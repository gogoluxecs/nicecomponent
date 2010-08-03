<?php
class nc_lib_Context
implements nc_lib_Icontext
{
	protected $context = null;

	public function __construct($context = null)
	{
		if(!is_null($this->context))
			$this->context = $context;

		$this->data = new StdClass();
	}

	/**
	 * Sets cached object in the request - only once
	 *
	 * @return Void
	 */
	public function __set($k, $v)
	{
		if(!property_exists($this, $k))
			$this->data->$k = $v;
	}

	/**
	 * Gets cached object
	 *
	 * @return Mixed
	 */
	public function __get($k)
	{
		return $this->data->$k;
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

