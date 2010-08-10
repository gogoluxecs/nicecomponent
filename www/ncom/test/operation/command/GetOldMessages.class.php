<?php
/**
 * The Command for getting the old messages
 *
 * @return Return
 */
class ncom_test_operation_command_GetOldMessages
implements nc_lib_Ioperation
{
	public function execute()
	{
		// executes the command

		// lazy initilization for the Context object
		$context = nc_lib_LazyInitilization::init('ncom_Context');
		$smarty = $context->getSmarty();

		// assume we initialize Model and gets data
		$rs = array('old message one', 'old message two');

		// command sents results in the teplate
		$smarty->assign('rs', $rs);
	}
}

