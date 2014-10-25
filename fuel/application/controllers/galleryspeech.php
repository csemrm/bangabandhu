<?php

class galleryspeech extends CI_controller {

    function __construct() {

        parent::__construct();
        $this->load->model(array('gallerySpeech_model'));
    }

    function index() {

        $data = array();
        $data['gallerySpeech'] = $this->gallerySpeech_model->list_items(200, NULL, 'id', 'DESC');

        foreach ($data['gallerySpeech'] as $key => $galleryaudio) {
            $data['gallerySpeech'][$key]['path'] = img_path($galleryaudio['path_img']);
        }
        echo json_encode($data);
    }


}
