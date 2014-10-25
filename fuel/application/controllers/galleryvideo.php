<?php

class galleryvideo extends CI_controller {

    function __construct() {

        parent::__construct();
        $this->load->model(array('galleryVideo_model'));
    }

    function index() {

        $data = array();
        $data['galleryvideo'] = $this->galleryVideo_model->list_items(200, NULL, 'id', 'DESC');

        foreach ($data['galleryvideo'] as $key => $galleryaudio) {
            $data['galleryvideo'][$key]['path'] = img_path($galleryaudio['path_img']);
        }
        echo json_encode($data);
    }


}
