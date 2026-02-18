<?php

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

/* 
  Add meta tag to HEAD
*/
add_action('wp_head', 'wp_head_meta_tags');

function wp_head_meta_tags() {
  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
}


?>