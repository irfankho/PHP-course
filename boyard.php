<?php

function my_array_print($tab)
{
	foreach ($tab as $key => $value) {
		echo $key.'=>'.$value.'<br>';
	}
	echo '<br>';
}

$tab0 = ['Goodbye', 'Dennis'];

$tab1 = ['U', 'DUN', 'GOOFED'];

$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];

$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];

$tab4 = ['x-men', 'spiderman','great sayaman','iron man','superman', 'batman','wolverine', 'hulk'];

my_array_print($tab0);
my_array_print($tab1);
my_array_print($tab2);
my_array_print($tab3);
my_array_print($tab4);