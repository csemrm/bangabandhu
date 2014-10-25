<?php

class galleryimages extends CI_controller {

    function __construct() {

        parent::__construct();
        $this->load->model(array('galleryImages_model'));
    }

    function index() {

        $data = array();
        $data['galleryImages'] = $this->galleryImages_model->list_items(200, NULL, 'id', 'DESC');

        foreach ($data['galleryImages'] as $key => $galleryaudio) {
            $data['galleryImages'][$key]['path'] = img_path($galleryaudio['path_img']);
        }
        echo json_encode($data);
    }


}
