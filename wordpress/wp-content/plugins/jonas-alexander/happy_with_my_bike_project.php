<?php
$galleryImagesWeb = [
    "Dashboard Overview" => "1.jpg",
    "Project Timeline" => "2.jpg",
    "Task Creation" => "3.jpg",
    "Task Assignment" => "4.jpg",
    "Task Assignment2" => "5.jpg",
    "Responsive screen recording" => "6.mp4",
];

$galleryAlbums = [
    "" => [
        "Description" => "",
        "Images" => $galleryImagesWeb
    ]
];

$albumsShowCaption = true;

$projectTitle = "Happy with my bike";
$projectSubtitle = "Responsive WooCommerce webshop for bike enthusiasts.";
$jumbotronImageSrc = "/wp-content/uploads/references/happybike-showcase-jumbotron.jpg";

$projectDescription = "<p>Happy Bikes is a responsive WooCommerce webshop designed for bike enthusiasts. The site features a variety of bike categories, detailed product pages, and a user-friendly navigation system to ensure a seamless shopping experience across all devices.</p>
<p>Customers can easily browse different types of bikes, view comprehensive product information, and enjoy a streamlined checkout process. The project highlights my skills in building modern, accessible, and high-performing e-commerce solutions with WordPress and WooCommerce.</p>";

$keyFeatures = [
    "Responsive WooCommerce webshop for bike enthusiasts",
    "Multiple bike categories and detailed product pages",
    "User-friendly navigation across all devices",
    "Streamlined and accessible checkout process"
];

$technicalApproach = [
    "The Happy with my bike project was built using a custom WordPress theme tailored for WooCommerce integration. I utilized SCSS for modular and maintainable styling, leveraging CSS Grid and Flexbox for responsive layouts. Advanced Custom Fields (ACF) and custom meta boxes were implemented to provide flexible content management for product details and categories.",
    "Performance optimization was achieved through asset minification, caching strategies, and lazy loading of images. The site is hosted on Google Cloud Platform, ensuring scalability and reliability."
];

$techStack = [
    "CMS: WordPress",
    "E-commerce: WooCommerce",
    "Styling: SCSS, custom CSS, CSS Grid, Flexbox",
    "Custom Fields: Advanced Custom Fields (ACF), custom meta boxes",
    "Performance: Asset optimization, caching, lazy loading",
    "Hosting: Google Cloud Platform"
];

$githubRepositories = [];

require_once __DIR__ . '/project_template.php';
