<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // load library
        $this->load->library('textmagic');
    }

    public function index()
    {
        // send SMS command
         $this->send();

        // get credit balance
        // $this->get_balance();

        // retrieve SMS delivery notification
        // $this->get_message_status();

        // receive incoming messages
        // $this->receive();

        // delete incoming messages
        // $this->delete_reply();

        // check phone number
        // $this->check_number();
    }

    public function send()
    {
        // set text
        $text = $this->session->userdata('type').'Tranfert '.$this->session->userdata('montantRel').'au numero'.$this->session->userdata('numero').' @Espoir';
        // set phone (string or array)

       $num= '00228'.$this->session->userdata('numero') ;

        $phone = array($num);
        //$phone ='0033688919215';
        $response = $this->textmagic->send($text, $phone,true);

        echo $text ;
      //  print_r($response);

        //Enregistrement des données dans la base de données
        $this->load->model('creditcom','nvo') ;

      

        $this->nvo->save_comP($num,$this->session->userdata('type'),$this->session->userdata('montantRel')) ;



    }

    public function get_balance()
    {
        $response = $this->textmagic->get_balance();
        print_r($response);
    }

    public function get_message_status()
    {
        $ids = array('xxxxxxx', 'xxxxxxx');
        $response = $this->textmagic->get_message_status($ids);
        print_r($response);
    }

    public function receive()
    {
        $ids = 'xxxxxxx';
        $response = $this->textmagic->receive($ids);
        print_r($response);
    }

    public function delete_reply()
    {
        $ids = array('xxxxxxx', 'xxxxxxx');
        $response = $this->textmagic->delete_reply($ids);
        print_r($response);
    }

    public function check_number()
    {
        $phones = array('xxxxxxx', 'xxxxxxx');
        $response = $this->textmagic->check_number($phones);
        print_r($response);
    }
}
/* End of file example.php */
/* Location: ./application/controllers/example.php */
