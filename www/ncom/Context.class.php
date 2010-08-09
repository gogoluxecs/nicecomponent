<?php
class ncom_Context extends nc_lib_Context
{
	/**
	 * Sets and returns renderer
	 *
	 * @return Smarty
	 */
	public function getSmarty()
	{
		if(is_null($this->smarty))
			$this->smarty = new Smarty;

		return $this->smarty;
	}
}

