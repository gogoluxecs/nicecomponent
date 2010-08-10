<?php
class ncom_form_ViewController
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

	public function render()
	{
		$this->smarty->display('form.tpl');
	}
}

