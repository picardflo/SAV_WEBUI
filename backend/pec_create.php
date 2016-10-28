<?php
	include '../backend/db_connect.php';

	//Client//
  	$NOM_CLIENT = $_POST['NOM_CLIENT'];
	$PRENOM_CLIENT = $_POST['PRENOM_CLIENT'];
	$ADRESSE_CLIENT = $_POST['ADRESSE_CLIENT'];
	$CP_CLIENT = $_POST['CP_CLIENT'];
	$VILLE_CLIENT = $_POST['VILLE_CLIENT'];
	$TEL_CLIENT = $_POST['TEL_CLIENT'];
	$MAIL_CLIENT = $_POST['MAIL_CLIENT'];

	//Matériel//
	$MARQUE_MAT = $_POST['MARQUE_MAT'];
	$NSERIE_MAT = $_POST['NSERIE_MAT'];
	$TYPE_MAT = $_POST['TYPE_MAT'];
	
	//Tech/symp//
	$CHOIX_TECH = $_POST['CHOIX_TECH']
	
	$DESC_PEC = $_POST['DESC_PEC']
	$DATE_PEC = $_POST['DATE_PEC']

    //Insert dans la DB//
	$query_cli = "INSERT INTO CLIENT VALUES (NULL, :nom_client, :prenom_client, :addresse_client, :cp_client, :ville_client, :tel_client,:mail_client);";
	$query_mat = "INSERT INTO MATERIEL VALUES (NULL, :marque_mat, :nserie_mat, :type_mat);";
	$query_pec = "INSERT INTO PEC VALUES (NULL, :date_pec, CREE, :desc_pec);";
	
	//Insert dans les tables//
	try {
		$exec = $connection->prepare($query_cli);
		$exec->execute(array(
			':nom_client' 	=> $NOM_CLIENT,
			':prenom_client' 	=> $PRENOM_CLIENT,
			':addresse_client' 	=> $ADRESSE_CLIENT,
			':cp_client' 	=> $CP_CLIENT,
			':ville_client' 	=> $VILLE_CLIENT,
			':tel_client' 	=> $TEL_CLIENT,
			':mail_client' 	=> $MAIL_CLIENT,
		));
	} catch(PDOException $e) {
		echo "ERROR on INSERT : ".$e->getMessage();
	}
	try {
		$exec = $connection->prepare($query_mat);
		$exec->execute(array(
			':marque_mat' 	=> $MARQUE_MAT,
			':nserie_mat' 	=> $NSERIE_MAT,
			':type_mat' 	=> $TYPE_MAT,
		));
	} catch(PDOException $e) {
		echo "ERROR on INSERT : ".$e->getMessage();
	}
	try {
		$exec = $connection->prepare($query_pec);
		$exec->execute(array(
			':date_pec' 	=> $DATE_PEC
			':desc_pec' 	=> $DESC_PEC
		));
	} catch(PDOException $e) {
		echo "ERROR on INSERT : ".$e->getMessage();
	}
	//Redirection//
	header('Location:pec_print.php');
?>
