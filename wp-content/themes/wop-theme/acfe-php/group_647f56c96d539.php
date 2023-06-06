<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_647f56c96d539',
	'title' => 'Product category',
	'fields' => array(
		array(
			'key' => 'field_647f56c904ffb',
			'label' => 'Name vienamese',
			'name' => 'name_vienamese',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'admin_column_enabled' => 0,
			'admin_column_post_types' => array(
				0 => 'product',
			),
			'admin_column_taxonomies' => array(
				0 => 'product_category',
			),
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_647f576449eba',
			'label' => 'Featured product',
			'name' => 'featured_product',
			'aria-label' => '',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'admin_column_enabled' => 0,
			'admin_column_post_types' => '',
			'admin_column_taxonomies' => '',
			'post_type' => array(
				0 => 'product',
			),
			'taxonomy' => '',
			'return_format' => 'object',
			'multiple' => 0,
			'save_custom' => 0,
			'save_post_status' => 'publish',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'allow_null' => 0,
			'ui' => 1,
			'save_post_type' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'product_category',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1686067429,
));

endif;