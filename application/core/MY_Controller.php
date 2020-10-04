<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $pkey = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        /**
         * RESTFul Implementation
         * Checks the HTTP METHOD then designate to appropriate method or reply.
         */
        $method = $this->input->server('REQUEST_METHOD');
        if ($method == 'GET') {
            $this->doGet();
        } elseif ($method == 'POST') {
            $this->doPost();
        } elseif ($method == 'DELETE') {
            $this->doDelete();
        } elseif ($method == 'OPTIONS') {
            $this->output->set_header('Allow: GET,POST,DELETE,OPTIONS');
        } else {
            $this->output->set_status_header(405);
        }
    }

    /***
     * The base POST method request transaction.
     */
    // protected function doPost($data = false)
    // {
    //     if (!$data) {
    //         $data = $this->input->post();
    //     }

    //     if (isset($data[$this->pkey]) && !empty($data[$this->pkey])) {
    //         if ($this->model->get_where(array($this->pkey => $data[$this->pkey]))) {
    //             $response = $this->model->update_data($data);
    //         }
    //     } else {
    //         if (isset($data['username'])) {
    //             $data['userId'] = md5($this->getTimeStamp().$data['username']);
    //         }
    //         if (isset($data['estab_sub_id'])) {
    //             // $response = $this->model->post_data($data);
    //         }
    //         $response = $this->model->post_data($data);
    //     }

    //     return $this->json_format($response);
    // }

    protected function doPost($data = false)
    {
        if (!$data) {
            $data = $this->input->post();
        }

        if (isset($data[$this->pkey]) && !empty($data[$this->pkey])) {
            if ($this->model->get_where(array($this->pkey => $data[$this->pkey]))) {
                $response = $this->model->update_data($data);
            }
        } 
        // $data = $this->db->get_where("tbl_estab_cat", ['estab_cat_id' => $data[]])->row_array();
        if (isset($data['estab_sub_id'])) {
            $response = $this->model->post_establishment($data);
        } 
        else {      
            if (isset($data['username'])) {
                $data['password'] = md5($data['password']);
                $data['datecreated'] = $this->getTimeStamp();
                $data['is_admin'] = 0;
            }   
            $response = $this->model->post_data($data);
            }
            
        return $this->json_format($response);
    }

    /***
     * The base GET method request transaction.
     */
    protected function doGet()
    {
        $data = $this->input->get();

        if (isset($data[$this->pkey])) {
            $response = $this->model->get_where(array($this->pkey => $pkey_value));
        } else {
            $keyword = false;
            if (isset($data['keyword'])) {
                $keyword = $data['keyword'];
            }

            if (isset($data['limit'])) {
                $response = $this->model->get_data($keyword, $data['limit'], $data['offset']);
            } else {
                $response = $this->model->get_data($keyword);
            }
        }

        $this->json_format($response);
    }

    /***
     * The base DELETE method request transaction.
     */
    protected function doDelete()
    {
        $data = $this->input->get();
        $response = $this->model->delete_data($data[$this->pkey]);

        return $this->json_format($response);
    }

    /***
     * Format to JSON data as a server reply.
     */
    private function json_format($response)
    {
        return $this->output
        //   ->set_status_header($response['code'])
          ->set_content_type('application/json')
          ->set_output(json_encode($response));
    }

    protected function getTimeStamp()
    {
        date_default_timezone_set('Asia/Manila');
        $date = new DateTime();

        return $date->format('Y-m-d h:i:s');
    }
}
