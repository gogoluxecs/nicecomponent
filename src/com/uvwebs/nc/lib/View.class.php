<?php
abstract class nc_lib_View
{
	protected $context = null;

	public function __construct(nc_lib_Icontext $context)
	{
		$this->context = $context;

		$this->overrideSuper();
	}

	protected function overrideSuper() {}

	/**
	 * Display content
	 *
	 * @return String
	 */
	abstract public function render();
}

