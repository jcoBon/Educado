<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('actionsCreateClass2.php');

	$obj = new Actions();

	if (isset($_POST['create'])) {

		$ref = 'Classrooms';
		$subjectYear = $_POST['subjectYear'];
		$subjectSection = $_POST['subjectSection'];
		$subjectCode = $_POST['subjectCode'];

			$fields = [
						'subjectTitle' => $_POST['subjectTitle'],
						'subjectCode' => $_POST['subjectCode'],
						'subjectYear' => $_POST['subjectYear'],
						'subjectSection' => $_POST['subjectSection']
					  ];
					  
	$obj->insert($ref,$subjectYear,$subjectSection,$subjectCode,$fields);

	}


	if (isset($_GET['delete7'])) {

		$key = $_GET['delete7'];
		$ref = 'Classrooms/2nd Year/BSIT 01';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete8'])) {

		$key = $_GET['delete8'];
		$ref = 'Classrooms/2nd Year/BSIT 02';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete9'])) {

		$key = $_GET['delete9'];
		$ref = 'Classrooms/2nd Year/BSIT 03';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete10'])) {

		$key = $_GET['delete10'];
		$ref = 'Classrooms/2nd Year/BSIT 04';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete11'])) {

		$key = $_GET['delete11'];
		$ref = 'Classrooms/2nd Year/BSIT 05';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete12'])) {

		$key = $_GET['delete12'];
		$ref = 'Classrooms/2nd Year/BSIT 06';
		$obj->delete($ref,$key);
	}

	


?>