<?php
class Product_Custom_Post_Type {
    public function __construct() {
        // Khởi tạo custom post type
        add_action('init', array($this, 'register_custom_post_type'));
        add_action('init', array($this, 'register_taxonomy'));
    }

    public function register_custom_post_type() {
        $labels = array(
            'name'               => 'Products',
            'singular_name'      => 'Product',
            'menu_name'          => 'Products',
            'name_admin_bar'     => 'Product',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Product',
            'new_item'           => 'New Product',
            'edit_item'          => 'Edit Product',
            'view_item'          => 'View Product',
            'all_items'          => 'All Products',
            'search_items'       => 'Search Products',
            'parent_item_colon'  => 'Parent Products:',
            'not_found'          => 'No products found.',
            'not_found_in_trash' => 'No products found in Trash.',
        );

        $args = array(
            'labels'              => $labels,
            'public'              => true,
            'publicly_queryable'  => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'query_var'           => true,
            'rewrite'             => array('slug' => 'product'),
            'capability_type'     => 'post',
            'has_archive'         => true,
            'hierarchical'        => false,
            'menu_position'       => null,
            'supports'            => array('title', 'thumbnail'),
            'exclude_from_search' => true,
            'show_in_rest'        => false, // Không hiển thị trình soạn thảo (editor box)
        );

        register_post_type('product', $args);
    }

    public function register_taxonomy() {
        $labels = array(
            'name'              => 'Product Categories',
            'singular_name'     => 'Product Category',
            'search_items'      => 'Search Categories',
            'all_items'         => 'All Categories',
            'parent_item'       => 'Parent Category',
            'parent_item_colon' => 'Parent Category:',
            'edit_item'         => 'Edit Category',
            'update_item'       => 'Update Category',
            'add_new_item'      => 'Add New Category',
            'new_item_name'     => 'New Category Name',
            'menu_name'         => 'Categories',
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'product-category'),
        );

        register_taxonomy('product_category', 'product', $args);
    }
}

// Khởi tạo đối tượng
$product_custom_post_type = new Product_Custom_Post_Type();
