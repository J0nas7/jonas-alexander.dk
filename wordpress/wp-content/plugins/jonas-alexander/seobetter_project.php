<?php
$galleryImages = [
    "Showcase" => "1.jpg",
    "Demo" => "2.jpg"
];

$galleryAlbums = [
    "" => [
        "Description" => "",
        "Images" => $galleryImages,
    ],
];

$albumsShowCaption = true;

$projectTitle = "SEObetter";
$projectSubtitle = "Website Analytics & SEO Optimization Platform";
$jumbotronImageSrc = "/wp-content/uploads/references/seobetter-showcase-jumbotron.jpg";

$projectDescription = "
<p>SEObetter is a SaaS platform inspired by Google Analytics and Hotjar, developed to provide deep insight into how users interact with a website.</p>
<p>It tracks visits, unique users, referrals, returning users, bounce rates, and device/browser demographics. It also features interactive heatmaps and conversion funnels.</p>
<p>The platform reveals which pages users visit in sequence, where they click, how far they scroll, and whether they convert (e.g. purchase, signup).</p>
<p>It helps optimize UX by showing where to place CTA buttons and other key elements. A built-in SEO analyzer offers actionable suggestions to improve website rankings and performance.</p>
";

$keyFeatures = [
    "Tracks pageviews, unique visits, and referral sources",
    "Demographics by country, screen size, browser, and OS",
    "Interactive heatmaps for clicks and scroll depth",
    "User session tracking and conversion flow analysis",
    "Built-in SEO analysis and improvement suggestions",
    "Insight into bounce rates and returning visitor behavior",
    "Optimization recommendations for CTAs and layout",
];

$technicalApproach = [
    "SEObetter was originally created as an exam project and later expanded into a full-scale SaaS application over several years. The project has been rebuilt multiple times as new technical skills were acquired, including object-oriented programming, advanced frontend frameworks, and modern backend tools.",
    "The frontend is built using React.js for a dynamic and responsive UI. Heatmaps and session visualizations are generated based on real-time user interaction data. A comprehensive admin dashboard displays aggregated metrics and trends.",
    "The backend is developed in Laravel (PHP) and integrates a MySQL database for data storage. APIs deliver structured analytics data, and Laravel's queue system handles data processing efficiently. The SEO analyzer component crawls websites and analyzes content for best-practice optimization tips.",
    "The system is designed to scale and has been optimized through repeated iterations. This hands-on project taught valuable lessons in data visualization, application design, and building maintainable code.",
];

$techStack = [
    "Frontend: React.js",
    "Backend: Laravel (PHP)",
    "Database: MySQL",
    "SEO Engine: Custom site crawler & analyzer",
    "Other Tools: Git, VS Code, Postman",
];

$githubRepositories = [];

require_once __DIR__ . '/project_template.php';
