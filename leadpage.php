<?php

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
* Template Name: LeadPage
* Description: LeadPage Template for Inspired Window Fashions
*/

// Use H1 for site title on homepage only
function cbg_h1_for_site_title( $wrap ) {
    return 'p';
}
add_filter( 'genesis_site_title_wrap', 'cbg_h1_for_site_title' );


add_filter( 'genesis_attr_body', 'themeprefix_add_css_attr' );
function themeprefix_add_css_attr( $attributes ) {
 
 // add original plus extra CSS classes
 $attributes['class'] .= ' leadpage';
 
 // return the attributes
 return $attributes;
 
}

// Remove post title area
remove_action( 'genesis_entry_header', 'genesis_do_post_title'                 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open',  5  );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

// REMOVE UNNECESSARY CLASSES FROM BODY
add_filter('body_class', 'remove_body_template_php_class', 20, 2);
  function remove_body_template_php_class($wp_classes)
{ foreach($wp_classes as $key => $value)
    { if ($value == 'page-template-leadpage-template-php') unset($wp_classes[$key]); } 
  return $wp_classes;
}

add_filter('body_class', 'remove_body_template_class', 20, 2);
  function remove_body_template_class($wp_classes)
{ foreach($wp_classes as $key => $value)
    { if ($value == 'page-template-leadpage-template') unset($wp_classes[$key]); } 
 return $wp_classes;
}

add_filter('body_class', 'remove_body_page_template_class', 20, 2);
  function remove_body_page_template_class($wp_classes)
{ foreach($wp_classes as $key => $value)
  { if ($value == 'page-template') unset($wp_classes[$key]); } 
 return $wp_classes;
}
//---------------------------------------------------


// LEADPAGE CONTENT LOOP

add_action( 'cb_leadpage', 'cb_leadpage_content' );
function cb_leadpage_content() { ?>
<?php if( ! get_field('use_inline_form') ): ?>
<div class="hero full-width-container hero-a">
  <div class="wrap">
    <div class="hero-content five-sixths first">
      <h1>Kelowna Custom Blinds, Shades, Drapery, and Window Treatments.</h1>
      <p class="subheading">Enhance your interior with refined elegance and style. <strong>Inspired Window Fashions</strong> delivers a superior product and experience from design consultation, installation, and throughout the life of our products.</p>
      <ul class="checklist">
        <li><span class="circle dashicons dashicons-yes"></span> Beautify Your Home</li>
        <li><span class="circle dashicons dashicons-yes"></span> Control Lighting &amp; Privacy</li>
        <li><span class="circle dashicons dashicons-yes"></span> Boost Energy Efficiency</li>
      </ul>
      <a class="btn pill lrg popmake-homepage-form" href="" title="Request Free Quote">Get Free Quote</a>
    </div>
  </div>
</div><?php /* end hero 1 */ endif; ?>
<?php if( get_field('use_inline_form') ): ?><div class="hero full-width-container hero-b">
  <div class="wrap">
    <div class="hero-content one-half first">
      <h1>Free Design Consultation</h1>
      <p class="subheading">Transform your living space. <strong>Inspired Window Fashions</strong> delivers a superior product and experience in Kelowna, Penticton, and Vernon. Get started. Request your free in-home design consultation now.</p>
      <ul class="checklist">
        <li><span class="circle dashicons dashicons-yes"></span> Beautify Your Home</li>
        <li><span class="circle dashicons dashicons-yes"></span> Control Lighting &amp; Privacy</li>
        <li><span class="circle dashicons dashicons-yes"></span> Boost Energy Efficiency</li>
      </ul>
      <div class="hero-testimonial">
        <p class="testimonial">&ldquo; I really enjoyed the whole experience and time we spent ensuring I got exactly what I wanted. &rdquo;</p>
        <div class="author">&mdash; Susan Clarke</div>
      </div>
      <img id="hero-inline-trust-signals" src="/wp-content/uploads/2017/03/iwf-trust-signals-2.png" alt="Kelowna Blinds Specialists">
    </div>
    <div class="one-half">
    <div class="form-container">
      <div class="form-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60"><g fill="#6bc079"><path d="M48.15 16.99h.32v11.13h-.32zM48.31 28.48a.49.49 0 0 0-.49.49v1a.49.49 0 1 0 1 0v-.97a.49.49 0 0 0-.51-.52zM45.5 16.21h2.76a.22.22 0 0 0 .22-.22v-1.99a.22.22 0 0 0-.22-.21h-36.84a.22.22 0 0 0-.22.21v2a.22.22 0 0 0 .22.22h2.58v1h-1.78v29.02h4v-29.05h-1.84v-1h4.86v1h-1.83v29.05h4v-29.05h-1.82v-1h4.81v1h-1.81v29.05h4v-29.05h-1.84v-1h4.86v1h-1.83v29.05h4v-29.05h-1.78v-1h4.81v1h-1.81v29.05h4v-29.05h-1.88v-1h4.88v1h-1.86v29.05h4v-29.05h-1.81v-1h4.82v1h-1.83v29.05h4v-29.05h-1.82zM49.56 0h-39.12a10.44 10.44 0 0 0-10.44 10.44v39.12a10.44 10.44 0 0 0 10.44 10.44h39.12a10.44 10.44 0 0 0 10.44-10.44v-39.12a10.44 10.44 0 0 0-10.44-10.44zm7.58 49.56a7.59 7.59 0 0 1-7.58 7.58h-39.12a7.59 7.59 0 0 1-7.58-7.58v-39.12a7.59 7.59 0 0 1 7.58-7.58h39.12a7.59 7.59 0 0 1 7.58 7.58z"/></g></svg></div>
      <p>Complete the form. We will get back to you as soon as possible (usually within hours) to arrange for your free in-home design consultation.</p>
      <div class="inline-gform"><?php gravity_form(2, false, false, false, '', true, 12); ?></div>
      <p class="privacy"><span class="dashicons dashicons-lock"></span> <a href="/privacy" title="Privacy Policy">Privacy</a></p>
    </div>
    </div>
  </div>  
</div><?php /* end hero 2 */ endif; ?>

<div class="featured-products full-width-container">
  <div class="wrap"> 
    <h2><?php the_field('title');?></h2>
    <p class="lead"><?php the_field('lead_paragraph');?></p>
     <div class="product one-third first" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
      <div class="image-wrapper">
        <img itemprop="contentUrl" <?php ar_responsive_image(get_field( 'product_1_image' ),'product-desktop','714px'); ?> alt="Kelowna <?php the_field('product_1_title');?>">
      </div>
       <h3 itemprop="name"><?php the_field('product_1_title');?></h3>
       <p itemprop="description"><?php the_field('product_1_description');?></p>
     </div>
     <div class="product one-third" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
        <div class="image-wrapper">
          <img itemprop="contentUrl" <?php ar_responsive_image(get_field( 'product_2_image' ),'product-desktop','714px'); ?> alt="Kelowna <?php the_field('product_2_title');?>">
        </div>
      <h3 itemprop="name"><?php the_field('product_2_title');?></h3>
      <p itemprop="description"><?php the_field('product_2_description');?></p>
     </div>
     <div class="product one-third" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
      <div class="image-wrapper">
          <img itemprop="contentUrl" <?php ar_responsive_image(get_field( 'product_3_image' ),'product-desktop','714px'); ?> alt="<?php the_field('product_3_title');?> Kelowna">
      </div>
      <h3 itemprop="name"><?php the_field('product_3_title');?></h3>
      <p itemprop="description"><?php the_field('product_3_description');?></p>
     </div> 
     <div class="product one-third first" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
      <div class="image-wrapper">
          <img itemprop="contentUrl" <?php ar_responsive_image(get_field( 'product_4_image' ),'product-desktop','714px'); ?> alt="Okanagan <?php the_field('product_4_title');?>">
      </div>
      <h3 itemprop="name"><?php the_field('product_4_title');?></h3>
      <p itemprop="description"><?php the_field('product_4_description');?></p>       
     </div>
     <div class="product one-third" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
       <div class="image-wrapper">
          <img itemprop="contentUrl" <?php ar_responsive_image(get_field( 'product_5_image' ),'product-desktop','714px'); ?> alt="Kelowna <?php the_field('product_5_title');?>">
      </div>
      <h3 itemprop="name"><?php the_field('product_5_title');?></h3>
      <p itemprop="description"><?php the_field('product_5_description');?></p>      
     </div>
          <div class="product one-third" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
       <div class="image-wrapper">
          <img itemprop="contentUrl" <?php ar_responsive_image(get_field( 'product_6_image' ),'product-desktop','714px'); ?> alt="Kelowna <?php the_field('product_6_title');?>">
      </div>
      <h3 itemprop="name"><?php the_field('product_6_title');?></h3>
      <p itemprop="description"><?php the_field('product_6_description');?></p>
     </div> 
  </div>
</div>

<div class="monthly-promo full-width-container">
  <div class="wrap"> 
    <div class="promo-box one-half first">
        <h3><?php the_field('heading', 'option'); ?></h3>
          <p class="promo-subtitle"><?php the_field('subheading', 'option'); ?></p>
          <p class="promo-desc"><?php the_field('description', 'option'); ?></p>
          <div class="promo-date-range"><?php the_field('date_range', 'option'); ?></div>
          <p class="promo-cta"><a class="btn pill hollow popmake-homepage-form" href="#">Request FREE Consultation</a></p>
    </div>
  </div>
</div>

<div class="faq full-width-container">
  <div class="wrap"> 
    <h2>Frequently Asked Questions</h2>
    <div class="one-half first">
      <h5>How do I know what style and colour to choose?</h5>
      <p>When you schedule a design consultation, I will guide you through all the sample books available. I will not rush you. But will take the time necessary ensure you’ve had time to select the perfect style and colour for your decor.</p>
      <h5>Do you provide a solution for homes with small children?</h5>
      <p>Yes. In accordance with the Window Covering Safety Council we offer cordless window coverings for bedrooms and sleeping areas for young children.</p>
      <h5>Do you offer cut-down blinds?</h5>
      <p>No. We provide high quality, custom blinds only.</p> 
    </div>
    <div class="one-half">
      <h5>How long will my custom blinds take to make?</h5>
      <p>For drapery an average of five to six weeks from purchase to installation. For blinds, shades, and other window treatments the average time is just two to three weeks.</p>
      <h5>Do you offer competitive pricing?</h5>
      <p>Yes. We provide extremely competitive pricing on all our products and installation services. We also provide extensive design consultation at no charge.</p>
      <h5>What is the warranty on your products?</h5>
      <p>All products you purchase from us are protected by a minimum 10-Year Manufacturers Warranty.</p>       
    </div>
  </div>
</div>
<div class="testimonials full-width-container">
  <div class="wrap">
  <q><?php the_field('testimonial_text');?></q>
  <div class="author"><?php the_field('author_name');?></div>
  </div>          
</div>

<div class="contact-info full-width-container">
  <div class="wrap">
    <div class="one-half first">
      <h2>Contact Us</h2>
      <p>We’re here to assist you. Including evenings and weekends.</p>
      <h6>Address</h6>
      <p>895 Walrod Street<br/>Kelowna B.C. V1Y 2S4</p>
      <h6>Email</h6>
      <p><a href="mailto:inspiredwf@hotmail.com?Subject=Window%20Fashions%20Inquiry" target="_top">Send Mail</a></p>
      <h6>Free Design Consultations</h6>
      <a class="popmake-homepage-form" href="#">Request Your Free Consultation</a>
      <h6>Phone</h6>
      <p><a href="tel:+12508012722">250-801-2722</a></p>
    </div>
    <div class="one-half">
        <img id="gmap" src="/wp-content/uploads/2017/03/inspired-window-fashions.jpg" alt="Inspired Window Fashions Kelowna Location">
    </div>
  </div>          
</div>

<div class="large-cta full-width-container">
  <div class="wrap">
    <h2>Add More Beauty To Your Home Today</h2>
    <p class="lead">Schedule a <strong>FREE</strong> in-home consultation today.</p>
    <a class="btn pill lrg popmake-homepage-form" href="#" title="Request Free Quote">Get Free Quote</a>
  </div>          
</div>

<div class="brands full-width-container">
  <div class="wrap">
    <div class="heading-container"><h4>Our Brands</h4></div>
    <div class="logo-image one-third first" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
      <img itemprop="contentUrl" src="/wp-content/uploads/2017/03/graber-logo.png" alt="Graber Blinds Kelowna Penticton Vernon">
    </div>
    <div class="logo-image one-third" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
      <img itemprop="contentUrl" src="/wp-content/uploads/2017/03/Springs-Window-Fashions-Logo.png" alt="Springs Window Fashions Kelowna Penticton Vernon">
    </div>
    <div class="logo-image one-third" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
      <img itemprop="contentUrl" src="/wp-content/uploads/2017/03/elite-window-covering-blind-supplier.png" alt="Elite Window Fashions Kelowna Penticton Vernon">
    </div>
  </div>    
</div>

<?php }

//filter the schema types
function be_site_inner_attr( $attributes ) {
  $attributes['role']     = 'main';
  $attributes['itemprop'] = 'mainContentOfPage';
  return $attributes;
}
add_filter( 'genesis_attr_site-inner', 'be_site_inner_attr' );

//Remove 'site-inner' from structural wrap
add_theme_support( 'genesis-structural-wraps', array( 'header', 'footer-widgets', 'footer' ) );


// Build the page
get_header();
do_action( 'cb_leadpage' );
get_footer();