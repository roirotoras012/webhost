<?php
 header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

defined('BASEPATH') or exit('No direct script access allowed');

class Ayuda extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ayuda_dashboard', 'model');
        $this->pkey = 'id_no';
    }

    public function index_get($id_no = 0)
	{
        if(!empty($id_no)){
            $data = $this->db->get_where("Ayuda", ['id_no' => $id_no])->row_array();
        }else{
            $data = $this->db->get("Ayuda")->result();
        }
     
        // $this->response($data, MY_Controller::HTTP_OK);
        echo json_encode($data);
    }
    
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('Ayuda',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 

    public function api() {
        $data = $this->db->get('ayuda')->result();
        echo json_encode(['data' =>$data]);
            }

     
}
