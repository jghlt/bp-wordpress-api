<?php

    //
    if (!class_exists('Timber') || !class_exists('acf')) {
      echo 'Dependencies not found. Please make sure Timber and acf pro are installed and activated';
      return;
    }

    // data
    $params = isset($params) ? $params : $params = array();
    $data = isset($params) ? $params['data'] : $data = array();

    //
    echo json_encode($data);

?>
