<?php

function onlyTheBest($adata)
{

$champion = null;

	foreach ($adata as $challenger) {
		if (strlen($challenger) >= strlen($champion))
		{
 			$champion = $challenger;
		}
	}

		echo $champion.'<br>';

}

$tab0 = ['Goodbye', 'Dennis'];

$tab1 = ['U', 'DUN', 'GOOFED'];

$tab2 = ['name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed'];

$tab3 = ['bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry'];

$tab4 = ['x-men', 'spiderman','great sayaman','iron man','superman', 'batman','wolverine', 'hulk'];

onlyTheBest($tab0);
onlyTheBest($tab1);
onlyTheBest($tab2);
onlyTheBest($tab3);
onlyTheBest($tab4);



