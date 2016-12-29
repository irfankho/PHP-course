<?php


function myCount($sheeps)
{
	$count = 0;
	foreach ($sheeps as $total) 
	{
		$count++;
	}
	echo $count.'<br>';
}

$tab0 = ['Goodbye', 'Dennis'];

$tab1 = ['U', 'DUN', 'GOOFED'];

$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];

$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];

$tab4 = ['x-men', 'spiderman','great sayaman','iron man','superman', 'batman','wolverine', 'hulk'];

myCount($tab0);
myCount($tab1);
myCount($tab2);
myCount($tab3);
myCount($tab4);