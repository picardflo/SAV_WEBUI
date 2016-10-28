<!DOCTYPE html>
<!-- Cible -->
<html>
        <head>
                <meta charset ="utf-8"/>
                <title>SAV - Formulaire</title>
        </head>
				<!-- Bootstrap -->
                <!-- CSS -->
                <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="../bootstrap/css/a4.css" rel="stylesheet">
                <!-- JS -->
                <script src="../bootstrap/js/bootstrap.js"></script>

                <body>
		<div class="page ">
			<!-- DINFADOM -->
			<h1><span class="glyphicon glyphicon-globe"aria-hidden="true"></span> DINFADOM</h1>
			<div class="well">
			Tel. : 00.00.00.00.00 </br> 
			Mail. : contact@dinfadom.com</br>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
				N° de prise en charge :
				</div>
			</div>
			<!-- Client -->
				<?php
                    include '../backend/db_connect.php';
                        
                    //Insert dans les tables//
                    try {
                        $data = $connection->query("SELECT * FROM CLIENT WHERE id=1;");
                        foreach($data as $ligne) {
                            $nom = $ligne['NOM_CLIENT'] ;
                            $prenom = $ligne['PRENOM_CLIENT'] ;
                            $adresse = $ligne['ADRESSE_CLIENT'] ;
                            $cp = $ligne['CP_CLIENT'] ;
                            $Ville = $ligne['VILLE_CLIENT'] ;
                            $tel = $ligne['TEL_CLIENT'] ;
                            $mail = $ligne['MAIL_CLIENT'] ;
                        }
                    } 
                    catch(PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                    }
                    echo $_POST['MAIL_CLIENT']
                ?> 


			<div class="panel panel-default">
  				<div class="panel-heading">
                                       	<h3 class="panel-title">Client</h3>
                               	</div>
 				<div class="panel-body">
							Nom : <?php echo $nom ; ?></br>
							Prénom : <?php echo $prenom ; ?></br>
                        	Adresse : <?php echo $adresse ; ?></br>
                        	CP : <?php echo $cp ; ?></br>
                        	Ville : <?php echo $Ville ; ?></br>
                        	Tel. : <?php echo $tel ; ?></br>
                        	Mail : <?php echo $mail ; ?></br>
				</div>
			 
				</div>
			<!-- Matériel -->
				<?php
                    include '../backend/db_connect.php';
                        
                    //Insert dans les tables//
                    try {
                        $data = $connection->query("SELECT * FROM MATERIEL WHERE ID=1 ;");
                        foreach($data as $ligne) {
                            $marque = $ligne['MARQUE_MAT'] ;
                            $sn = $ligne['NSERIE_MAT'] ;
                            $type = $ligne['TYPE_MAT'] ;
                        }
                    } 
                    catch(PDOException $e) {
                            echo 'ERROR: ' . $e->getMessage();
                    }
                    echo $_POST['MAIL_CLIENT']
                ?> 
			<div class="panel panel-default">
                                <div class="panel-heading">
					<h3 class="panel-title">Matériel</h3>
                                </div>
				<div class="panel-body">
							Marque : <?php echo $marque ; ?></br>
                        	S/N : <?php echo $sn ; ?></br>
                        	Type : <?php echo $type ; ?></br>
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

			<footer><p>DINFADOM Siret : 00000000000000 ­ 000000000 RCS Versailles ­ TVA FR000000000000</p><footer>
		</div>
                </body>
</html>
