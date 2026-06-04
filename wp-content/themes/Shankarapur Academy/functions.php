
<?php 
function shankarapur_theme_assets() {

// === STYLES ===

// Google Fonts
wp_enqueue_style(
    'clinic-google-fonts',
    'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap',
    [],
    null
);

// Vendor CSS
wp_enqueue_style('clinic-bootstrap',        get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], null);
wp_enqueue_style('clinic-bootstrap-icons',  get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', [], null);
wp_enqueue_style('clinic-aos',              get_template_directory_uri() . '/assets/vendor/aos/aos.css', [], null);
wp_enqueue_style('clinic-glightbox',        get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', [], null);
wp_enqueue_style('clinic-fontawesome',      get_template_directory_uri() . '/assets/vendor/fontawesome-free/css/all.min.css', [], null);
wp_enqueue_style('clinic-swiper',           get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', [], null);

// Main CSS 
wp_enqueue_style('clinic-main',             get_template_directory_uri() . '/assets/css/main.css', [], null);


// === SCRIPTS ===

// Vendor JS (loaded in footer)
wp_enqueue_script('clinic-bootstrap-js',    get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [], null, true);
wp_enqueue_script('clinic-email-form',      get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', [], null, true);
wp_enqueue_script('clinic-aos-js',          get_template_directory_uri() . '/assets/vendor/aos/aos.js', [], null, true);
wp_enqueue_script('clinic-glightbox-js',    get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', [], null, true);
wp_enqueue_script('clinic-purecounter',     get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', [], null, true);
wp_enqueue_script('clinic-swiper-js',       get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', [], null, true);

// Main JS (depends on vendors above, so listed last)
wp_enqueue_script('clinic-main-js',         get_template_directory_uri() . '/assets/js/main.js', [], null, true);
}
add_action( 'wp_enqueue_scripts', 'shankarapur_theme_assets' );



// ─── 2. Register Navigation Menu ──────────────────────────────────────────

function shankarapur_register_menu(){
  register_nav_menus([
    'primary_menu' => __('Primary Menu', 'shankarapur'),
    'footer_menu' => __('Footer Menu', 'shankarapur'),
   
]);
}
add_action('init','shankarapur_register_menu');


// ─── 3. Theme Support (logo, title tag) ───────────────────────────────────
function shankarapur_theme_support() {
  add_theme_support('custom-logo');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'shankarapur_theme_support');



// ─── 4. Customizer Settings ───────────────────────────────────────────────
function shankarapur_customizer($wp_customize) {

  $wp_customize->add_section('shankarapur_topbar', [
      'title'    => __('Top Bar Settings', 'shankarapur'),
      'priority' => 30,
  ]);
  // Phone
  $wp_customize->add_setting('topbar_phone', ['default' => '']);
  $wp_customize->add_control('topbar_phone', [
      'label'   => __('Phone Numbers', 'shankarapur'),
      'section' => 'shankarapur_topbar',
      'type'    => 'text',
  ]);
  // Email
  $wp_customize->add_setting('topbar_email',['default' =>'']);
  $wp_customize->add_control('topbar_email', [
    'label'   => __('Email', 'shankarapur'),
    'section' => 'shankarapur_topbar',
    'type'    => 'email',
]);
  // Address
  $wp_customize->add_setting('topbar_address',['default' =>'']);
  $wp_customize->add_control('topbar_address', [
    'label'   => __('Address', 'shankarapur'),
    'section' => 'shankarapur_topbar',
    'type'    => 'text',
]);
 // Facebook
$wp_customize->add_setting('topbar_facebook', [
  'default'           => '',
  'sanitize_callback' => 'esc_url_raw',
]);
$wp_customize->add_control('topbar_facebook', [
  'label'   => __('Facebook URL', 'shankarapur'),
  'section' => 'shankarapur_topbar',
  'type'    => 'url',
]);

// Discord
$wp_customize->add_setting('topbar_discord', [
  'default'           => '',
  'sanitize_callback' => 'esc_url_raw',
]);
$wp_customize->add_control('topbar_discord', [
  'label'   => __('Discord URL', 'shankarapur'),
  'section' => 'shankarapur_topbar',
  'type'    => 'url',
]);

// Instagram
$wp_customize->add_setting('topbar_instagram', [
  'default'           => '',
  'sanitize_callback' => 'esc_url_raw',
]);
$wp_customize->add_control('topbar_instagram', [
  'label'   => __('Instagram URL', 'shankarapur'),
  'section' => 'shankarapur_topbar',
  'type'    => 'url',
]);

}
add_action('customize_register', 'shankarapur_customizer');



// ─── 5. Custom Walker for Dropdown Nav ────────────────────────────────────
class shankarapur_Walker_Nav_Menu extends Walker_Nav_Menu {

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
      
      // Ensure classes is always an array (fixes the fatal error)
      $classes      = is_array($item->classes) ? $item->classes : [];
      
      $has_children = in_array('menu-item-has-children', $classes);
      $is_active    = in_array('current-menu-item', $classes);

      $output .= $has_children ? '<li class="dropdown">' : '<li>';

      $attr  = !empty($item->url)    ? ' href="'   . esc_url($item->url)     . '"' : '';
      $attr .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
      $attr .= $is_active            ? ' class="active"'                          : '';

      $title = apply_filters('the_title', $item->title, $item->ID);

      if ($has_children) {
          $output .= '<a' . $attr . '><span>' . $title . '</span>'
                   . ' <i class="bi bi-chevron-down toggle-dropdown"></i></a>';
      } else {
          $output .= '<a' . $attr . '>' . $title . '</a>';
      }
  }
}



function get_all_images_from_content( $post_id = null ) {
  $post    = get_post( $post_id ?? get_the_ID() );
  $content = apply_filters( 'the_content', $post->post_content );

  preg_match_all( '/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/i', $content, $matches );

  return ! empty( $matches[1] ) ? $matches[1] : [];
}
