<?php

/**
* 
*/
class Achat extends CI_Controller
{
	private $titre ='' ;
	private $numero =null;
	public $montant=0;
	private $param = array();
	private $fin ;

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->helper(array('url','assets','form')) ;
		$this->load->library('form_validation') ;
		$this->titre = 'Credit your mobile' ;
		
	}

//Mise en place de la vérification de la correspondance togocel
	public function togocel(){
		
		$this->param['titre'] = $this->titre ;

		//$this->load->view('eaccueil',$this->param);
		$this->load->view('togocel',$this->param) ;
		//$this->load->view('footer');

	}

//Mise en place de la vérification de la correspondance moov
	public function moov(){
		$this->param['titre'] = $this->titre ;

		//$this->load->view('eaccueil',$this->param);
		$this->load->view('moov',$this->param) ;
		//$this->load->view('footer');
	}


//Mise en place de la vérification de la correspondance illico
	public function illico(){
		$this->param['titre'] = $this->titre ;

		//$this->load->view('eaccueil',$this->param);
		$this->load->view('illico',$this->param) ;
		//$this->load->view('footer');

	}


	public function traiter_togocel(){
		
		$this->form_validation->set_rules('numero','"Ceci doit être un numéro togocel"','callback_togocel_num');
		

		if($this->form_validation->run()==true){

			// Le formulaire est valide (je vais traité ici l'envoie du message et redirection vers la page de paiement)
				//require('sms.php') ;

				//CMSMS::sendMessage('0033688919215', 'Veuillez effectué un transfert de x à '.$this->input->post('numero')) ;
			
			//Appel de la fonction de paiement
			require('payme.php');//le gros fichier contenant le code de payement

			$vrai= $this->input->post('montant') ;

			if($vrai==1000)
				$ok = 2.6 ;
			else if($vrai==2000)
				$ok = 4.4 ;
			else if($vrai==5000)
				$ok = 9.6 ;
			else if($vrai==10000)
				$ok = 19 ;


			//$ok = $ok.'.0' ;

			$a = htmlspecialchars($this->input->post('numero'));
			$a = str_replace(' ', '',$a) ;
			$a =str_replace('-', '', $a) ;
			$a =str_replace('.', '', $a) ;
			

			$this->montant = $ok;

			$this->session->set_userdata('montantRel',$vrai) ;
			$this->session->set_userdata('numero',$a);
			$this->session->set_userdata('montant',$ok) ;
			$this->session->set_userdata('type','TOGOCEL') ;

			//Nouvel ajout d'envoi de sms au bénéficiaire

			$benmes = htmlspecialchars($this->input->post('nom')).' Viens de vous envoyer un transfert de crédit '.$vrai.' Patientez un moment. www.namcredit.com' ;
			$this->session->set_userdata('msgfinal',$benmes) ;


		//Fin de l'ajout


			$type = "TRANSFERT DE ".$vrai." FCFA TOGOCEL, POUR LE NUMERO (00228)".$a." VOTRE COMPTE SERA DEBITE DE ".$ok." Euros. MERCI DE VOTRE CONFIANCE " ;
			
			//Faire un enrgistrement dans la table commande en inscrivant le montant de la commande
			testpayapl($this->montant,$type) ;
			
			
		}
		else{
			
			// Le formulaire est invalide ou vide donc il reste sur le formulaire et refais les actions

				//$this->load->view('eaccueil',$this->param);
				$this->load->view('togocel',$this->param) ;
				//$this->load->view('footer');
		}
	}

	public function traiter_illico(){
		
		$this->form_validation->set_rules('numero','"Ceci doit être un numéro togocel"','callback_illico_num');
		
		if($this->form_validation->run()==true){

			require('payme.php');//le gros fichier contenant le code de payement

			/*
			$ok = $this->input->post('montant').'.0' ;
			
			$this->montant = $ok;

			$this->session->set_userdata('montant',$ok) ;
			$this->session->set_userdata('type','ILLICO') ;


			$type = "COMMANDE DE TRANSFERT DE ".$ok." FCFA ILLICO, POUR LE NUMERO (00228)".$this->input->post('numero')."  MERCI DE VOTRE CONFIANCE " ;
			
			//Faire un enrgistrement dans la table commande en inscrivant le montant de la commande
			testpayapl($this->montant,$type) ;*/



			$vrai= $this->input->post('montant') ;

			if($this->input->post('montant')==1000)
				$ok = 2.6 ; 
			if($this->input->post('montant')==2000)
				$ok = 4.4 ;
			else if($this->input->post('montant')==5000)
				$ok = 9.6 ;
			else if($this->input->post('montant')==10000)
				$ok = 19  ;


			//$ok = $ok.'.0' ;

			$a = htmlspecialchars($this->input->post('numero'));
			$a = str_replace(' ', '',$a) ;
			$a =str_replace('-', '', $a) ;
			$a =str_replace('.', '', $a) ;
			



			$this->montant = $ok;


			$this->session->set_userdata('montantRel',$vrai) ;
			$this->session->set_userdata('numero',$a);
			$this->session->set_userdata('montant',$ok) ;
			$this->session->set_userdata('type','ILLICO') ;

			
		//Nouvel ajout d'envoi de sms au bénéficiaire

			$benmes = htmlspecialchars($this->input->post('nom')).' Viens de vous envoyer un transfert de crédit '.$vrai.' Patientez un moment. www.namcredit.com' ;
			$this->session->set_userdata('msgfinal',$benmes) ;


		//Fin de l'ajout


			$type = "TRANSFERT DE ".$vrai." FCFA ILLICO, POUR LE NUMERO (00228)".$a." VOTRE COMPTE SERA DEBITE DE ".$ok." Euros. MERCI DE VOTRE CONFIANCE " ;
			
			//Faire un enrgistrement dans la table commande en inscrivant le montant de la commande
			testpayapl($this->montant,$type) ;


		}
		else{
			
			// Le formulaire est invalide ou vide donc il reste sur le formulaire et refais les actions

				//$this->load->view('eaccueil',$this->param);
				$this->load->view('illico',$this->param) ;
			//	$this->load->view('footer');
		}
	}


   public function traiter_moov(){ 

   	$this->form_validation->set_rules('numero','"Ceci doit être un numéro moov"','callback_moov_num');
		

		if($this->form_validation->run()==true){

			require('payme.php');//le gros fichier contenant le code de payement


		/*
			$ok = $this->input->post('montant').'.0' ;
			
			$this->montant = $ok;

			$this->session->set_userdata('montant',$ok) ;
			$this->session->set_userdata('type','MOOV') ;


			$type = "COMMANDE DE TRANSFERT DE ".$ok." FCFA MOOV, POUR LE NUMERO (00228)".$this->input->post('numero')."  MERCI DE VOTRE CONFIANCE " ;
			
			//Faire un enrgistrement dans la table commande en inscrivant le montant de la commande
			testpayapl($this->montant,$type) ;
			*/

			$vrai= $this->input->post('montant') ;

			if($this->input->post('montant')==1000)
				$ok = 2.6 ; 
			else if($this->input->post('montant')==2000)
				$ok = 4.4 ;
			else if($this->input->post('montant')==5000)
				$ok = 9.6 ;
			else if($this->input->post('montant')==10000)
				$ok = 19 ;


			//$ok = $ok.'.0' ;

			$a = htmlspecialchars($this->input->post('numero'));
			$a = str_replace(' ', '',$a) ;
			$a =str_replace('-', '', $a) ;
			$a =str_replace('.', '', $a) ;



			
			$this->montant = $ok;

			$this->session->set_userdata('montantRel',$vrai) ;
			$this->session->set_userdata('numero',$a);
			$this->session->set_userdata('montant',$ok) ;
			$this->session->set_userdata('type','MOOV') ;

			//Nouvel ajout d'envoi de sms au bénéficiaire

			$benmes = htmlspecialchars($this->input->post('nom')).' Viens de vous envoyer un transfert de crédit '.$vrai.' Patientez un moment. www.namcredit.com' ;
			$this->session->set_userdata('msgfinal',$benmes) ;


		//Fin de l'ajout


			$type = "TRANSFERT DE ".$vrai." FCFA MOOV, POUR LE NUMERO (00228)".$a." VOTRE COMPTE SERA DEBITE DE ".$ok." Euros. MERCI DE VOTRE CONFIANCE " ;
			
			//Faire un enrgistrement dans la table commande en inscrivant le montant de la commande
			testpayapl($this->montant,$type) ;

		}
		else{
			
			// Le formulaire est invalide ou vide donc il reste sur le formulaire et refais les actions

				//$this->load->view('eaccueil',$this->param);
				$this->load->view('moov',$this->param) ;
				//$this->load->view('footer');
		}

   }

	//Fonction me permettant d'utiliser ma propre validation du numéro
	function moov_num($num){
		if (preg_match("/^9[6-9]([-. ]?[0-9]{2}){3}$/",$num))
		 return true ;

		else 
			return false ;
	}

	function togocel_num($num){
		if (preg_match("/^9[0-3]([-. ]?[0-9]{2}){3}$/",$num))
		 return true ;

		else 
			return false ;
	}

	function illico_num($num){
		if (preg_match("/^2[2-3]([-. ]?[0-9]{2}){3}$/",$num))
		 return true ;

		else 
			return false ;
	}



public function retour(){
			//echo 'tout est ok. merci pour votre confiance' ;

      //récupérer le montant de la commande et faire payer la personne 



			include("cpaypal.php"); // On importe la page créée précédemment
			$requete = construit_url_paypal(); // Construit les options de base

			// On ajoute le reste des options
			// La fonction urlencode permet d'encoder au format URL les espaces, slash, deux points, etc.)
			$requete = $requete."&METHOD=DoExpressCheckoutPayment".
			"&TOKEN=".htmlentities($_GET['token'], ENT_QUOTES). // Ajoute le jeton qui nous a été renvoyé
			"&AMT=".$this->session->userdata('montant').
			"&CURRENCYCODE=EUR".
			"&PayerID=".htmlentities($_GET['PayerID'], ENT_QUOTES). // Ajoute l'identifiant du paiement qui nous a également été renvoyé
			"&PAYMENTACTION=sale";

			// Initialise notre session cURL. On lui donne la requête à exécuter.
			$ch = curl_init($requete);

			// Modifie l'option CURLOPT_SSL_VERIFYPEER afin d'ignorer la vérification du certificat SSL. Si cette option est à 1, une erreur affichera que la vérification du certificat SSL a échoué, et rien ne sera retourné. 
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			// Retourne directement le transfert sous forme de chaîne de la valeur retournée par curl_exec() au lieu de l'afficher directement. 
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

			// On lance l'exécution de la requête URL et on récupère le résultat dans une variable
			$resultat_paypal = curl_exec($ch);

		if (!$resultat_paypal) // S'il y a une erreur, on affiche "Erreur", suivi du détail de l'erreur.
			{echo "<p>Erreur</p><p>".curl_error($ch)."</p>";}
		// S'il s'est exécuté correctement, on effectue les traitements...
		else
		{
			$liste_param_paypal = recup_param_paypal($resultat_paypal); // Lance notre fonction qui dispatche le résultat obtenu en un array
			
			// On affiche tous les paramètres afin d'avoir un aperçu global des valeurs exploitables (pour vos traitements). Une fois que votre page sera comme vous le voulez, supprimez ces 3 lignes. Les visiteurs n'auront aucune raison de voir ces valeurs s'afficher.
			echo "<pre>";
			//print_r($liste_param_paypal);
			echo "</pre>";
			
			// Si la requête a été traitée avec succès
			if ($liste_param_paypal['ACK'] == 'Success')
			{

					//Traitement plus complexe


				$this->load->model('creditcom','nvo') ;

				
				
				 $this->load->library('textmagic');

				 $text = $this->session->userdata('type').' Tranfert '.$this->session->userdata('montantRel').'  au numero:   '.$this->session->userdata('numero').' @Espoir';
			        // set phone (string or array)

			       $num= '00228'.$this->session->userdata('numero') ;


 					//Envoie de message au bénéficiare
			       	$phone2 = array($num);
			       	$response2 = $this->textmagic->send($this->session->userdata('msgfinal'), $phone2,true); //le code d'envoie de message


			 		//Envoie de message à Vanessa
			        $phone = array('0022891174171');
			        $response = $this->textmagic->send($text, $phone,true); //le code d'envoie de message

					//Chercher un moyen qui va résoudre le problème en cas d'envoie du message
			      

			       //fin d'ajout de code

			      if ($this->nvo->save_com($liste_param_paypal['TOKEN'],$liste_param_paypal['CORRELATIONID'],$liste_param_paypal['ACK'],$liste_param_paypal['EMAIL'],$liste_param_paypal['PAYERID'],$liste_param_paypal['FIRSTNAME'],$liste_param_paypal['LASTNAME'],$liste_param_paypal['COUNTRYCODE'],$liste_param_paypal['AMT'],$num,$this->session->userdata('type'))){

			      	//Chargement de la page d'acceuil
			      	$this->load->view('congrat',$this->param);

			      	//$this->load->view('felicitation');
			      	//$this->load->view('footer');

			      }  						


			        //Enregistrement des données dans la base de données
			     	//   $this->load->model('creditcomp','nvel') ;

			   

			       // $this->nvel->save_comP($num,$this->session->userdata('type'),$this->session->userdata('montantRel')) ;

			}
			else // En cas d'échec, affiche la première erreur trouvée.
			{echo "<p>Erreur de communication avec le serveur PayPal.<br />".$liste_param_paypal['L_SHORTMESSAGE0']."<br />".$liste_param_paypal['L_LONGMESSAGE0']."</p>";}
		}
			// On ferme notre session cURL.
			curl_close($ch);

}



	
function cancel(){

		//echo '<script>Oups!!! Revenez plus tard.<script>';
		$this->param['titre'] = 'Anulation oupps' ;

		$this->load->view('eaccueil',$this->param);
	
		//$this->load->view('retour',$this->param) ;
	//	$this->load->view('footer');

}


}
