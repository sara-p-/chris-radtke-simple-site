<?php

/* 
  Enqueue Scripts and Styles
*/
// add_action( 'wp_enqueue_scripts', 'chris_radkte_styles' );

// function chris_radtkee_styles() {
  // 	wp_enqueue_style( 
    // 		'chris-radtke-style', 
    // 		get_stylesheet_uri()
    // 	);
    // }
    
/* 
  Enqueue Scripts and Styles (using Vite)
*/

add_action('wp_enqueue_scripts', 'chris_radtke_scripts');

function chris_radtke_scripts() {
  $manifestPath = get_theme_file_path('dist/.vite/manifest.json');
  
  // Check if the manifest file exists and is readable before using it
  if (file_exists($manifestPath)) {
    $manifest = json_decode(file_get_contents($manifestPath), true);
    
    // Check if the file is in the manifest before enqueuing
    if (isset($manifest['src/scripts/main.js'])) {
        wp_enqueue_script('chris-radtke-js', get_theme_file_uri('dist/' . $manifest['src/scripts/main.js']['file']));
        // Enqueue the CSS file
        wp_enqueue_style('chris-radtke-style', get_theme_file_uri('dist/' . $manifest['src/scripts/main.js']['css'][0]));
    }
  }
}



// Add Nav Menu
if (function_exists('register_nav_menu'))
{
  register_nav_menu('header_menu', 'Header Menu');
}
?>