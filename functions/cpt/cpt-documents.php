<?php

function cptui_register_my_cpts_documents()
{

   /**
    * Post Type: Docs.
    */

   $labels = [
      "name" => esc_html__("Docs", "codeweber"),
      "singular_name" => esc_html__("Doc", "codeweber"),
   ];

   $args = [
      "label" => esc_html__("Docs", "codeweber"),
      "labels" => $labels,
      "description" => "",
      "public" => false,
      "publicly_queryable" => false,
      "show_ui" => true,
      "show_in_rest" => false,
      "rest_base" => "",
      "rest_controller_class" => "WP_REST_Posts_Controller",
      "rest_namespace" => "wp/v2",
      "has_archive" => false,
      "show_in_menu" => true,
      "show_in_nav_menus" => true,
      "delete_with_user" => false,
      "exclude_from_search" => true,
      "capability_type" => "post",
      "map_meta_cap" => true,
      "hierarchical" => false,
      "can_export" => true,
      "rewrite" => ["slug" => "documents", "with_front" => false],
      "query_var" => true,
      "supports" => ["title"],
      "show_in_graphql" => false,
   ];

   register_post_type("documents", $args);
}

add_action('init', 'cptui_register_my_cpts_documents');
