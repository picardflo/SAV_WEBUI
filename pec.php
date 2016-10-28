<!DOCTYPE html>
<!-- PEC -->
<html>
	<head>
		<meta charset ="utf-8"/>
		<title>SAV - Création P.E.C</title>
   	</head>
	<!-- Bootstrap -->
	      <!-- JQuery -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- JS -->
        <script src="bootstrap/js/bootstrap.js"></script>	  
   	
	<body>
	<!-- Logo -->
	<!--<center><img src="img/logo_dinfadom.png" alt="logo_dinfadom" width="12%" height="12%"></center>-->
      	</br>
      	<h1><span class="glyphicon glyphicon-globe"aria-hidden="true"></span> DINFADOM</h1>
      	</br>
	<!-- Menu (barre) -->
	<nav class="navbar navbar-default">
    		<div class="navbar-header">
      			<a class="navbar-brand glyphicon glyphicon-home" href="index.php"> Home</a>
      			<a class="navbar-brand glyphicon glyphicon-education" href="#"> help</a>
        	</div>
	</nav>
	 <!-- Menu (barre) -->
                <nav class="navbar navbar-default">
                    <div class="btn-group" role="group">
                        <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="pec-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="glyphicon glyphicon-pencil"></span> Client
                                <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="pec-dropdown">
                                <li><a href="client/client.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Recherche client</a></li>
                                <li><a href="client/client_details_form.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Créer client</a></li>


                        </ul>               
                        </div>
                   </div>
                        <div class="btn-group" role="group">
                                <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="administration-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="glyphicon glyphicon-user"></span> Administration
                                        <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="administration-dropdown">
                                	<li><a href="admin/tech_create.php">Créer un Technicien</a></li>
                                        <li><a href="admin/tech_modify.php">Modifier un Technicien</a></li>
                                        <li><a href="admin/tech_remove.php">Supprimer un Technicien</a></li>
				</ul>
                                </div>
                        </div>
                </nav>	
	<!-- Formulaire -->

	<!-- Form client -->
        <div class="panel panel-default">
            <div class="panel-heading">
				<h3 class="panel-title">Informations client</h3>
			</div>
			<br>
               <?php
                    include 'backend/db_connect.php';
                        
                    //Insert dans les tables//
                    try {
                        $data = $connection->query("SELECT * FROM CLIENT WHERE id=1;");
                        foreach($data as $ligne) {
                            $nom = $ligne['NOM_CLIENT'] ;
                            $prenom = $ligne['PRENOM_CLIENT'] ;
                            $mail = $ligne['MAIL_CLIENT'] ;
                        }
                    } 
                    catch(PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                    }
                    echo $_POST['MAIL_CLIENT']
                ?> 
                <?php
                    if (isset($nom)) {
                        echo "<p><label> Nom :<label>".$nom."</label></label></p>";
                        echo "<p><label> Preom :<label>".$prenom."</label></label></p>";
                        echo "<p><label> Mail :<label>".$mail."</label></label></p>";
                     } else {
                        echo "<p><label> Nom :<input type='text' name='NOM_CLIENT' /></label></p>";
                        echo "<p><label> Prenom :<input type='text' name='PRENOM_CLIENT' /></label></p>";
                        echo "<p><label> Mail :<input type='text' name='MAIL_CLIENT' /></label></p>";
                        echo "<p><input class='btn btn-primary btn-lg' type='submit' /></p>";
                     }
                ?>
                </br>
                </br>
                
            </form>
        </div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Symptômes et technicien réferent</h3>
			</div>
				</br>
				<p><label> Technicien référent :
				<select name="choix_tech"/></label>
						<option value="PICARD Florian">PICARD Florian</option>
						<option value="GOLLEAU Alain">GOLLEAU Alain</option>
				</select>
				<p><label> Descriptions :</p></label></p><p><textarea type="text" name="description" form="pec" rows="30" cols="80">Etat - Informations - Symptomes : </textarea></p>
				</br>
				</br>
				</br>
				<form method="POST" action="backend/pec_print.php" id="pec_print">
				<p><input class="btn btn-primary btn-lg" type="submit" /></p>
				</form>
				</div>
		</div>
	</body>
</html>
