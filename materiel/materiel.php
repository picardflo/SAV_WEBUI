<!DOCTYPE html>
<!-- PEC -->
<?php
$id_client = $_POST['ID_CLIENT'];
?>

<html>
	<head>
		<meta charset ="utf-8"/>
		<title>SAV - Client </title>
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
	<!-- Formulaire -->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Recherche Maeriel</h3>
			</div>
			<div class="panel-body">
			<form method="POST" action="materiel_create_cible.php" id="materiel_create_cible">
				<p><label> Marque :  <input type="text" name="MARQUE_MAT" /></label></p>
				<p><label> S/N :  <input type="text" name="SN_MAT" /></label></p>
				<p><label> Type :
				<select name="CHOIX_MAT"/></label>
						<option value="PC">PC</option>
						<option value="PORTABLE">PORTABLE</option>
						<option value="BAREBONE">BAREBONE</option>
						<option value="SERVEUR">SERVEUR</option>
						<option value="ALLINONE">ALLINONE</option>
						<option value="AUTRES">AUTRES</option>
				</select>
				</br>
					<input type="hidden" name="id_client" value="<?php echo $id_client ;?>"/>
	    		<button type='submit' class='btn btn-primary'>Ajouter un matériel</button>
					<p><input class="btn btn-primary btn-lg" type="submit" /></p>
				</form>
			</div>
        </div>
	</body>
</html>
