<?php

function testpayapl( $mt, $type ){
		 require('cpaypal.php') ; 

			$requete = construit_url_paypal(); // Construit les options de base

			// La fonction urlencode permet d'encoder au format URL les espaces, slash, deux points, etc.)
			$requete = $requete."&METHOD=SetExpressCheckout".
			"&CANCELURL=".urlencode(site_url('../achat/cancel')).
			"&RETURNURL=".urlencode(site_url('../achat/retour')).
			"&AMT=".$mt."".
			"&CURRENCYCODE=EUR".
			"&DESC=".urlencode($type).
			"&LOCALECODE=FR".
			"&HDRIMG=".urlencode(img('logo.jpg','Logo du labo'));

			$ch = curl_init($requete);

			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

			// Retourne directement le transfert sous forme de chaîne de la valeur retournée par curl_exec() au lieu de l'afficher directement. 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			// On lance l'exécution de la requête URL et on récupère le résultat dans une variable
			$resultat_paypal = curl_exec($ch);

			// S'il y a une erreur, on affiche "Erreur", suivi du détail de l'erreur.
			if (!$resultat_paypal)
				{echo "<p>Erreur</p><p>".curl_error($ch)."</p>";}

			else // S'il s'est exécuté correctement, on effectue les traitements...
			{
				$liste_param_paypal = recup_param_paypal($resultat_paypal); // Lance notre fonction qui dispatche le résultat obtenu en un array

					// Si la requête a été traitée avec succès
					if ($liste_param_paypal['ACK'] == 'Success')
					{
						// Redirige le visiteur sur le site de PayPal
						header("Location: https://www.paypal.com/webscr&cmd=_express-checkout&token=".$liste_param_paypal['TOKEN']);
				                exit();
					}
					else // En cas d'échec, affiche la première erreur trouvée.
					{echo "<p>Erreur de communication avec le serveur PayPal.<br />".$liste_param_paypal['L_SHORTMESSAGE0']."<br />".$liste_param_paypal['L_LONGMESSAGE0']."</p>";}		
			}

			// On ferme notre session cURL.
			curl_close($ch);					
		}



function traitement(){
		//include("cpaypal.php");

		
								$requete2 = construit_url_paypal();
								$requete2 = $requete2."&METHOD=GetExpressCheckoutDetails".
											"&TOKEN=".htmlentities($_GET['token'], ENT_QUOTES); // Ajoute le jeton

								$ch2 = curl_init($requete2);
								curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, 0);
								curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
								$resultat_paypal2 = curl_exec($ch2);

								if (!$resultat_paypal2) // S'il y a une erreur
									{echo "<p>Erreur</p><p>".curl_error($ch)."</p>";}
								// S'il s'est exécuté correctement
								else
								{
									$liste_param_paypal2 = recup_param_paypal($resultat_paypal2);
									
									// On affiche tous les paramètres afin d'avoir un aperçu global des valeurs exploitables (pour vos traitements). Une fois que votre page sera comme vous le voulez, supprimez ces 3 lignes. Les visiteurs n'auront aucune raison de voir ces valeurs s'afficher.
									echo "<pre>";
									print_r($liste_param_paypal2);
									echo "</pre>";
									
									// Si la requête a été traitée avec succès
									
									// Mise à jour de la base de données & traitements divers... Exemple :
									//mysql_query("INSERT INTO client(nom, prenom) VALUE('".$liste_param_paypal['FIRSTNAME']."', '".$liste_param_paypal['LASTNAME']."')");
								
									//Initialisation du model

									

									//Insertion proprement dite

									

									$this->nvo->save_com($liste_param_paypal['TOKEN'],$liste_param_paypal['CORRELATIONID'],$liste_param_paypal['ACK'],$liste_param_paypal['EMAIL'],$liste_param_paypal['PAYERID'],$liste_param_paypal['FIRSTNAME'],$liste_param_paypal['LASTNAME'],$liste_param_paypal['COUNTRYCODE'],$liste_param_paypal['AMT'],$liste_param_paypal['AMT']) ;


								}
								curl_close($ch2);



	}

/*
	function vraivaleur($prix){

		if($prix==2000)
			return 5 ;
		else if($prix==5000)
			return 10 ;
		else if($prix==10000)
			return 20 ;

	}
*/
