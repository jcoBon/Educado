<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('actionsCreateClass.php');

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


	if (isset($_GET['delete1'])) {

		$key = $_GET['delete1'];
		$ref = 'Classrooms/1st Year/BSIT 01';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete2'])) {

		$key = $_GET['delete2'];
		$ref = 'Classrooms/1st Year/BSIT 02';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete3'])) {

		$key = $_GET['delete3'];
		$ref = 'Classrooms/1st Year/BSIT 03';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete4'])) {

		$key = $_GET['delete4'];
		$ref = 'Classrooms/1st Year/BSIT 04';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete5'])) {

		$key = $_GET['delete5'];
		$ref = 'Classrooms/1st Year/BSIT 05';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete6'])) {

		$key = $_GET['delete6'];
		$ref = 'Classrooms/1st Year/BSIT 06';
		$obj->delete($ref,$key);
	}

	

?>