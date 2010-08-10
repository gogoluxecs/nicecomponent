<?php
/**
 * The command for getting the new messages
 *
 * @return Void
 */
class ncom_test_operation_command_GetNewMessages
implements nc_lib_Ioperation
{
	public function execute()
	{
		// executes the command

		// lazy initilization for the Context object
		$context = nc_lib_LazyInitilization::init('ncom_Context');
		$smarty = $context->getSmarty();

		// assume we initialize Model, call method, and gets data
		$rs = array('new message one', 'new message two');

		// command sents results in the teplate
		$smarty->assign('rs', $rs);
	}
}

