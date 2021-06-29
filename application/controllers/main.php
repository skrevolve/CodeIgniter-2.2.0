<?php
class Main extends CI_Controller{
    function __construct(){
        parent::__construct();
    }

    function index() {
        $this->main();
    }

    function main() {
        $this->load->model('contact_model');
        $contact_result = $this->contact_model->getData();
        $members_result = $this->contact_model->slave_getData();
        $data = array();
        $data['result'] = $contact_result;
        $data['member'] = $members_result;
        $data['page_title'] = "Test";

        $this->load->view('main_view',$data);
    }
}
?>