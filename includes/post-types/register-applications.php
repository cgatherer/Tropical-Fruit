<?php

$application = new CPT(array(
    'post_type_name' => 'applications',
    'singular' => __('Application', 'bootstrapwp'),
    'plural' => __('Applications', 'bootstrapwp'),
    'slug' => 'applications'
),
    array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_icon' => 'dashicons-palmtree'
));

?>