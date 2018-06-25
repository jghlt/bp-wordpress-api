<?php

/*
 *
 *
 *
 *
*/

/*---------------------------------------------------------------------

  cleanup

----------------------------------------------------------------------*/

  /*
  * remove output from wp head
  */

    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_filter('the_content', 'capital_P_dangit');
    remove_filter('the_title', 'capital_P_dangit');
    remove_filter('comment_text', 'capital_P_dangit');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');


  /*
  * hide the version of WordPress for security
  */

    add_filter('the_generator', 'api_remove_version');

    function api_remove_version()
    {
      return '';
    }


  /*
  * remove thumbnail dimensions
  */

    add_filter('post_thumbnail_html', 'api_remove_thumbnail_dimensions', 10);
    add_filter('image_send_to_editor', 'api_remove_thumbnail_dimensions', 10);

    function api_remove_thumbnail_dimensions($html)
    {
      $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
      return $html;
    }


   /*
   * remove image links
   */

    add_action('admin_init', 'api_set_default_imagelink_to_none', 10);

    function api_set_default_imagelink_to_none()
    {
      $image_set = get_option('image_default_link_type');

      if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
      }
    }


  /*
  * remove inline comments style
  */

    add_action('widgets_init', 'api_remove_recent_comments_style');

    function api_remove_recent_comments_style()
    {
      global $wp_widget_factory;
      remove_action('wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ));
    }
