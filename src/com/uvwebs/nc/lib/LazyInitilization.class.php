<?php
class nc_lib_LazyInitilization
{
	private $type = null;
	static private $types = array();

	static public function init($type)
	{
		if(!array_key_exists($type, self::$types))
		{
			self::$types[$type] = new $type();
		}

		return self::$types[$type];
	}

	static public function getCurrentTypes()
	{
		return count(self::$types);
	}
}

