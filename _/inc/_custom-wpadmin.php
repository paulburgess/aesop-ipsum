<?php
// =================================================================
// ====== Custom admin + menus
// =================================================================


/* Theme support for menus */
add_theme_support( 'menus' );

// Remove width and height attributes from images via WYSIWYG/admin
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}


// Image link default = none
update_option('image_default_link_type','none');


// logo link
function wpc_url_login(){
     return "/";
}
add_filter('login_headerurl', 'wpc_url_login');


// logo
// add own css file
function login_css() {
     wp_enqueue_style( 'login_css', get_template_directory_uri() . '/_/css/login.css' );
}
add_action('login_head', 'login_css');


//change the menu items label Posts to News
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Blog';
    $submenu['edit.php'][5][0] = 'Blog Posts';
    $submenu['edit.php'][10][0] = 'Add Post';
    $submenu['edit.php'][15][0] = 'Categories'; // Change name for categories
    //$submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
    echo '';
}

// ================================================

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Blog';
        $labels->singular_name = 'Blog';
        $labels->add_new = 'Add Blog Post';
        $labels->add_new_item = 'New Blog Post';
        $labels->edit_item = 'Edit Blog Post';
        $labels->new_item = 'Blog Post';
        $labels->view_item = 'View Blog Post';
        $labels->search_items = 'Search Blog';
        $labels->not_found = 'Nothing found';
        $labels->not_found_in_trash = 'Nothing found in Trash';
    }
    add_action( 'init', 'change_post_object_label' );
    add_action( 'admin_menu', 'change_post_menu_label' );


// ================================================
/**
 * Hide ACF menu item from the admin menu
 */

function remove_acf_menu()
{

    // provide a list of usernames who can edit custom field definitions here
    $admins = array(
        'paulburgess',
        'ghostbird'
    );

    // get the current user
    $current_user = wp_get_current_user();

    // match and remove if needed
    if( !in_array( $current_user->user_login, $admins ) )
    {
      remove_menu_page('edit.php?post_type=acf-field-group');
    }

}

add_action( 'admin_menu', 'remove_acf_menu' );


// ================================================

function remove_menus () {

// leave the itmes in that you want removed

global $menu;
  $restricted = array( __('Appearance'),__('Blog'),__('Links'), __('Comments'));
  end ($menu);
  while (prev($menu)){
    $value = explode(' ',$menu[key($menu)][0]);
    if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
  }
}

add_action('admin_menu', 'remove_menus');


// ================================================

function new_nav_menu () {
    global $menu;
    $menu[99] = array('', 'read', 'separator', '', 'menu-top menu-nav');
    add_menu_page(__('Navigation', 'nav-menus'), __('Navigation', 'nav-menus'), 'edit_themes', 'nav-menus.php', '', 'dashicons-menu', 60);
}
add_action('admin_menu', 'new_nav_menu');


// ================================================

function remove_footer_admin () {

// if($_SERVER['APP_ENV'] != "production")
// {
//   print($_SERVER['APP_ENV']);
// } else {
// echo '<p>Games with Purpose</p>';
// }

echo '<p>'.bloginfo("name").'</p>';




}
add_filter('admin_footer_text', 'remove_footer_admin');


// ================================================

// function annointed_admin_bar_remove() {
//         global $wp_admin_bar;
//         $wp_admin_bar->remove_menu('wp-logo');
// }
//
// add_action('wp_before_admin_bar_render', 'annointed_admin_bar_remove', 0);

// ================================================


// Remove all those widgets
add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');
function wpc_dashboard_widgets() {
     global $wp_meta_boxes;
     // Today widget
     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
     // Last comments
     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
     // Incoming links
     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
     // Plugins
     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_quick_press']);
     unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
     unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}


// Add a widget in WordPress Dashboard
function add_dashboard_widget_function() {
  // Entering the text between the quotes
  echo "<p style='text-align:center'><img src='". get_template_directory_uri() ."/_/img/logo.png' /></p>";

}



function wpc_add_dashboard_widgets() {
  wp_add_dashboard_widget('wp_dashboard_widget', '&nbsp;', 'add_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'wpc_add_dashboard_widgets' );



function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
    //$wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
    $wp_admin_bar->remove_menu('themes');
    $wp_admin_bar->remove_menu('dashboard');
    $wp_admin_bar->remove_menu('menus');
    $wp_admin_bar->remove_menu('search');
    $wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_menu('view-site');        // Remove the view site link
    $wp_admin_bar->remove_menu('updates');          // Remove the updates link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
    //$wp_admin_bar->remove_menu('new-content');      // Remove the content link
    //$wp_admin_bar->remove_menu('w3tc');             // If you use w3 total cache remove the performance link
    //$wp_admin_bar->remove_menu('my-account');       // Remove the user details tab
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );


// ================================================


// CHANGE EDITOR PERMISSIONS
// Get the the role object
$role = get_role( 'editor' );
// allow menus
$role->add_cap( 'edit_theme_options' );
// allow Gravity Forms
$role->add_cap( 'gravityforms_edit_forms' );
$role->add_cap( 'gravityforms_delete_forms' );
$role->add_cap( 'gravityforms_create_form' );
$role->add_cap( 'gravityforms_view_entries' );
$role->add_cap( 'gravityforms_edit_entries' );
$role->add_cap( 'gravityforms_delete_entries' );
$role->add_cap( 'gravityforms_view_settings' );
$role->add_cap( 'gravityforms_edit_settings' );
$role->add_cap( 'gravityforms_export_entries' );
$role->add_cap( 'gravityforms_view_entry_notes' );
$role->add_cap( 'gravityforms_edit_entry_notes' );

// remove theme editor menu
// function remove_editor_menu() {
//   remove_action('admin_menu', '_add_themes_utility_last', 101);
// }
// add_action('_admin_menu', 'remove_editor_menu', 1);


// ================================================


// Set default admin colour
/*
add_filter( 'get_user_option_admin_color', function( $color_scheme ) {

  global $_wp_admin_css_colors;

  if ( 'classic' == $color_scheme || 'fresh' == $color_scheme ) {
    $color_scheme = 'midnight';
  }

  return $color_scheme;

}, 5 );
*/

// Force colour schem for all
/*
add_filter('get_user_option_admin_color', 'change_admin_color');
function change_admin_color($result) {
    return 'ectoplasm';
}
*/


function wpb_change_title_text( $title ){
     $screen = get_current_screen();

     if  ( 'stockist' == $screen->post_type ) {
          $title = 'Enter stockist name - e.g. Arrows';
     }

     return $title;
}

add_filter( 'enter_title_here', 'wpb_change_title_text' );


// -- Hide tags and/or categories

// remove from menus

function remove_sub_menus() {
    //remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');
}
add_action('admin_menu', 'remove_sub_menus');

// Remove meta boxes
function remove_post_metaboxes() {
//  remove_meta_box( 'categorydiv','post','normal' ); // Categories Metabox
  remove_meta_box( 'tagsdiv-post_tag','post','normal' ); // Tags Metabox
}
add_action('admin_menu','remove_post_metaboxes');

?>
