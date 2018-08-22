<?php add_action('init', 'create_Newss', 0);

function create_Newss() {
    $labels = array(
        'name' => _x('News', 'post type general name'),
        'singular_name' => _x('News', 'post type singular name'),
        'add_new' => _x('Add News', 'News'),
        'add_new_item' => __('Add News'),
        'edit_item' => __('Edit News'),
        'new_item' => __('New News'),
        'view_item' => __('View News'),
        'search_items' => __('Search News'),
        'not_found' => __('No News found'),
        'not_found_in_trash' => __('No News found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'News','with_front' => FALSE,),
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => 7,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'page-attributes')
    );

    register_post_type('News', $args);
    register_taxonomy("News_cat", "News", array("hierarchical" => true,
        "label" => "News Categories",
        "singular_label" => "News",
        'rewrite' => array('slug' => 'News','with_front' => FALSE,),
        "query_var" => true,
        "show_ui" => true
            )
    );

}
?>