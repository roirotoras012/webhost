<?php header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

defined('BASEPATH') or exit('No direct script access allowed');

class Status extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Status_dashboard', 'model');
        $this->pkey = 'id';
    }

    public function index_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where("status", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("status")->result();
        }
     
        // $this->response($data, MY_Controller::HTTP_OK);
        echo json_encode($data);
    }
    
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('status',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 

    public function api() {
        $data = $this->db->get('status')->result();
        echo json_encode(['data' =>$data]);
            }

     
}
