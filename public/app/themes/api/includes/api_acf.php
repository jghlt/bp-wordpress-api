<?php

/*
 *
 *
 *
 *
*/

/*---------------------------------------------------------------------

  acf

----------------------------------------------------------------------*/

  /*
  * hide acf so client can't edit
  */

    // add_filter('acf/settings/show_admin', '__return_false');


  /*
  * registers custom options page(s) for acf
  */

    if (function_exists('acf_add_options_page')) {

      // parent
      $parent = acf_add_options_page(array(
        'page_title'    => 'Options',
        'menu_title'    => 'Options',
        'redirect'      => true,
        'icon_url'      => 'dashicons-admin-post',
        'position'      => 5
      ));

      // sub page(s)
      acf_add_options_page(array(
        'page_title'    => 'Home',
        'menu_title'    => 'Home',
        'icon_url'      => 'dashicons-admin-post',
        'parent_slug'   => $parent['menu_slug'],
      ));

      acf_add_options_page(array(
        'page_title'    => 'Meta',
        'menu_title'    => 'Meta',
        'icon_url'      => 'dashicons-admin-post',
        'parent_slug'   => $parent['menu_slug'],
      ));

      // for shared clone fields
      acf_add_options_page(array(
        'page_title'    => 'Shared',
        'menu_title'    => 'Shared',
        'icon_url'      => 'dashicons-admin-post',
        'parent_slug'   => $parent['menu_slug'],
      ));
    }


  /*
  * register custom toolbars for acf wysiwyg
  */

    add_filter('acf/fields/wysiwyg/toolbars', 'api_add_custom_acf_toolbar');

    function api_add_custom_acf_toolbar($toolbars)
    {
      $toolbars['Custom'] = array();
      $toolbars['Custom'][1] = array('formatselect', 'bold', 'link', 'unlink');
      $toolbars['CustomBasic'] = array();
      $toolbars['CustomBasic'][1] = array('bold', 'link', 'unlink', 'bullist');

      // * important
      return $toolbars;
    }


  /*
  * add custom styles and block formats
  */

    add_filter('tiny_mce_before_init', 'api_add_custom_wysiwyg_styles');

    function api_add_custom_wysiwyg_styles($init_array)
    {
      $style_formats = array(
      );

      // Insert the array, JSON ENCODED, into 'style_formats'
      $init_array['style_formats'] = json_encode($style_formats);
      $init_array['block_formats'] = 'Paragraph=p;Headline=h3';

      return $init_array;
    }
