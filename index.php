<!DOCTYPE html>
<!-- Index -->
<html>
	<head>
		<meta charset ="utf-8"/>
		<title>SAV - Accueil</title>
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
			<h1><span class="glyphicon glyphicon-globe"></span> DINFADOM</h1>
			</br>
			<!-- Menu (barre) -->
			<nav class="navbar navbar-default">
    				<div class="navbar-header">
      					<a class="navbar-brand glyphicon glyphicon-home" href="index.php"> Home</a>
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
                        <li><a href="client/client.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Recherche client</a></li>
                        <li><a href="client/client_details_form.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Créer client</a></li>
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
                        <li><a href="materiel/materiel.php"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Recherche Matériel</a></li>
                        <li><a href="materiel/materiel_details_form.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Créer Matériel</a></li>
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
             		   <li><a href="admin/tech_modify.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Gestion Technicien</a></li>
                </ul>
      	</div>
      </div>
    	</nav>
			

      <!-- Cadre principale -->
      <div class="jumbotron">
				<div class="container">
  				<h1>DINFADOM</h1>
  					<p>Cette interface est exclusivement destinée à l'atelier et au SAV</p>
  					<p><a class="btn btn-primary btn-lg" href="#" role="button">Démarrer</a></p>
				</div>
			</div>
      <div class="container">
          <h1><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Tableau de bord</h1>
			 <div class="btn-group" role="group">
					<button type="button" class="btn btn-default">Aujourd'hui</button>
  					<button type="button" class="btn btn-default">5 prochains jours</button>
  					<button type="button" class="btn btn-default">10 Prochains jours</button>
			</div>
  			</br>
  			</br>
  			</br>
  			</br>
        </br>
        </br>
        </br>
      </div>
			<div class="container">
         	<h1><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Calendrier Interventions</h1>
				<div class="btn-group" role="group">
           <button type="button" class="btn btn-default">PME/TPE</button>
           <button type="button" class="btn btn-default">Particuliers</button>
        </div>
					</br>
          </br>
          </br>
          </br>
          </br>
          </br>
          </br>
         </div>
      </div>
			<footer>
        			<center><p>&copy; 2016 DINFADOM, SARL.</p></center>
     			</footer>
		</body>
</html>
