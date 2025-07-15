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
        $albumsShowCaption = get_field('albumsShowCaption', false, false);
        $projectTitle = get_field('projectTitle', false, false);
        $projectSubtitle = get_field('projectSubtitle', false, false);
        $jumbotronImageSrc = get_field('jumbotronImageSrc', false, false);
        $projectDescription = get_field('projectDescription', false, false);
        $keyFeatures = get_field('keyFeatures', false, false);
        $keyFeatures = explode("////", $keyFeatures);
        $technicalApproach = get_field('technicalApproach', false, false);
        $techStack = get_field('techStack', false, false);
        $techStack = explode("////", $techStack);
        $demoUrl = get_field('demoUrl', false, false);
        $demoUsername = get_field('demoUsername', false, false);
        $demoPassword = get_field('demoPassword', false, false);
        $githubRepositories = get_field('githubRepositories', false, false);

        include $filepath;

        if ($filename !== 'frontpage.php') {
            require_once __DIR__ . '/project_template.php';
        }
    } else {
        echo "Template file not found: " . esc_html($filename);
    }

    return ob_get_clean();
}
