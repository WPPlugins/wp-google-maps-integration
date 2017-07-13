<?php

	$map_default = array(
		'id'					=> 0,
		'name'					=> '',
		'description'			=> '',
		'setting'				=> '{}',
		'marker'				=> 'N;',
		'route'					=> 'N;',
		'control'				=> '{}',
		'layer'					=> '{}',
		'shape'					=> 'N;',
		'cpt' 					=> '{}',
		'time'					=> '0000-00-00 00:00:00',
	);

	// SANITIZE
	if ( isset( $_POST['id'] ) ) {
		$_POST['id'] = absint( $_POST['id'] );
	}

	if ( isset( $_POST['name'] ) ) {
		$_POST['name'] = sanitize_text_field( $_POST['name'] );
	}

	if ( isset( $_POST['description'] ) ) {
		$_POST['description'] = esc_textarea( $_POST['description'] );
	}
	
	// JSON ENCODE
	$default_setting = array(
		'size' => array(
			'width' => '100%',
			'height' => '400px',
		),
		'type' => array(
			//'active' => '1',
			'first_select' => 'ROADMAP'
		),
		'custom_type' => array(),
		'languange' => 'en',
		'default_zoom' => '10',
		'z_index' => '9999',
		'behaviour' => [],
		'position' => array(
			'lat' => 0,
			'lng' => 0
		),
		'center_marker' => '',
		'default_marker' => '',
		'undefined_category_name' => 'Uncategorized',
		'marker_cluster' => array(
			// 'cb' => '',
			'max_zoom' => '4',
			'grid' => '10'
		),
		'cos' => array(
			'on_click' => array(),
			'fill_color' => 'rgba(36,146,160,0.7)',
			'stroke_color' => 'rgba(255,255,255,1)',
			'stroke_weight' => '1',
			'radius' => '20'
		),
		'svp' => array(
			// 'cb' => '1',
			'lat' => '0',
			'lng' => '0',
			'pov_heading' => '0',
			'pov_pitch' => '0',
			'pov_zoom' => '1',
			'control' => array()
		),
		'grid_overlay' => array(
			// 'cb' => '1',
			'border_color' => '#0B8EA3',
			'border_width' => '1',
			'border_style' => 'dotted',
			'width' => '125',
			'height' => '125',
			'font_size' => '10'
		),
		'limitation' => array(
			'south_west' => array(
				'lat' => '0',
				'lng' => '0',
			),
			'north_east' => array(
				'lat' => '0',
				'lng' => '0',
			),
			'zoom_level' => array(
				'from' => '0',
				'to' => '0',
			),
		),
		'sidepanel' =>	array(
			//cb => '1',
			'height' => '100%',
			'position' => 'RIGHT',
			'first_select' => 'marker',
			'tabitem' => array(),
			'mitv' => array(),
			'btn_toggle' => array(
				'slider' => 'rgba(36,146,160,1)',
				'menu_tab' => 'rgba(255,255,255,1)'
			),
   			'header'=> array(
				'background' => 'rgba(36,146,160,1)',
				'icon' => 'rgba(255,161,0,1)',
				'font' => 'rgba(255,255,255,1)'
			),
			'tab' => array(
				'background' => 'rgba(220,220,220,1)',
				'icon_unselected' => 'rgba(255,161,0,1)',
				'icon_selected' => 'rgba(36,146,160,1)'
			),
			'scroll' => array(
				'pane' => 'rgba(220,220,220,1)',
				'slider' => 'rgba(36,146,160,1)'
			),
			'main' => array(
				'background' => 'rgba(255,255,255,0.7)',
				'font'		=> 'rgba(103,103,103,1)'
			),
			'ele_input' => array(
				'background' => 'rgba(255,161,0,1)',
				'font' => 'rgba(255,255,255,1)'
			),
			'ele_button' => array(
				'background' => 'rgba(36,146,160,1)',
				'font' => 'rgba(255,255,255,1)'
			),
			'ele_select' => array(
				'background' => 'rgba(255,161,0,1)',
				'font' => 'rgba(255,255,255,1)'
			),
			'mtv' => array(
				'color_gap' => 'rgba(0,0,0,0.07)',
				'gap_border_type' => 'dotted',
				'gap_border_side' => 'bottom',
				'color_checkbox' => 'rgba(36,146,160,1)',
				'item_border_color' => 'rgba(0,0,0,0.07)',
				'item_border_type' => 'dotted',
				'item_border_side' => 'top'
			)
   		),
   		'infowindow' => array(
   			'representation' => 'single',
   			'general_marker' => '0',
   			'post_marker' => '0',
   			'genmarker_defaultiwhtml' => '',
   			'postmarker_defaultiwhtml' => '',
   		),
   		'carousel' => array(
			//cb=> '1',
			'position' => 'bottom-ots',
			'item_html' => '',
			'navigation' => array(
					'arrow' => 'black',
					'background' => 'white'
				),
			'background' => 'rgba( 255, 255, 255, 0.7 )',
			'togglebg' => 'gray',
			'item_width' => '180',
			'item_height' => '80',
		),
		'np' => array(
			// 'cb' => '1',
			'place_types' => array()
		),
		'dirserv' => array(
			// 'cb' => '1',
			'route_color' => 'rgba( 255, 255, 255, 0.7 )',
			'route_weight' => '2'
		),
   		'gl' => array( 
   			'header' => array(
   				'switcher_mode' => 'grid',
   				'text' => '',
   				'text_color' => '',
   				'bg' => '',
   				// 'switcher_cb' => '1',
   				'btnicon_color' => ''
   			),
   			'search' => array(
   				// 'cb' => '1',
   				'input_color_bg' => '',
   				'input_color_font' => '',
   				'button_color_bg' => '',
   				'button_color_font' => '',
   				'form_color_bg' => '',
   			),
   			'filter' => array( 
   				// 'cb' => '1',
   				// 'sb_cb' => '1',
   				'sb_val' => '',
   				// 'ipp_cb' => '1',
   				'ipp_val' => '',
   				// 'ctg_cb' => '1',
   				'fillrange' => array(),
   				'color' => array(
   					'bg' => '',
   					'font' => '',
   					'label_icon' => '',
   					'btn_bg' => '',
   					'btn_icon' => '',
   					'sel_bg' => '',
   					'sel_font' => '',
   					'slideri' => '',
   					'slidero' => ''
   				)
   			),
   			'grid_style' => '',
   			'list_style' => ''
   		),
   		'rf' => array(
   			//'cb' => '1',
   			'val' => array(
   				'def' => '0',
   				'min' => '0',
   				'max' => '2',
   				'unit' => 'km'
   			),
   			'color' => array(
   				'formbg' => '',
   				'font' => '',
   				'labelicon' => '',
   				'slideri' => '',
   				'slidero' => '',
   				'btnbg' => '',
   				'btnicon' => '',
   				'inpbg' => '',
   				'inpfont' => '',
   				'cr' => '',
   				'crs' => '',
   				'crw' => '1',
   			),
   		),
	);

	if ( isset( $_POST['setting'] ) ) {
		$_POST['setting'] = json_encode( array_replace_recursive( $default_setting, $_POST['setting'] ) );
	} else {
		$_POST['setting'] = json_encode( $default_setting );
	}
	
	if ( isset( $_POST['marker'] ) ) 
		$_POST['marker'] = serialize($_POST['marker']);
	
	if ( isset( $_POST['route'] ) ) 
		$_POST['route'] = serialize($_POST['route']);
	
	if ( isset( $_POST['control'] ) ) 
		$_POST['control'] = json_encode($_POST['control']);
	
	if ( isset( $_POST['layer'] ) )	
		$_POST['layer'] = json_encode( $_POST['layer'] );
	
	if ( isset( $_POST['shape'] ) ) 
		$_POST['shape'] = serialize( $_POST['shape'] );

	if ( isset( $_POST['cpt'] ) ) 
		$_POST['cpt'] = json_encode( $_POST['cpt'] );
	
	$log = $this->save_item( 'map', $map_default );

	$message 	= $log['message'];
	$notice 	= $log['notice'];
	$item 		= $log['item'];

	$this->enqueue_gmaps();
	$this->enqueue_addform_cssjs();
	$this->enqueue_wpmedia();
	$this->enqueue_colorpicker();
	$this->enqueue_datatable();
	
	// Enqueue Script 
	wp_enqueue_script(
		'twgm-map-add-page',
		plugin_dir_url( __FILE__ ) . 'map-add-script.js',
		array( 'jquery' ), $this->ver, false );
	// Required Display
	require_once plugin_dir_path( dirname( __FILE__ ) ) . 'map/map-add-display.php';

?>