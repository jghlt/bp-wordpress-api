<?php

/*
 *
 *
 *
 *
*/

/*---------------------------------------------------------------------

  routes

----------------------------------------------------------------------*/

  // home
  Routes::map('/', function ($params) {
    $query = array();
    $key = 'cache/home';
    $cached = project_get_cached_data($key);
    $data = ($cached) ? $cached : project_get_home();
    $context = array(
      'data' => $data
    );

    if (!$cached) {
      project_set_cached_data($key, $data);
    }

    Routes::load(locate_template('index.php'), $context, $query, 200);
  });


  // notfound
  Routes::map('*', function ($params) {
    $query = array();
    $key = 'cache/notfound';
    $cached = project_get_cached_data($key);
    $data = ($cached) ? $cached : array();
    $context = array(
      'data' => $data
    );

    if (!$cached) {
      project_set_cached_data($key, $data);
    }

    Routes::load(locate_template('index.php'), $context, $query, 404);
  });
