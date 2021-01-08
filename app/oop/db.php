<?php

	require ('C:/xampp/htdocs/Educado/vendor/autoload.php');

	use Kreait\Firebase\Factory;
	use Kreait\Firebase\ServiceAccount;

	$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/educado-be26c-firebase-adminsdk-zn1oo-f8fc23c6ac.json');

	$firebase = (new Factory)
		->withServiceAccount($serviceAccount)
		->withDatabaseUri('https://educado-be26c.firebaseio.com/')
		->create();

	$database = $firebase->getDatabase();


?>