<?php
class ncom_form_operation_command_Validate
implements nc_lib_Ioperation
{
	/**
	 * @validate = Require
     * @validate = Unique
	 * @validateMessage = Missing first name
	 */
	private $firstName;

	/**
	 * @validate = Require
	 * @validateMessage = Missing last name
	 */
	private $lastName;

	public function execute()
	{
		$context = nc_lib_LazyInitilization::init('ncom_Context');

		$request = $_REQUEST['form'];

		// create reflection parser as standalone lib
		// put which doc comments and properties is parsed
		// executes require method of vlaidation instance
		// returns validateMessage
		// supports of several validators - require, unique, compare and all custom
		// $validate->validate(array(firstName, 'lastName');
		// $validate->execute();

		foreach(array_keys($request) as $r)
		{
			switch($r)
			{
				case 'first_name':
					$this->validateFirstName();
					break;

				case 'last_name':
					$this->validateLastName();
					break;
			}
		}
	}

	/**
	 * Temporary validate method
	 *
	 * @return Void
	 */
	private function validateFirstName()
	{
		$context = nc_lib_LazyInitilization::init('ncom_Context');

		$request = $_REQUEST['form'];

		if(empty($request['first_name']))
		{
			$context->getSmarty()->assign('error_first_name', 'First name is missing');
		}
	}

	/**
	 * Temporary validate method
	 *
	 * @return Void
	 */
	private function validateLastName()
	{
		$context = nc_lib_LazyInitilization::init('ncom_Context');

		$request = $_REQUEST['form'];

		if(empty($request['last_name']))
		{
			$context->getSmarty()->assign('error_last_name', 'Last name is missing');
		}
	}
}

