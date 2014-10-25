<?php

/*
  |--------------------------------------------------------------------------
  | MY Custom Modules
  |--------------------------------------------------------------------------
  |
  | Specifies the module controller (key) and the name (value) for fuel
 */


/* * ********************* EXAMPLE ***********************************

  $config['modules']['quotes'] = array(
  'preview_path' => 'about/what-they-say',
  );

  $config['modules']['projects'] = array(
  'preview_path' => 'showcase/project/{slug}',
  'sanitize_images' => FALSE // to prevent false positives with xss_clean image sanitation
  );

 * ********************** /EXAMPLE ********************************** */



/* * ********************* OVERWRITES *********************************** */

$config['module_overwrites']['categories']['hidden'] = TRUE; // change to FALSE if you want to use the generic categories module
$config['module_overwrites']['tags']['hidden'] = TRUE; // change to FALSE if you want to use the generic tags module

/* * ********************* /OVERWRITES *********************************** */

$config['modules']['galleryAudio'] = array(
);

$config['modules']['galleryImages'] = array(
);

$config['modules']['gallerySpeech'] = array(
);

$config['modules']['galleryVideo'] = array(
);

$config['modules']['lightCandle'] = array(
);
$config['modules']['quizQuestions'] = array(
);

$config['modules']['quizUserInfo'] = array(
);
 
