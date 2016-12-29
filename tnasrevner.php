<?php
function my_array_print($tab)
{
	foreach ($tab as $key => $value) {
		echo $key.'=>'.$value.'<br>';
	}
	echo '<br>';
}

function my_array_flip($params)
{
 $mirror = [];
 foreach ($params as $key => $value)
 {
 	$mirror[$value] = $key;
 }
 return $mirror;
}


$tab0 = ['Goodbye', 'Dennis'];

$tab1 = ['U', 'DUN', 'GOOFED'];

$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];

$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];

$tab4 = ['x-men', 'spiderman','great sayaman','iron man','superman', 'batman','wolverine', 'hulk'];

$result = my_array_flip($tab0);
my_array_print($result);
$result = my_array_flip($tab1);
my_array_print($result);
$result = my_array_flip($tab2);
my_array_print($result);
$result = my_array_flip($tab3);
my_array_print($result);
$result = my_array_flip($tab4);
my_array_print($result);