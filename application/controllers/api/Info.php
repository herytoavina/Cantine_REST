<?php   
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header('Access-Control-Allow-Headers: X-Requested-With');

    //var_dump(scandir(APPPATH . "/libraries/"));
    require APPPATH . "libraries/REST_Controller.php";
    use Restserver\Libraries\REST_Controller;
   
class Info extends REST_Controller {
    /** 
     * Get All Data from this method.
     * 
     * @return Response
     */
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    /** 
     * Get All Data from this method.
     * 
     * @return Response
     */    
    public function index_get() {        
        
        $this->response("<p>ANDRIMANDROSO HERY TOAVINA - ETU000968</p>RABEMIAKATARA Francky Rado - ETU000895"); 
    }

}
?>    