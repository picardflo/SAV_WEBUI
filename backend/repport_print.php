<?php
	try {
		$connection = new PDO('mysql:host=localhost;dbname=sav_db;charset=utf8', 'sav_db', 'BoUiZ0TY5v7BzjYc');
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
    		echo 'ERROR: ' . $e->getMessage();
	}
	// test //
	//$data = $connection->query('SELECT * FROM `TECHNICIEN`');
     	//foreach($data as $row) {
        //print_r($row.["NOM_TECH"]); 
        //echo $row["NOM_TECH"]; 
    	//}

?>
