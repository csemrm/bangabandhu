<?php

class lightcandle extends CI_controller {

    function __construct() {

        parent::__construct();
        $this->load->model(array('lightCandle_model'));
    }

    function index() {

        $data = array();
        $data['lightcandle'] = $this->lightCandle_model->list_items(200, NULL, 'id', 'DESC');

       
        echo json_encode($data);
    }


}
