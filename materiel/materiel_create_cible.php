<?php

include '../backend/db_connect.php';

$ID_CLIENT = $_POST['ID_CLIENT'];
$MARQUE_MAT = $_POST['MARQUE_MAT'];
$SN_MAT 	 = $_POST['SN_MAT'];
$CHOIX_MAT = $_POST['CHOIX_MAT'];

$query = "INSERT INTO MATERIEL VALUES (NULL, :marque_mat, :sn_mat, :choix_mat, :id_client );";

try {
  $exec = $connection->prepare($query);
  $exec->execute(array(
    ':marque_mat' 	=> $MARQUE_MAT,
    ':sn_mat' 	=> $SN_MAT,
    ':choix_mat' 	=> $CHOIX_MAT,
    ':id_client' 	=> $ID_CLIENT

  ));
} catch(PDOException $e) {
  echo "ERROR on INSERT : ".$e->getMessage();
}
//echo "<img src="http://www.icone-gif.com/gif/outils/roue-dentelee/gear.gif" alt="Smiley face" height="42" width="42"> ";
//sleep(5);
header('Location:../client/client_details_form.php?id_client=$ID_CLIENT');
?>
