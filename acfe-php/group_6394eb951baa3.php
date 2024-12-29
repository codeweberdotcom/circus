<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6394eb951baa3',
	'title' => 'CW Elements',
	'fields' => array(
		array(
			'key' => 'field_6394ebc23f5ad',
			'label' => 'Elements',
			'name' => 'cw_elements',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'layout_6394ebd8180da' => array(
					'key' => 'layout_6394ebd8180da',
					'name' => 'icon',
					'label' => 'Icon',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_6394ebeb3f5ae',
							'label' => 'Icon',
							'name' => 'cw_icon',
							'type' => 'clone',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'clone' => array(
								0 => 'group_6393a9874e4ec',
							),
							'display' => 'seamless',
							'layout' => 'block',
							'prefix_label' => 0,
							'prefix_name' => 0,
							'acfe_field_group_condition' => 0,
						),
					),
					'min' => '',
					'max' => '',
					'acfe_flexible_render_template' => false,
					'acfe_flexible_render_style' => false,
					'acfe_flexible_render_script' => false,
					'acfe_flexible_thumbnail' => false,
					'acfe_flexible_settings' => false,
					'acfe_flexible_settings_size' => 'medium',
					'acfe_layout_locations' => array(
					),
					'acfe_flexible_modal_edit_size' => false,
					'acfe_flexible_category' => false,
					'acfe_layout_col' => 'auto',
					'acfe_layout_allowed_col' => false,
				),
			),
			'button_label' => 'Добавить',
			'min' => '',
			'max' => '',
			'acfe_flexible_advanced' => false,
			'acfe_flexible_stylised_button' => false,
			'acfe_flexible_hide_empty_message' => false,
			'acfe_flexible_empty_message' => '',
			'acfe_flexible_layouts_templates' => false,
			'acfe_flexible_layouts_previews' => false,
			'acfe_flexible_layouts_placeholder' => false,
			'acfe_flexible_layouts_thumbnails' => false,
			'acfe_flexible_layouts_settings' => false,
			'acfe_flexible_layouts_locations' => false,
			'acfe_flexible_async' => array(
			),
			'acfe_flexible_add_actions' => array(
			),
			'acfe_flexible_remove_button' => array(
			),
			'acfe_flexible_layouts_state' => false,
			'acfe_flexible_modal_edit' => array(
				'acfe_flexible_modal_edit_enabled' => false,
				'acfe_flexible_modal_edit_size' => 'large',
			),
			'acfe_flexible_modal' => array(
				'acfe_flexible_modal_enabled' => false,
				'acfe_flexible_modal_title' => false,
				'acfe_flexible_modal_size' => 'full',
				'acfe_flexible_modal_col' => '4',
				'acfe_flexible_modal_categories' => false,
			),
			'acfe_flexible_grid' => array(
				'acfe_flexible_grid_enabled' => false,
				'acfe_flexible_grid_align' => 'center',
				'acfe_flexible_grid_valign' => 'stretch',
				'acfe_flexible_grid_wrap' => false,
			),
			'acfe_flexible_grid_container' => false,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_display_title' => '',
	'acfe_meta' => array(
		'6394efdd5ad8a' => array(
			'acfe_meta_key' => '888',
			'acfe_meta_value' => '555',
		),
		'6394efe25ad8b' => array(
			'acfe_meta_key' => 'drtre',
			'acfe_meta_value' => 'terter',
		),
	),
	'acfe_note' => '',
	'modified' => 1670705130,
));

endif;