<?php

class galleryaudio extends CI_controller {

    function __construct() {

        parent::__construct();
        $this->load->model(array('galleryAudio_model'));
    }

    function index() {

        $data = array();
        $data['galleryaudio'] = $this->galleryAudio_model->list_items(200, NULL, 'id', 'DESC');

        foreach ($data['galleryaudio'] as $key => $galleryaudio) {
            $data['galleryaudio'][$key]['path'] = img_path($galleryaudio['audio_img']);
        }
        echo json_encode($data);
    }


}
