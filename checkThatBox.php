<?php
if(isset($_POST['box'])){

	if(!empty($_POST['box'])){

		$first = true;

		foreach($_POST['box'] as $selected)
		{
			if ($first == false) {
				echo ', ';
			}
			echo $selected;
			$first = false;
		}
	}
	
}
else {
		echo 'Aucune valeur n\'a étè selectionnèe';
	}