<?php

if( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
* Template Name: Frontpage
* Description: Modular Homepage using ACF
*/

// Use H1 for site title on homepage only
function cbg_h1_for_site_title( $wrap ) {
    return 'p';
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
<div class="hero full-width-container">
  <div class="wrap">
    <div class="hero-content three-fourths first">
      <h1>Kelowna Custom Blinds, Shades, Drapery, and Window Treatments.</h1>
      <p class="subheading">Enhance your interior with refined elegance and style. <strong>Inspired Window Fashions</strong> delivers a superior product and experience from design consultation, installation, and throughout the life of our products.</p>
      <ul class="checklist">
        <li><span class="circle dashicons dashicons-yes"></span> Beautify Your Home</li>
        <li><span class="circle dashicons dashicons-yes"></span> Control Lighting &amp; Privacy</li>
        <li><span class="circle dashicons dashicons-yes"></span> Boost Energy Efficiency</li>
      </ul>
      <a class="btn pill lrg" href="" title="Request Free Quote">Get Free Quote</a>
    </div>
  </div>
</div>

<div class="featured-products full-width-container">
  <div class="wrap"> 
    <h2>Transform Your Space</h2>
    <p class="lead">Compliment your decor and complete any room with a custom combination of Shades, Blinds, and Fabric Window Treatments. Schedule your free design consultation today.</p>
     <div class="product one-third first">
      <div class="image-wrapper">
        <img src="/wp-content/uploads/2017/03/cellular-shades-kelowna.jpg" alt="Kelowna Cellular Shades">
      </div>
       <h3>Cellular Shades</h3>
       <p>Illuminate your day and insulate your home. Soft, luxurious fabrics folded into honeycomb-shaped cells. A smart way to improve the energy efficiency of your home.</p>
     </div>
     <div class="product one-third">
        <div class="image-wrapper">
          <img src="/wp-content/uploads/2017/03/vertical-blinds-kelowna.jpg" alt="Kelowna Vertical Blinds">
        </div>
      <h3>Vertical Blinds</h3>
      <p>Modern Vertical Blinds in fabric or vinyl vanes form a perfect top-to-bottom solution. Choose from an extensive collection of contemporary colours and patterns.</p>
     </div>
     <div class="product one-third">
      <div class="image-wrapper">
          <img src="/wp-content/uploads/2017/03/artisan-drapery-kelowna.jpg" alt="Artisan Drapery Kelowna">
      </div>
      <h3>Artisan Drapery</h3>
      <p>Artisan Drapery is designed with exquisite details—sewn-in liners, double-turned hems, bottom weights, and mitered corners, to ensure your drapes hang beautifully.</p>
     </div> 
     <div class="product one-third first">
      <div class="image-wrapper">
          <img src="/wp-content/uploads/2017/03/wood-faux-wood-blinds-kelowna.jpg" alt="Kelowna Wood and Faux Wood Blinds">
      </div>
      <h3>Wood and Faux Wood Blinds</h3>
      <p>Imagine the possibilities of wood, or faux wood blinds. Traditional or Contemporary. Rustic or Modern. Let warmth and beauty set the tone for your living spaces.</p>       
     </div>
     <div class="product one-third">
       <div class="image-wrapper">
          <img src="/wp-content/uploads/2017/03/roller-solar-shades-kelowna.jpg" alt="Kelowna Roller Shades" width="800" height="551">
      </div>
      <h3>Solor Roller Shades</h3>
      <p>These fashionable yet timeless shades protect against harmful UV rays and prevent uncomfortable glare while maintaining the vista outside your window.</p>      
     </div>
          <div class="product one-third">
       <div class="image-wrapper">
          <img src="/wp-content/uploads/2017/03/sheer-blinds-kelowna.jpg" alt="Kelowna Sheer Blinds">
      </div>
      <h3>Sheer and Pleated Blinds</h3>
      <p>Double-layered sheer fabric protects your furniture, and artwork from damaging UV rays while the lightweight fabric vanes allow you to diffuse, or block light completely.</p>
     </div> 
  </div>
</div>

<div class="monthly-promo full-width-container">
  <div class="wrap"> 
    <div class="promo-box one-half first">
        <h3>Free</h3>
          <p class="promo-subtitle">Cordless Lift</p>
          <p class="promo-desc">Add safety to your home when you upgrade to cordless lift on select Graber products.</p>
          <div class="promo-date-range">March 1 &#8211; May 31, 2017</div>
          <p class="promo-cta"><a class="btn pill hollow" href="#">Request FREE Consultation</a></p>
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
  <q>Inspired Window Fashions was very professional and knowledgable in helping me match my blinds to my home.</q>
  <div class="author">Jeanette Jones</div>
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
      <a data-toggle="modal" href="#">Request Your Free Consultation</a>
      <h6>Phone</h6>
      <p><a href="tel:+12508012722">250-801-2722</a></p>
    </div>
    <div class="one-half">
      <div id="google-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2569.9692653125526!2d-119.48883598410022!3d49.89938033479831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537df35d431dd1c1%3A0xea9be77193f22423!2s895+Walrod+St%2C+Kelowna%2C+BC+V1Y+2S4!5e0!3m2!1sen!2sca!4v1488798500398" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
    </div>
  </div>          
</div>

<div class="large-cta full-width-container">
  <div class="wrap">
    <h2>Add More Beauty To Your Home Today</h2>
    <p class="lead">Schedule a <strong>FREE</strong> in-home consultation today.</p>
    <a class="btn pill lrg" href="" title="Request Free Quote">Get Free Quote</a>
  </div>          
</div>

<div class="brands full-width-container">
  <div class="wrap">
    <div class="logo-image one-third first">
      <img src="/wp-content/uploads/2017/03/graber-logo.png" alt="Graber Blinds Kelowna Penticton Vernon">
    </div>
    <div class="logo-image one-third">
      <img src="/wp-content/uploads/2017/03/Springs-Window-Fashions-Logo.png" alt="Springs Window Fashions Kelowna Penticton Vernon">
    </div>
    <div class="logo-image one-third">
      <img src="/wp-content/uploads/2017/03/elite-window-covering-blind-supplier.png" alt="Elite Window Fashions Kelowna Penticton Vernon">
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
do_action( 'cb_frontpage' );
get_footer();