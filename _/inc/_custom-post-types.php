<?php
add_action( 'init', function() {
//-----------------------------------------------------
//-----------------------------------------------------

register_extended_post_type( 'custom-post-type', array(
		'menu_icon' => 'dashicons-groups',
		'has_archive' => false
	),
	array(
    'singular' => 'Post type',
  //  'plural'   => 'People',
  //  'slug'     => 'people'
)
);

// -----------------------------------------------------





		//-----------------------------------------------------


		// register_extended_post_type( 'music', array(
		// 		'menu_icon' => 'dashicons-format-audio'
		// 	),
		// 	array(
    //     //'singular' => 'Music',
    //     'plural'   => 'Music',
    //     //'slug'     => 'music'
		//
    // )
		// );

		//-----------------------------------------------------



    register_extended_taxonomy( 'person-category', 'person', array(

        # Use radio buttons in the meta box for this taxonomy on the post editing screen:
        'meta_box' => 'radio',

        # Show this taxonomy in the 'At a Glance' dashboard widget:
        //'dashboard_glance' => true,

        # Add a custom column to the admin screen:
         'admin_cols' => array(
            //  'updated' => array(
            //      'title'       => 'Category',
            //     //  'meta_key'    => 'updated_date',
            //     //  'date_format' => 'd/m/Y'
            //  ),
         ),

    ), array(

        # Override the base names used for labels:
        'singular' => 'Category',
        'plural'   => 'Categories',
        'slug'     => 'person-category'

    ) );

//-----------------------------------------------------
//-----------------------------------------------------
} );


?>
