<?php

	//------------CREATE OBJECTS AND RUN FUNCTIONS / METHODS----------------
	
	include('actionsSignUp.php');

	$obj = new Actions();

	if (isset($_POST['signup'])) {

		$ref = 'users';
		$userName = $_POST['userName'];

			$fields = [
						'mobileNumber' => $_POST['mobileNumber'],
						'emailAdd' => $_POST['emailAdd'],
						'fName' => $_POST['fName'],
						'lName' => $_POST['lName'],
						'password' => $_POST['password'],
						'userName' => $_POST['userName'],
						'year' => $_POST['year'],
						'section' => $_POST['section'],
						'userType' => $_POST['userType']
					  ];
			
			 echo "<script LANGUAGE='JavaScript'>
                  window.alert('SUCCESS!');
                  window.location.href='';
                  </script>";

	$obj->insert($ref,$userName,$fields);

	}


?>