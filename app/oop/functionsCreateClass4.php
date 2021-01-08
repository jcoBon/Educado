<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('actionsCreateClass4.php');

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

	if (isset($_GET['delete19'])) {

		$key = $_GET['delete19'];
		$ref = 'Classrooms/4th Year/BSIT 01';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete20'])) {

		$key = $_GET['delete20'];
		$ref = 'Classrooms/4th Year/BSIT 02';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete21'])) {

		$key = $_GET['delete21'];
		$ref = 'Classrooms/4th Year/BSIT 03';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete22'])) {

		$key = $_GET['delete22'];
		$ref = 'Classrooms/4th Year/BSIT 04';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete23'])) {

		$key = $_GET['delete23'];
		$ref = 'Classrooms/4th Year/BSIT 05';
		$obj->delete($ref,$key);
	}

	if (isset($_GET['delete24'])) {

		$key = $_GET['delete24'];
		$ref = 'Classrooms/4th Year/BSIT 06';
		$obj->delete($ref,$key);
	}



?>