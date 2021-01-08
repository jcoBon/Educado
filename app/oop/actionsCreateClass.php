<?php

class Actions
{

		//------------INSERT INTO DATABASE----------------

	public function insert($ref,$subjectYear,$subjectSection,$subjectCode,$fields)
		{	
			include	('db.php');		
			$pushData = $database->getReference($ref)->getChild($subjectYear)->getChild($subjectSection)->getChild($subjectCode)->set($fields);

			header('Location:\Educado\Home.php');
		}


		//------------SELECT DATA FROM DATABASE----------------

	public function select($ref)
		{
			include('db.php');
			$getData = $database->getReference($ref)->getValue();

			return $getData;
		}

		//------------DELETE DATA FROM DATABASE----------------

	public function delete($ref,$key)
		{
			include('db.php');
				$database->getReference($ref)->getChild($key)->remove();

			header('Location:\Educado\Home.php?msg=deleted');
		}
		
	

}

?>