<?php
if(isset($_POST['box'])){
	$box = $_POST ['box'];
	echo 'selection' .' ' . $box;
} 
else {
	echo 'rien';
}
