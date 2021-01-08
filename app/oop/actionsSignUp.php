<?php

class Actions
{

		//------------INSERT INTO DATABASE----------------

	public function insert($ref,$userName,$fields)
		{	
			include	('db.php');		
			$pushData = $database->getReference($ref)->getChild($userName)->set($fields);

			header('Location:\Educado\LoginPage.php?msg=inserted');
		}


		//------------SELECT DATA FROM DATABASE----------------

	public function select($ref)
		{
			include('db.php');
			$getData = $database->getReference($ref)->getValue();

			return $getData;
		}
		
	

}

?>