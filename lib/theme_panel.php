<?php
if ( ! class_exists( 'Redux' ) ) {
	return;
}

$opt_name = 'welearner_panel';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
	'display_name'    => $theme->get( 'Name' ),
	'display_version' => $theme->get( 'Version' ),
	'menu_title'      => esc_html__( 'welearner', 'welearner' ),
	'customizer'      => true,
);

Redux::set_args( $opt_name, $args );

Redux::set_section( $opt_name, array(
		'title'  => esc_html__( 'Top Header', 'welearner' ),
		'id'     => 'basic',
		'desc'   => esc_html__( 'Top Header', 'welearner' ),
		'icon'   => 'el el-home',
		'fields' => array(
			array(
				'id'      => 'top_header_switch',
				'type'    => 'switch',
				'on'      => 'Show',
				'off'     => 'Hide',
				'default' => true,
				'title'   => esc_html__( 'Show top header', 'welearner' )
			),
			array(
				'id'      => 'top_header_color',
				'type'    => 'color',
				'default' => '#EC1D23',
				'title'   => esc_html__( 'Header Color', 'redux_docs_generator' )
			),
			array(
				'id'    => 'top_header_phone',
				'type'  => 'text',
				'title' => esc_html__( 'Contact Number', 'welearner' )
			),

			array(
				'id'    => 'top_header_email',
				'type'  => 'text',
				'title' => esc_html__( 'Email', 'welearner' )
			),

			array(
				'id'    => 'top_header_help',
				'type'  => 'text',
				'title' => esc_html__( 'Heed help link', 'welearner' )
			),

			array(
				'id'    => 'top_header_offer',
				'type'  => 'text',
				'title' => esc_html__( 'Offer link', 'welearner' )
			),


		)
	)

);


//------------footer part--------------


Redux::set_section( $opt_name, array(
		'title'  => esc_html__( 'Footer', 'welearner' ),
		'id'     => 'footer',
		'desc'   => esc_html__( 'Footer', 'welearner' ),
		'icon'   => 'el el-lines',
		'fields' => array()
	)
);




Redux::set_section( $opt_name, array(
		'title'      => esc_html__( 'counter Number', 'welearner' ),
		'id'         => 'copy_right',
		'desc'       => esc_html__( 'counter Number', 'welearner' ),
		'icon'       => 'el el-minus',
		'subsection' => true,

		'fields' => array(
			array(
				'id'    => 'text1',
				'type'  => 'text',
				'title' => esc_html__( 'Copy Right Text:', 'welearner' )
			),			array(
				'id'    => 'number1',
				'type'  => 'text',
				'title' => esc_html__( 'number:', 'welearner' )
			),
			array(
				'id'    => 'text2',
				'type'  => 'text',
				'title' => esc_html__( 'Link Text:', 'welearner' )
			),

			array(
				'id'          => 'text3',
				'type'        => 'text',
				'placeholder' => '',
				'title'       => esc_html__( 'Text:', 'welearner' )
			),
		)
	)
);





//-------------------------------end footer part----------------------------------------

Redux::set_section( $opt_name, array(
		'title'  => esc_html__( 'Preloader', 'welearner' ),
		'id'     => 'preloader',
		'desc'   => esc_html__( 'welearner Preloader', 'welearner' ),
		'icon'   => 'el el-adjust',
		'fields' => array(
			array(
				'id'      => 'welearner_preloader',
				'type'    => 'switch',
				'on'      => 'Show',
				'off'     => 'Hide',
				'default' => true,
				'title'   => esc_html__( 'Show or Hide Preloader', 'welearner' )
			),
		)
	)
);



