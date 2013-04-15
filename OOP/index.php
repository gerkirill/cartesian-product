<?php
$attrs = array(
	0 => array(
		'attribute' => 'color',
		'values' => array(
			0 => array('value' => 'green'),
			1 => array('value' => 'blue')
		)
	),
       
	1 => array(
		'attribute' => 'size',
		'values' => array(
			0 => array('value' => 'S'),
			1 => array('value' => 'M'),
			2 => array('value' => 'L')
		)
	),
       
	2 => array(
		'attribute' => 'attr',
		'values' => array(
			0 => array('value' => 'V1'),
			1 => array('value' => 'V2'),
		)
	)
);

include('counter.php');
include('wheel.php');

$counter = new counter();
foreach($attrs as $i=>$attribute)
{
	$values = array();
	foreach($attribute['values'] as $value)
	{
		$values[] = $value['value'];
	}
	$wheel = new wheel($attribute['attribute'], $values);
	$counter->addWheel($wheel);
}
$result = array();
do
{
	$result[] = $counter->getCombination();
}
while($counter->getFirstWheel()->scroll());

var_dump($result);