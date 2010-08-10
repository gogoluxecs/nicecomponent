<?php
abstract class nc_lib_Request
{
	protected $data = array();

	public function __construct()
	{
	}

	public function set($request)
	{
		$this->data = $request;
		$this->clean();
	}

	public function get()
	{
		return $this->data;
	}

	/**
	 * Clears the request
	 *
	 * @return Void
	 */
	protected function clean()
	{
		$clean = array();

		foreach($this->data as $v)
		{
			$value = str_replace('\\', '\\\\', $v);
			$clean[] = $value;
		}

		$this->data = $clean;
	}
}

