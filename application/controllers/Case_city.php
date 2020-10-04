<?php
 header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

defined('BASEPATH') or exit('No direct script access allowed');

class Case_city extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CasesDashboard', 'model');
        $this->pkey = 'case_code';
    }

    public function index_get($case_code = 0)
	{
        if(!empty($case_code)){
            $data = $this->db->get_where("cases", ['case_code' => $case_code])->row_array();
        }else{
            $data = $this->db->get("cases")->result();
        }
     
        // $this->response($data, MY_Controller::HTTP_OK);
        echo json_encode($data);
    }
    
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('cases',$input);
     
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 

    public function api() {
        $data = $this->db->get('cases')->result();
        echo json_encode(['data' =>$data]);
            }

     
}
