<?php
// --- Gallery Images (CasaNova structure) ---
$galleryImagesWeb = [
    "Dashboard Overview" => "1.jpg",
    "Project Timeline" => "2.jpg",
    "Task Creation" => "3.jpg",
    "Task Assignment" => "4.jpg"
];

$galleryAlbums = [
    "" => [
        "Description" => "",
        "Images" => $galleryImagesWeb
    ]
];

// --- Project Meta ---
$albumsShowCaption = false;

$projectTitle = "Go@Netto";
$projectSubtitle = "A custom WordPress & WooCommerce build replicating the REMA 1000 Vigo shopping experience.";
$jumbotronImageSrc = "/wp-content/uploads/references/gonetto-showcase-jumbotron.jpg";
$projectDescription = "
<p>Go@Netto is a replica of the REMA 1000 Vigo webshop, built to mirror its concept, functionality, and user experience. It features a responsive layout, intuitive navigation, and a smooth shopping experience. This project demonstrates my ability to recreate complex e-commerce platforms with a focus on usability and performance.</p>
<p>Vigo is a service where you can order goods from your local REMA 1000 and have them delivered to your door - by other like-minded customers. You can also help other customers with their shopping and earn extra pocket money with the app.</p>
";

$keyFeatures = [
    "Replica of REMA 1000 Vigo webshop concept and user flows",
    "Responsive layout and intuitive navigation",
    "Smooth shopping and checkout experience",
    "Order management and real-time tracking",
    "Custom integrations for payment and shipping providers",
    "Accessibility and mobile-first design",
    "Automated notifications for customers and delivery helpers"
];

$technicalApproach = [
    "The Go@Netto project involved reverse-engineering the user flows and interface patterns of the original Vigo platform, then implementing them using WordPress and WooCommerce. Special attention was given to replicating the seamless onboarding, product search, and order management features. The checkout process was customized to closely match the original, including support for multiple delivery options and real-time order tracking.",
    "Throughout the build, I prioritized accessibility and mobile-first design, ensuring that all users have a consistent and enjoyable experience. The project also included custom integrations for payment gateways and shipping providers, as well as automated notifications for both customers and delivery helpers. This comprehensive approach highlights my skills in full-stack WordPress development, UI/UX design, and third-party API integration."
];

$techStack = [
    "CMS: WordPress",
    "E-commerce: WooCommerce",
    "Styling: SCSS, custom CSS, CSS Grid, Flexbox",
    "Custom Fields: Advanced Custom Fields (ACF), custom meta boxes",
    "Performance: Asset optimization, caching, lazy loading",
    "Notifications: Custom email/SMS integration",
    "APIs: REST API for order management and tracking",
    "Hosting: Google Cloud Platform"
];

$githubRepositories = [];

// --- Include project template (adjust path as needed) ---
require_once __DIR__ . '/project_template.php';
