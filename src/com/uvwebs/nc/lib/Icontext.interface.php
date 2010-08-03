<?php
interface nc_lib_Icontext
{
	/**
	 * Gets object
	 *
	 * @return Void
	 */
	public function get($k = null);

	/**
	 * Sets object in the request - multiple times
	 *
	 * @return Void
	 */
	public function set($k = null, $v = null);
}

