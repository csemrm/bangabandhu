<?php

class quizuserinfo extends CI_controller {

    function __construct() {

        parent::__construct();
        $this->load->model(array('quizUserInfo_model'));
    }

    function index() {

        $data = array();
        $data['quizuserinfo'] = $this->quizUserInfo_model->list_items(200, NULL, 'id', 'DESC');


        echo json_encode($data);
    }

    function view($id = null) {
 
        $where = array();
        $where['id'] = $id;
        $routine = $this->quizUserInfo_model->find_all_array($where);

        $data['quizuserinfo'] = $routine;
        echo json_encode($data);
    }

}
