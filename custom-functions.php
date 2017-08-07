<?php 

/** Mobile detect for mobile. */
 
function is_mobile(){
   $detect = new Mobile_Detect;
   $result = false;
   
   if ( $detect->isMobile() && !$detect->isTablet()  ):
      $result = true;
   endif;
   
   return $result;
}

function is_tablet_ipad(){
   $detect = new Mobile_Detect;
   $result = false;
   
   if ( $detect->version('iPad') && $detect->isTablet()  ):
      $result = true;
   endif;
   
   return $result;
}

/** Mobile detect scripts.  */

function mobile_detect_scripts() {
   $detect = new Mobile_Detect;
   if ( $detect->isMobile() && !$detect->isTablet() ) { 
      
      // //mobile JS
      // wp_register_script( 'mobile-js', get_template_directory_uri() . '/js/mobile-site.js', array( 'jquery' ), '1', false );
      // wp_enqueue_script( 'mobile-js' );
            
      // //mobile style
      // wp_register_style( 'mobile-style', get_template_directory_uri() . '/css/mobile.css', array(), '1', 'all' );
      // wp_enqueue_style( 'mobile-style' );
      
   } else {
      //responsive style
      wp_register_style( 'responsive-style', get_template_directory_uri() . '/css/responsive.css', array(), '1', 'all' );
      wp_enqueue_style( 'responsive-style' );
   }
}

add_action( 'wp_enqueue_scripts', 'mobile_detect_scripts' );