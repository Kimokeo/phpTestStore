<?php
try {
	$db = new PDO("mysql:host=localhost;dbname=printsnstuff;port=8889","root","root");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
} catch (Exception $e){
	echo "There was an error connecting to the database.";
	exit;
}

?>

