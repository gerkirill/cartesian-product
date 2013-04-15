<?php
class counter
{
	private $wheels = array();

	public function addWheel($wheel)
	{
		$lastWheel = end($this->wheels);
		$this->wheels[] = $wheel;
		if(!empty($lastWheel))
		{
			$lastWheel->nextWheel = $wheel;
		}
	}

	public function getFirstWheel()
	{
		return $this->wheels[0];
	}

	public function getCombination()
	{
		foreach($this->wheels as $wheel)
		{
			$result[$wheel->getName()] = $wheel->getValue();
		}
		return $result;
	}
}