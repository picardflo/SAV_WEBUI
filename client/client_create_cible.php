<?php
	include '../backend/db_connect.php';

	$NOM_CLIENT = $_POST['NOM_CLIENT'];
  $PRENOM_CLIENT 	 = $_POST['PRENOM_CLIENT'];
  $ADRESSE_CLIENT = $_POST['ADRESSE_CLIENT'];
  $CP_CLIENT = $_POST['CP_CLIENT'];
  $VILLE_CLIENT = $_POST['VILLE_CLIENT'];
  $TEL_CLIENT = $_POST['TEL_CLIENT'];
  $MAIL_CLIENT = $_POST['MAIL_CLIENT'];

	$query = "INSERT IGNORE INTO CLIENT VALUES (NULL, :nom_client, :prenom_client, :adresse_client, :cp_client, :ville_client, :tel_client, :mail_client);";

	try {
		$exec = $connection->prepare($query);
		$exec->execute(array(
			':nom_client' 	=> $NOM_CLIENT,
			':prenom_client' 	=> $PRENOM_CLIENT,
			':adresse_client' 	=> $ADRESSE_CLIENT,
      ':cp_client' 	=> $CP_CLIENT,
      ':ville_client' 	=> $VILLE_CLIENT,
      ':tel_client' 	=> $TEL_CLIENT,
      ':mail_client' 	=> $MAIL_CLIENT

		));
	} catch(PDOException $e) {
		echo "ERROR on INSERT : ".$e->getMessage();
	}
	//echo "<img src="http://www.icone-gif.com/gif/outils/roue-dentelee/gear.gif" alt="Smiley face" height="42" width="42"> ";
	//sleep(5);
	header('Location:client_details_form.php');
?>
