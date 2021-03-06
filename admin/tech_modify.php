<!DOCTYPE html>
<!-- TECH_CREATE -->
<html>
	<head>
		<meta charset ="utf-8"/>
		<title>SAV - Création Technicien</title>
   	</head>
	<!-- Bootstrap -->
	      <!-- JQuery -->
        <script src="../bootstrap/js/jquery.min.js"></script>
        <!-- CSS -->
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- JS -->
        <script src="../bootstrap/js/bootstrap.js"></script>	  
	<! -- Database Connect -->
	<!--<link href=="../backend/db_connect.php"></a>-->   	
	<body>
	<!-- Logo -->
	<!--<center><img src="img/logo_dinfadom.png" alt="logo_dinfadom" width="12%" height="12%"></center>-->
      	</br>
      	<h1><span class="glyphicon glyphicon-globe"aria-hidden="true"></span> DINFADOM</h1>
      	</br>
	<!-- Menu (barre) -->
            <nav class="navbar navbar-default">
                    <div class="navbar-header">
                        <a class="navbar-brand glyphicon glyphicon-home" href="../index.php"> Home</a>
                        <a class="navbar-brand glyphicon glyphicon-education" href="#"> help</a>
            </div>
            </nav>
        <!-- Menu Dropdown (barre) -->
        <nav class="navbar navbar-default">
            <div class="btn-group" role="group">
          <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="pec-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span class="glyphicon glyphicon-user"></span> Client
                      <span class="caret"></span>
                </button>
                    <ul class="dropdown-menu" aria-labelledby="pec-dropdown">
                        <li><a href="../client/client.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Recherche client</a></li>
                        <li><a href="../client/client_details_form.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Créer client</a></li>
                    </ul>               
          </div>
        </div>
        <div class="btn-group" role="group">
          <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="pec-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span class="glyphicon glyphicon-phone"></span> Matériel
                      <span class="caret"></span>
                </button>
                    <ul class="dropdown-menu" aria-labelledby="pec-dropdown">
                        <li><a href="../materiel/materiel.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Recherche Matériel</a></li>
                        <li><a href="../materiel/materiel_details_form.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Créer Matériel</a></li>
                    </ul>               
          </div>
        </div>
      <div class="btn-group" role="group">
                <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="administration-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <span class="glyphicon glyphicon-th"></span> Administration
                        <span class="caret"></span>
            </button>
                    <ul class="dropdown-menu" aria-labelledby="administration-dropdown">
                       <li><a href="../admin/tech_modify.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Gestion Technicien</a></li>
                </ul>
        </div>
      </div>
        </nav>	
	<!-- Show Table Tech. -->
	<div class="panel panel-default">
		<div class="panel-heading">
                                <h3 class="panel-title">Liste technicien(s) existant(s)</h3>
                        </div></br>
	<!-- Connexion BD -->
	
	  <!-- Tableau Dynamique -->
    <?php
    include '../backend/db_connect.php';
        
    //Insert dans les tables//
    try {
        $data = $connection->query('SELECT * FROM TECHNICIEN');
    } 
    catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
    }   
    ?>
	
	<!-- Genération du Tableau -->
    <body id="table_tech">
            <table cellpadding="2" align="center" valign="middle" border="2" class="order-table table table-hover table-striped">
            <thead><tr class="active">
                <th>ID</th>
                <th>Nom du technicien</th>
                <th>Prénom du technicien</th>
                
	<!-- Ajoute au tableau -->
	<tbody>
		<?php
        foreach($data as $ligne)
        {
            echo "<tr><td>";
            echo $ligne['ID'] ;
            echo "</td>\n<td>";
            echo $ligne['NOM_TECH'] ;
            echo "</td><td>" ;
            echo $ligne['PRENOM_TECH'];
            echo "</td></tr>" ;

        }
    ?>
	</tr></thead>
            </table>
            </body>
            </div>
        </div>

	<!-- Formulaire -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Créer un nouveau technicien</h3>
			</div>
			<div class="panel-body">
			<form method="POST" action="tech_create_cible.php" id="tech_create">
				<p><label> Nom : <input type="text" name="NOM_TECH" /></label></p>
				<p><label> Prénom : <input type="text" name="PRENOM_TECH"/></label></p>
				<hr color="black">
				<p><label> Mot de passe : <input type="text" name="MDP_TECH"/></label></p>
				</br>
				</br>
				</br>
				<p><input class="btn btn-primary btn-lg" type="submit" /></p>
				</form>
			</div>

	</body>
</html>
