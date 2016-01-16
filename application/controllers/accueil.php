<?php

/**
* 
*/
class Accueil extends CI_Controller
{

	private $titre='' ;
	
	function __construct()
	{
		parent::__construct() ;
		
		$this->load->helper(array('url','assets')) ;

		$this->titre = "Credit your mobile" ;

	}


	//juste le chargement de l'entete de la page d'accueil
	public function entete(){
	
		$param = array();
		$param['titre'] = $this->titre ;
		$this->load->view('eaccueil',$param);
		$this->load->view('corps');
		$this->load->view('footer');
	}

	public function index(){
	
		$param = array();
		$param['titre'] = $this->titre ;
		$this->load->view('eaccueil',$param);
		$this->load->view('corps');
		$this->load->view('footer');
	}


}

?>