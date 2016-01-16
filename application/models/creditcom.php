<?php if (!defined('BASEPATH') ) exit('No direct script access allowed' ) ;


/**
* 
*/
class Creditcom extends CI_Model
{
	
	private $table ='labocommande'  ;

	private $table2 ='labocommandeP' ;
/*
	function __construct(argument)
	{
		# code...
	}
*/

	public function save_com($cleP, $colId, $etat, $email,$idpaymn, $firstn, $lastn, $paysn, $montn,$Cnum, $Ctype){

			// id integer primary key auto_increment, cleP varchar (30), datep timestamp, colId varchar(30), etat varchar(8), email varchar (30), idpaymn varchar(30), firstn varchar(30), lastn varchar(30), paysn varchar(10), montn varchar (10), chainecomp varchar(200) 

		//Enrégistrement des données dans la table

		$this->db->set('cleP',$cleP) ;

		$this->db->set('datep','NOW()',false) ; //date du jour

		$this->db->set('colId',$colId) ;
		$this->db->set('etat',$etat) ;
		$this->db->set('email',$email) ;
		$this->db->set('idpaymn',$idpaymn) ;
		$this->db->set('firstn',$firstn) ;
		$this->db->set('lastn',$lastn) ;
		$this->db->set('paysn',$paysn) ;
		$this->db->set('montn',$montn) ;
		$this->db->set('Cnum',$Cnum);
		$this->db->set('Ctype',$Ctype);
		

		return $this->db->insert($this->table) ;


	}

	public function save_comP($Cnum, $Ctype, $Cmnt) {

		$this->db->set('Cnum',$Cnum);
		$this->db->set('Ctype',$Ctype);
		$this->db->set('Cmnt',$Cmnt);
		$this->db->set('dateH','NOW()',false);


		return $this->db->insert($this->table2) ;

	}
}