<?php
/*
Plugin Name: Jonas Alexander
Description: Online portfolio of Jonas Alexander
Version: 1.0
Author: J0nas7
*/

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Shortcode to render a custom page
// add_shortcode('jonasalexander_frontpage', 'render_jonasalexander_frontpage');
$projects = [
    'jonasalexander_frontpage' => 'frontpage.php',
    'giveortake_project' => 'giveortake_project.php',
    'casanova_project' => 'casanova_project.php',
    'yourspace_project' => 'yourspace_project.php',
    'iot_sos_app_project' => 'iot_sos_app_project.php',
    'base2sale_crm_project' => 'base2sale_crm_project.php',
    'funler_messaging_project' => 'funler_messaging_project.php',
    'allingbjerggaard_project' => 'allingbjerggaard_project.php',
    'go_netto_project' => 'go_netto_project.php',
    'happy_with_my_bike_project' => 'happy_with_my_bike_project.php',
    'seobetter_project' => 'seobetter_project.php',
];

foreach ($projects as $shortcode => $template) {
    add_shortcode($shortcode, function () use ($template) {
        return render_jonasalexander_template($template);
    });
}

function render_jonasalexander_template($filename)
{
    ob_start();

    $filepath = plugin_dir_path(__FILE__) . $filename;
    if (file_exists($filepath)) {
        include $filepath;
    } else {
        echo "Template file not found: " . esc_html($filename);
    }

    return ob_get_clean();
}
