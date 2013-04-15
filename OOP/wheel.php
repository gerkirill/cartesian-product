<?php
class wheel
{
	private $name;
	private $values = array();
	private $nextWheel;
       
	function __construct($name, $array)
	{
		$this->name = $name;
		$this->values = $array;
	}

	public function getName()
	{
		return $this->name;
	}
       
	function scroll()
	{
		if(next($this->values) === false)
		{
			reset($this->values);
			if($this->nextWheel)
			{
				return $this->nextWheel->scroll();
			}
			else
			{
				return false;
			}
		}
		return true;
	}

	function getValue()
	{
		return current($this->values);
	}
}