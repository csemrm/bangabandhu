<?php

class quizquestions extends CI_controller {

    function __construct() {

        parent::__construct();
        $this->load->model(array('quizQuestions_model'));
    }

    function index() {

        $data = array();
        $data['quizquestions'] = $this->quizQuestions_model->list_items(20, NULL, 'id', 'RAND()');

       
        echo json_encode($data);
    }


}
