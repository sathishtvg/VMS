<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    protected $sesstionData;

    function __construct() {
        parent::__construct();
        $this->sesstionData = $this->session->userdata();
        if (!$this->session->userdata('user_name')) {
            $this->session->set_flashdata("errors", "Opps! Session out. Login Again.");
            redirect('login/index');
        }
        $this->load->model("site_model");
    }

    protected function rules() {
        $rules = array(
            array(
                'field' => 'site_name',
                'rules' => 'trim|required|max_length[250]'
            ),
            array(
                'field' => 'site_code',
                'rules' => 'trim|required|max_length[5]'
            ),
            array(
                'field' => 'record_count',
                'rules' => 'trim|required|max_length[40]'
            ),
            array(
                'field' => 'pass_format',
                'rules' => 'trim|required|max_length[40]'
            )
        );
        return $rules;
    }

    public function index() {
        $this->data['form_validation'] = [];
        $this->data['functionname'] = $this->router->fetch_method();
        $this->data['sessionData'] = $this->sesstionData;
        $this->data['subview'] = 'themes/dashboard';
        $this->load->view('main_view', $this->data);
    }

    public function getSite() {
        $this->data['sessionData']      = $this->sesstionData;
        $this->data['form_validation']  = [];
        $this->data['functionname']     = $this->router->fetch_method();
        $allSites                       = $this->site_model->getAllSite();
        $this->data['allSite']          = $allSites;
        $this->data['subview']          = 'themes/siteGrid';
        $this->load->view('main_view', $this->data);
    }
    
    public function createSite() {
        $this->data['sessionData']      = $this->sesstionData;
        $this->data['form_validation']  = [];
        $this->data['functionname']     = $this->router->fetch_method();
        $this->data['subview']          = 'themes/site';
        $this->load->view('main_view', $this->data);
    }

    public function insertSite() {
        $this->data['form_validation']  = [];
        $this->data['sessionData']      = $this->sesstionData;
        $this->data['functionname']     = $this->router->fetch_method();
        if ($_POST) {
            $rules = $this->rules();
            $this->form_validation->set_rules($rules);
            if ($this->form_validation->run() == FALSE) {
                $this->data['form_validation']  = validation_errors();
                $this->data['subview']          = 'themes/site';
                $this->load->view('main_view', $this->data);
            } else {
                $site_name      = $this->input->post('site_name');
                $site_code      = $this->input->post('site_code');
                $take_photo     = $this->input->post('take_photo');
                $record_count   = $this->input->post('record_count');
                $pass_format    = $this->input->post('pass_format');

                $insertData['site_name']        = $site_name;
                $insertData['site_code']        = $site_code;
                $insertData['take_photo']       = $take_photo;
                $insertData['members_count']    = $record_count;
                $insertData['pass_format']      = $pass_format;
                $this->site_model->insertSite($insertData);
            }
        }
         redirect(base_url('home/getSite'));
    }

}
