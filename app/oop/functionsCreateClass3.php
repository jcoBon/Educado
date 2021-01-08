<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('actionsCreateClass3.php');

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


	if (isset($_GET['delete13'])) {

		$key = $_GET['delete13'];
		$ref = 'Classrooms/3rd Year/BSIT 01';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete14'])) {

		$key = $_GET['delete14'];
		$ref = 'Classrooms/3rd Year/BSIT 02';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete15'])) {

		$key = $_GET['delete15'];
		$ref = 'Classrooms/3rd Year/BSIT 03';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete16'])) {

		$key = $_GET['delete16'];
		$ref = 'Classrooms/3rd Year/BSIT 04';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete17'])) {

		$key = $_GET['delete17'];
		$ref = 'Classrooms/3rd Year/BSIT 05';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete18'])) {

		$key = $_GET['delete18'];
		$ref = 'Classrooms/3rd Year/BSIT 06';
		$obj->delete($ref,$key);
	}


?>