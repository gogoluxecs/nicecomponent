<?php
abstract class nc_lib_Context
implements nc_lib_Icontext
{
	protected $context = null;

	private $data = array();

	public function __construct($context = null)
	{
		if(!is_null($this->context))
			$this->context = $context;
	}

	/**
	 * Sets cached object in the request - only once
	 *
	 * @return Void
	 */
	public function __set($k, $v)
	{
		if(!isset($this->data[$k]))
			$this->data[$k] = $v;
	}

	/**
	 * Gets cached object
	 *
	 * @return Mixed
	 */
	public function __get($k)
	{
		if (isset($this->data[$k]))
			return $this->data[$k];
	}

	public function set($k = null, $v = null)
	{
		$this->data->$k = $v;
	}

	public function get($k = null)
	{
		if(is_null($k))
		{
			if($this->context)
				return $this->context;
			else
				return $this;
		}

		return $this->data->$k;
	}
}

