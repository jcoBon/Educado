<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('actionsJoinClass.php');

	$obj = new Actions();
	
	if (isset($_POST['view'])) {

		$ref = 'potato';
		$subjectYear = $_POST['subjectYear'];
		$subjectSection = $_POST['subjectSection'];
		$subjectCode = $_POST['subjectCode'];

	$obj->select($ref,$subjectYear,$subjectSection,$subjectCode);



	}

?>