<?php
    include '../backend/db_connect.php';

    //Client//
    $MAIL_CLIENT = $_POST['MAIL_CLIENT'];

    //Insert dans la DB//
    //$query_cli_check = "SELEC INTO CLIENT VALUES (NULL, :nom_client, :prenom_client, :addresse_client, :cp_client, :ville_client, :tel_client,:mail_client);";
    
    //Insert dans les tables//
    try {
        $exec = $connection->prepare($query_cli_check);
        $exec->execute(array(
            ':nom_client'   => $NOM_CLIENT,
        ));
    } catch(PDOException $e) {
        echo "ERROR on INSERT : ".$e->getMessage();
    
    //Redirection//
    header('Location:client.php');
?>
