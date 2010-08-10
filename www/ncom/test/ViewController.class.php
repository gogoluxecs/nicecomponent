<?php
class ncom_test_ViewController
extends nc_lib_View
{
	private $smarty = null;

	protected function overrideSuper()
	{
		$this->smarty = $this->context->getSmarty();

		$this->smarty->template_dir = dirname(__FILE__)
			. DIRECTORY_SEPARATOR . 'templates';

		$this->smarty->compile_dir = dirname(__FILE__)
			. DIRECTORY_SEPARATOR . 'templates_c';
	}

	/**
	 * For whitch operations I need template
     *
	 * @return Void
	 */
	public function render()
	{
		$operation = isset($_REQUEST['operation']) ? $_REQUEST['operation'] : null;

		switch($operation)
		{
			case 'get_all':
				$this->smarty->display('get_all.tpl');
				$this->smarty->assign('rs', null);
				break;

			case 'get_new':
				$this->smarty->display('get_new.tpl');
				break;

			case 'get_top':
				$this->smarty->display('get_top.tpl');
				break;

			case 'get_single':
				$this->smarty->display('get_single.tpl');
				break;
		}
	}
}

