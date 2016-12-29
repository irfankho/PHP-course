<?php

function oddOrEven($var)
{
	if($var % 2 == 1)
	{
		echo 'Odd';
	}
	else
	{
		echo 'Even';
	}
}
// test if there is an error when parameter "data" don't existe
$number = $_GET['data'];
oddOrEven($number);