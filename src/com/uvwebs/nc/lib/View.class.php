<?php
abstract class nc_lib_View
{
	public function __construct()
	{

	}
	/**
	 * Display content
	 *
	 * @return String
	 */
	abstract public function render();
}

