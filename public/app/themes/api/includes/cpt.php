<?php

/*
 *
 *
 *
 *
*/

/*---------------------------------------------------------------------

  cpt

----------------------------------------------------------------------*/

  /*
  * projects
  */

    add_action('init', 'api_register_projects_post_type');

    function api_register_projects_post_type()
    {
      $labels = array(
        'name'                  => _x('Projects', 'post type general name'),
        'singular_name'         => _x('Project', 'post type singular name'),
        'menu_name'             => _x('Projects', 'admin menu'),
        'name_admin_bar'        => _x('Projects', 'add new on admin bar'),
        'add_new'               => _x('Add New', 'Project'),
        'add_new_item'          => __('Add New Project'),
        'new_item'              => __('New Project'),
        'edit_item'             => __('Edit Project'),
        'view_item'             => __('View Project'),
        'all_items'             => __('All Projects'),
        'search_items'          => __('Search Projects'),
        'parent_item_colon'     => __('Parent Project:'),
        'not_found'             => __('No Projects found.'),
        'not_found_in_trash'    => __('No Projects found in Trash.')
      );

      $args = array(
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'projects'),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 5,
        'supports'              => array('title', 'revisions'),
        'taxonomies'            => array(),
        'show_in_rest'          => false,
        'rest_base'             => 'projects',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
      );

      register_post_type('projects', $args);
      flush_rewrite_rules();
    }
