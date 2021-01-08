<?php

class Actions
{
		//------------SELECT DATA FROM DATABASE----------------

	public function select($ref)
		{
			include('db.php');

			$getData = $database->getReference($ref)->getValue();

			return $getData;
		}


}

?>