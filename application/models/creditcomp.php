<?php if (!defined('BASEPATH') ) exit('No direct script access allowed' ) ;


/**
* 
*/
class Creditcom extends CI_Model
{
	
	private $table ='labocommandeP' ;



	public function save_comP($Cnum, $Ctype, $Cmnt) {

		$this->db->set('Cnum',$Cnum);
		$this->db->set('Ctype',$Ctype);
		$this->db->set('Cmnt',$Cmnt);
		$this->db->set('dateH','NOW()',false);


		return $this->db->insert($this->table) ;

	}
}