<!DOCTYPE html>
<!-- Cible -->
<html>
        <head>
                <meta charset ="utf-8"/>
                <title>SAV - Formulaire</title>
        </head>
	<!-- Bootstrap -->
                <!-- CSS -->
                <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap/css/a4.css" rel="stylesheet">
                <!-- JS -->
                <script src="bootstrap/js/bootstrap.js"></script>

                <body>
		<div class="page ">
			<!-- DINFADOM -->
			<h1><span class="glyphicon glyphicon-globe"aria-hidden="true"></span> DINFADOM</h1>
			<div class="well">
			Tel. : 00.00.00.00.00 </br> 
			Mail. : contact@dinfadom.com</br>
			</div>
			
			<!-- Client -->
			<div class="panel panel-default">
  				<div class="panel-heading">
                                       	<h3 class="panel-title">Client</h3>
                               	</div>
 				<div class="panel-body">
				Nom : <?php echo htmlspecialchars($_POST['nom_client']); ?></br>
				Prénom : <?php echo htmlspecialchars($_POST['prenom_client']); ?></br>
                        	Adresse : <?php echo htmlspecialchars($_POST['adresse_client']); ?></br>
                        	CP : <?php echo htmlspecialchars($_POST['cp_client']); ?></br>
                        	Ville : <?php echo htmlspecialchars($_POST['ville_client']); ?></br>
                        	Tel. : <?php echo htmlspecialchars($_POST['tel_client']); ?></br>
                        	Mail : <?php echo htmlspecialchars($_POST['mail_client']); ?></br>
				</div>
			</div> 
			
			<!-- Matériel -->
			<div class="panel panel-default">
                                <div class="panel-heading">
					<h3 class="panel-title">Matériel</h3>
                                </div>
				<div class="panel-body">
				Marque : <?php echo htmlspecialchars($_POST['marque_pc_client']); ?></br>
                        	S/N : <?php echo htmlspecialchars($_POST['sn_pc_client']); ?></p>
				</div>
			</div>
			<!-- Tech/symp -->
			<div class="panel panel-default">
                                <div class="panel-heading">
                                        <h3 class="panel-title">Technicien et Symptômes</h3>
                                </div>
				<div class="panel-body">
				Technicien référent : <?php echo $_POST['choix_tech']; ?></br>
                       		Symtômes/Descriptions : <?php echo htmlspecialchars($_POST['description']); ?></br>
				</div>
			</div>
			<!-- Mentions legales -->
			<div class="panel panel-default">
  				<div class="panel-heading">
    					<h3 class="panel-title">Mentions légales</h3>
  				</div>
  					<div class="panel-body">
                        			<p>Il vous appartient de sauvegarder vos données personnelles régulièrement et en tout état de cause avant toute intervention, DINFADOM ne pouvant être
                        			tenue pour responsable de la destruction de fichiers et de la perte de logiciels.</p>
  					</div>
			</div>
			
			<!-- Dates et Signatures (dépot) -->		
			<div class="row">
				<div class="col-xs-6">
				<?php
				$date = date("d-m-Y");
				Print("Date du dépôt : $date:$heure");
				?>
				<p>Signature : </p>
				</br>
				</br>
				</div>
			
			<!-- Dates et Signatures (récupération) -->
				<div class="col-xs-6">
				<p> Date de récupération : </p>
				<p> Signature : </p>
				</br>
                        	</br>
				</div>
			</div>
			<!-- Pied de page -->
			<p>DINFADOM Siret : 45055344100038 ­ 450553441 RCS Versailles ­ TVA FR61450553441</p>
		</div>
                </body>
</html>
