<?php

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
* Template Name: Frontpage
* Description: Modular Homepage using ACF
*/

// Use H1 for site title on homepage only
function cbg_h1_for_site_title( $wrap ) {
    return 'h1';
}
add_filter( 'genesis_site_title_wrap', 'cbg_h1_for_site_title' );
// Remove post title area
remove_action( 'genesis_entry_header', 'genesis_do_post_title'                 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open',  5  );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );


add_filter('body_class', 'remove_body_template_php_class', 20, 2);
  function remove_body_template_php_class($wp_classes)
{ foreach($wp_classes as $key => $value)
    { if ($value == 'page-template-frontpage-template-php') unset($wp_classes[$key]); } 
  return $wp_classes;
}

add_filter('body_class', 'remove_body_template_class', 20, 2);
  function remove_body_template_class($wp_classes)
{ foreach($wp_classes as $key => $value)
    { if ($value == 'page-template-frontpage-template') unset($wp_classes[$key]); } 
 return $wp_classes;
}

add_filter('body_class', 'remove_body_page_template_class', 20, 2);
  function remove_body_page_template_class($wp_classes)
{ foreach($wp_classes as $key => $value)
  { if ($value == 'page-template') unset($wp_classes[$key]); } 
 return $wp_classes;
}


add_action( 'cb_frontpage', 'cb_frontpage_content' );
function cb_frontpage_content() { ?>
  <p>THIS IS THE TEMPLATE</p>

<?php }

//filter the schema types
function be_site_inner_attr( $attributes ) {
  $attributes['role']     = 'main';
  $attributes['itemprop'] = 'mainContentOfPage';
  return $attributes;
}
add_filter( 'genesis_attr_site-inner', 'be_site_inner_attr' );


// Build the page
get_header();
do_action( 'cb_frontpage' );
get_footer();