<!DOCTYPE html>
<!-- CD -->
<html>
	<head>
		<meta charset ="utf-8"/>
		<title>SAV - client-details </title>
   	</head>
	<!-- Bootstrap -->
	      <!-- JQuery -->
        <script src="../bootstrap/js/jquery.min.js"></script>
        <!-- CSS -->
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- JS -->
        <script src="../bootstrap/js/bootstrap.js"></script>

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
	<!-- Tableau Client -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Informations Client</h3>
			</div>
			<div class="panel-body">

            <!-- Form client -->
            <div class="panel-body">
            <form method="POST" action="../client/client_create_cible.php" id="client_backend.php">
                <?php
                    include '../backend/db_connect.php';
										if (isset($_POST['MAIL_CLIENT'])) {
                    	$MAIL_CLIENT = $_POST['MAIL_CLIENT'];
											$query = "SELECT * FROM CLIENT WHERE MAIL_CLIENT='$MAIL_CLIENT';";
										} else if (isset($_GET['MAIL_CLIENT'])) {
											$ID_CLIENT = $_GET['ID_CLIENT'];
											$query = "SELECT * FROM CLIENT WHERE ID='$ID_CLIENT';";
										}
                    //Insert dans les tables//
                    try {
                        $data = $connection->query($query);
                        foreach($data as $ligne) {
													  $id_client = $ligne['ID'] ;
														$nom = $ligne['NOM_CLIENT'] ;
                            $prenom = $ligne['PRENOM_CLIENT'] ;
														$adresse = $ligne['ADRESSE_CLIENT'] ;
														$cp = $ligne['CP_CLIENT'] ;
														$ville = $ligne['VILLE_CLIENT'] ;
														$tel = $ligne['TEL_CLIENT'] ;
                            $mail = $ligne['MAIL_CLIENT'] ;
                        }
                    }
                    catch(PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                    }

                ?>
                <?php
                    if (isset($nom)) {
                        echo "<p><label> Nom :<label>".$nom."</label></label></p>";
                        echo "<p><label> Preom :<label>".$prenom."</label></label></p>";
												echo "<p><label> Adresse :<label>".$adresse."</label></label></p>";
												echo "<p><label> CP :<label>".$cp."</label></label></p>";
												echo "<p><label> Ville :<label>".$ville."</label></label></p>";
												echo "<p><label> Tel :<label>".$tel."</label></label></p>";
												echo "<p><label> Mail :<label>".$mail."</label></label></p>";
                     } else {
                        echo "<p><label> Nom :<input type='text' name='NOM_CLIENT' /></label></p>";
                        echo "<p><label> Prenom :<input type='text' name='PRENOM_CLIENT' /></label></p>";
												echo "<p><label> Adresse :<input type='text' name='ADRESSE_CLIENT' /></label></p>";
												echo "<p><label> CP :<input type='text' name='CP_CLIENT' /></label></p>";
												echo "<p><label> Ville :<input type='text' name='VILLE_CLIENT' /></label></p>";
												echo "<p><label> Tel :<input type='text' name='TEL_CLIENT' /></label></p>";
												echo "<p><label> Mail :<input type='text' name='MAIL_CLIENT' /></label></p>";
												//submit Buttom//
												echo "<form method='POST' action='client_create_cible.php' id='tech_create'>";
												echo "<p><input class='btn btn-primary btn-lg' type='submit' /></form></p>";
                     }
                ?>
                </br>
                </br>

                </form>
            </div>


    <!-- Tableau Dynamique -->


    <?php
        foreach($data as $ligne)
        {
            echo "<tr><td>";
            echo $ligne['ID'] ;
            echo "</td>\n<td>";
            echo $ligne['NOM_CLIENT'] ;
            echo "</td><td>" ;
            echo $ligne['PRENOM_CLIENT'];
            echo "</td><td>";
            echo $ligne['ADRESSE_CLIENT'] ;
            echo "</td><td>" ;
            echo $ligne['CP_CLIENT'];
            echo "</td><td>" ;
            echo $ligne['VILLE_CLIENT'];
            echo "</td><td>" ;
            echo $ligne['TEL_CLIENT'];
            echo "</td><td>" ;
            echo $ligne['MAIL_CLIENT'];
            echo "</td><td>" ;
            echo "<center><button type='button' class='btn btn-primary'>Modifier</button></center>";
            echo "</td></tr>" ;
        }
    ?>
            </tr></thead>
            </table>
            </body>
            </div>
        </div>

    <!-- Tableau Materiel -->
    <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Materiel Client</h3>
            </div>

        <div class="panel-body">
            <!-- tableau -->
            <body id="table_mat">
            <table cellpadding="2" align="center" valign="middle" border="2" class="order-table table table-hover table-striped">
            <thead><tr class="active">
                <th>ID</th>
                <th>Marque</th>
                <th>S/N</th>
                <th>Type</th>
                <th>Action(s)</th>
            </tr></thead>

    <!-- Tableau Dynamique -->
    <?php
        include '../backend/db_connect.php';
				//$ID_CLIENT= $_POST['ID_CLIENT']

				//Insert dans les tables//
        try {
						if (isset($id_client)){
            	$data = $connection->query("SELECT * FROM MATERIEL INNER JOIN CLIENT ON MATERIEL.ID = CLIENT.ID WHERE CLIENT.ID = $id_client");
						}
        }

        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    ?>

    <tbody>
    <?php
				if (isset($id_client)){
					foreach($data as $ligne)
	        {
	            echo "<tr><td>";
	            echo $ligne['ID'] ;
	            echo "</td>\n<td>";
	            echo $ligne['MARQUE_MAT'];
	            echo "</td><td>" ;
	            echo $ligne['NSERIE_MAT'];
	            echo "</td><td>";
	            echo $ligne['TYPE_MAT'];
	            echo "</td><td>" ;
	            echo "<form action='../backend/pec_print.php' method='post'>";
	            echo "<center><button type='submit' formaction='../backend/pec_print.php' class='btn btn-primary'>Créer PEC</button>";
							echo "</form>" ;
							echo "</td></tr>" ;
	        }
		    }
    ?>

    </tbody>
    </table>
		<form action='../materiel/materiel.php' method='post'>
			<input type="hidden" name="id_client" value="<?php echo $id_client ;?>"/>
    	<button type='submit' class='btn btn-primary'>Ajouter un matériel</button>
		</form>
		</div>


	</body>
</html>
