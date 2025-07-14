<?php
$projectTitle = "Allingbjerggaard";
$projectSubtitle = "Webshop & Farm Shop – Handmade Gifts and Pet Supplies in Skibby";
$jumbotronImageSrc = "/wp-content/uploads/references/allingbjerggaard-showcase-jumbotron.jpg";
$projectDescription = "<p>I developed the website for Allingbjerggaard, a charming farm shop located in Skibby. The shop offers a selection of handmade decorations and hostess gifts, available from their cozy roadside stall.</p>
<p>In addition, the webshop features a range of pet food and accessories for animals—including dogs, cats, and rodents—making it easy for customers to find quality products for their pets.</p>
<p>The site is built on WooCommerce and designed with a focus on usability and aesthetics, ensuring visitors enjoy a seamless and pleasant experience while exploring Allingbjerggaard's products and services.</p>";

$keyFeatures = [
    "WooCommerce-powered webshop for easy product management and sales",
    "Responsive design for seamless browsing on all devices",
    "Product categories for handmade gifts and pet supplies",
    "Simple, user-friendly navigation and checkout process",
    "Custom branding and visual design tailored to Allingbjerggaard",
    "Integration of roadside stall information and opening hours",
    "Optimized for performance and accessibility"
];

$technicalApproach = [
    "The Allingbjerggaard.dk website was built as a custom WordPress theme with WooCommerce integration, focusing on performance, accessibility, and maintainability.",
    "I implemented a modular SCSS architecture for styling, custom PHP templates for product and category pages, and leveraged Advanced Custom Fields (ACF) for flexible content management.",
    "The checkout flow and navigation were optimized for mobile and desktop users, and all assets were optimized for fast load times.",
    "SEO best practices and accessibility standards (WCAG) were followed throughout the build.",
    "For shipping, I integrated Shipmondo with WooCommerce to automate shipping label creation and provide customers with real-time tracking. This integration streamlines order fulfillment and enhances the overall shopping experience."
];

$techStack = [
    "CMS: WordPress",
    "E-commerce: WooCommerce",
    "Shipping Integration: Shipmondo",
    "Styling: SCSS, custom CSS",
    "Custom Fields: Advanced Custom Fields (ACF)",
    "Performance: Asset optimization, caching"
];

$galleryImages = [
    "Dashboard Overview" => "1.jpg",
    "Project Timeline" => "2.jpg",
    "Task Creation" => "3.jpg",
    "Task Assignment" => "4.jpg",
    "Time Tracking" => "5.jpg",
    "Daily Timesheet" => "6.jpg",
    "Weekly Timesheet" => "7.jpg",
    "Monthly Timesheet" => "8.jpg",
    "Video" => "9.mp4",
];

$galleryAlbums = [
    "" => [
        "Description" => "",
        "Images" => $galleryImages
    ]
];

$albumsShowCaption = false;

// Optional fields (set to null if not applicable)
$demoUrl = null;
$demoUsername = null;
$demoPassword = null;
$githubRepositories = [];

require_once __DIR__ . '/project_template.php';
