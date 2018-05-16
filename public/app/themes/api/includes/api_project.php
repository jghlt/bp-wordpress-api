<?php

/*
 *
 *
 *
 *
*/

/*---------------------------------------------------------------------

  project

----------------------------------------------------------------------*/

  /*
  * removes default rest routes
  */

    remove_action('rest_api_init', 'create_initial_rest_routes', 99);


  /*
  * get cached (transient) data
  */

    function project_get_cached_data($key)
    {
      $transient = 'data_' . $key;
      $data = get_transient($transient);
      if ($data) {
        $data = json_decode($data);
      }
      return $data;
    }


  /*
  * set cached (transient) data
  */

    function project_set_cached_data($key, $data)
    {
      $transient = 'data_' . $key;
      $expiration = 60 * 60 * 24;
      $value = json_encode($data);

      set_transient($transient, $value, $expiration);
    }


  /*
  * get home
  */

    function project_get_home()
    {
      $data = array(
      );
      return $data;
    }
