<?php
class ncom_test_View
{
	const TEMPLATE_NAME = 'default'

	public function get()
	{

		// call the command
		$h = new ncom_test_controller_GetOldMessages(
			$this->getRequest(), $this->getContext(),
		);
		if($rs = $h->execute())
		{
			echo 'Success';
		}
		else
			echo 'Error in the call';
	}
}

