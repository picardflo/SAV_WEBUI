<?php
if( $_POST )
{
  $con = mysql_connect("localhost","sav_db","BoUiZ0TY5v7BzjYc");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("sav_db", $con);

  $NOM_TECH = $_POST['NOM_TECH'];
  $PRENOM_TECH = $_POST['PRENOM_TECH'];
  $MDP_TECH = $_POST['MDP_TECH'];

  $query = "INSERT INTO `sav_db`.`TECHNICIEN` (`ID`, `NOM_TECH`, `PRENOM_TECH`, `MDP_TECH`) VALUES ('NULL','$NOM_TECH', '$PRENOM_TECH', '$MDP_TECH') ON DUPLICATE KEY UPDATE (`NOM_TECH`, `PRENOM_TECH`, `MDP_TECH`)";

  mysql_query($query);

  echo "<h2>OK</h2>";

  mysql_close($con);
}
?>
