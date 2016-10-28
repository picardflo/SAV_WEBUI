<?php
	include '../backend/db_connect.php';

	$NOM_TECH = $_POST['NOM_TECH'];
  	$PRENOM_TECH = $_POST['PRENOM_TECH'];
  	$MDP_TECH = $_POST['MDP_TECH'];

	$query = "INSERT IGNORE INTO TECHNICIEN VALUES (NULL, :nom_tech, :prenom_tech, :mdp_tech);";

	try {
		$exec = $connection->prepare($query);
		$exec->execute(array(
			':nom_tech' 	=> $NOM_TECH,
			':prenom_tech' 	=> $PRENOM_TECH,
			':mdp_tech' 	=> $MDP_TECH
		));
	} catch(PDOException $e) {
		echo "ERROR on INSERT : ".$e->getMessage();
	}
	//echo "<img src="http://www.icone-gif.com/gif/outils/roue-dentelee/gear.gif" alt="Smiley face" height="42" width="42"> ";
	//sleep(5);
	header('Location:tech_modify.php');
?>
