<?php

$products = new CPT(array(
    'post_type_name' => 'iti products',
    'singular' => __('iTi Product', 'bootstrapwp'),
    'plural' => __('iTi Products', 'bootstrapwp'),
    'slug' => 'iti-products'
),
	array(
    'supports' => array('title', 'editor', 'thumbnail', 'comments', 'excerpt'),
    'menu_icon' => 'dashicons-palmtree'
));

$products->register_taxonomy(array(
    'taxonomy_name' => 'iti_product_type',
    'singular' => __('iTi Product Type', 'bootstrapwp'),
    'plural' => __('iTi Product Types', 'bootstrapwp'),
    'slug' => 'iti-product-type'
));