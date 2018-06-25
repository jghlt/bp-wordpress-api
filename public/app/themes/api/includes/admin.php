<?php

/*
 *
 *
 *
 *
*/

/*---------------------------------------------------------------------

  admin

----------------------------------------------------------------------*/

  /*
  * post format(s)
  */

    add_theme_support('post-formats', array('video', 'audio', 'link'));


  /*
  * post thumbnail(s)
  */

    add_theme_support('post-thumbnails');


  /*
  * image size(s)
  */

    // delete medium_large thumbnail size
    update_option('medium_large_size_w', '0');
    update_option('medium_large_size_h', '0');

    add_image_size('hero--xsmall', 480, 9000, false);


  /*
  * image quality
  */

    add_filter('jpeg_quality', 'api_set_jpeg_quality' );

    function api_set_jpeg_quality()
    {
      return 80;
    }


  /*
  * disable the admin bar
  */

    show_admin_bar(false);


  /*
  * remove menu bar items
  */

    add_action('admin_bar_menu', 'api_remove_admin_bar_nodes', 999);

    function api_remove_admin_bar_nodes()
    {
      global $wp_admin_bar;

      $wp_admin_bar->remove_node('new-post');
      $wp_admin_bar->remove_node('new-link');
      $wp_admin_bar->remove_node('new-media');
      $wp_admin_bar->remove_node('new-page');
      $wp_admin_bar->remove_node('new-user');
      $wp_admin_bar->remove_node('wp-logo');
      $wp_admin_bar->remove_node('comments');
    }


  /*
  * removes unnecessary menu items from admin area
  */

    add_action('admin_menu', 'api_remove_admin_menu_items');

    function api_remove_admin_menu_items()
    {

      // remove_menu_page('edit.php?post_type=page');
      remove_menu_page('edit.php');
      remove_menu_page('edit-comments.php');
      remove_menu_page('link-manager.php');
      // remove_menu_page('upload.php');
      remove_menu_page('plugins.php');
      remove_menu_page('themes.php');
      // remove_menu_page('tools.php');
    }


  /*
  * remove support / meta boxes from Post and Page Screens
  */

      add_action('admin_init', 'api_customize_meta_boxes');

      function api_customize_meta_boxes()
      {

        // posts
        remove_post_type_support('post', 'author');
        remove_post_type_support('post', 'editor');
        remove_post_type_support('post', 'excerpt');
        remove_post_type_support('post', 'comments');
        remove_post_type_support('post', 'revisions');
        remove_post_type_support('post', 'trackbacks');
        remove_post_type_support('post', 'custom-fields');

        // pages
        remove_post_type_support('page', 'editor');
        remove_post_type_support('page', 'author');
        remove_post_type_support('page', 'comments');
        remove_post_type_support('page', 'trackbacks');
      }


  /*
  * remove dashboard widgets
  */

    add_action('wp_dashboard_setup', 'api_remove_dashboard_widgets');

    function api_remove_dashboard_widgets()
    {
      global $wp_meta_boxes;

      // removes everything
      unset($wp_meta_boxes['dashboard']);
    }


  /*
  * remove help menu
  */

    add_filter('contextual_help', 'api_remove_help_tabs', 999, 3);

    function api_remove_help_tabs($old_help, $screen_id, $screen)
    {
      $screen->remove_help_tabs();
      return $old_help;
    }


  /*
  * add custom logo to login screen
  */

    add_action('login_head', 'api_custom_login_logo');

    function api_custom_login_logo()
    {
      echo '<style type="text/css">
        body,
        html{
          background-color:#F8F8F8 !important;
        }

        .login h1 a {
          background: url('.get_bloginfo('template_directory').'/login.png) !important;
          background-repeat:no-repeat;
          background-size:cover !important;
        }
      </style>';
    }


  /*
  * updates link destination for login icon
  */

    add_action('login_headerurl', 'api_custom_login_link');

    function api_custom_login_link()
    {
      return get_bloginfo('url');
    }


  /*
  * clears cache when acf options pages are saved
  */

    add_action('acf/save_post', 'api_clear_custom_cache', 1);

    function api_clear_custom_cache($post_id)
    {
      if (($post_id == 0 || $post_id == 'options') && !defined('DOING_AUTOSAVE')) {
        global $blog_cache_dir;

        if (isset($wp_cache_object_cache)) {
          reset_oc_version();
        } else {
          if (function_exists('prune_super_cache')) {
            prune_super_cache($blog_cache_dir, true);
            prune_super_cache(get_supercache_dir(), true);
          }
        }
      }

      return $post_id;
    }
