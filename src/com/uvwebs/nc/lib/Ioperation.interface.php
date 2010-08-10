<?php
interface nc_lib_Ioperation
{
	/**
	 * Each command has a view and after command executes, view must be set
	 *
	 * @return Void
	 */
	public function execute();
}

