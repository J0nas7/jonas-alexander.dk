<?php
$galleryImagesWeb = [
    "Showcase" => "1.jpg",
    "Frontpage" => "2.jpg",
    "Frontpage - 2" => "3.jpg",
    "Search List" => "4.jpg",
    "Search Map" => "5.jpg",
    "Search Map with Marker" => "6.jpg",
    "Listing Detail" => "7.jpg",
    "Image Rotation" => "8.jpg",
    "Subscribe CTA" => "9.jpg",
    "Send Message to Landlord" => "10.jpg",
    "Chatting with Landlord" => "11.jpg"
];
$galleryImagesApp = [
    "Frontpage" => "1.jpg",
    "Frontpage - 2" => "2.jpg",
    "Frontpage - 3" => "3.jpg",
    "Frontpage - 4" => "4.jpg",
    "App Menu" => "5.jpg",
    "Search for Properties" => "6.jpg",
    "Search List" => "7.jpg",
    "Search Map" => "8.jpg",
    "Search Filter" => "9.jpg",
    "Search Map with Marker" => "10.jpg",
    "Listing Detail" => "11.jpg",
    "Listing Detail - 2" => "12.jpg",
    "Chatting with Landlord" => "13.jpg",
    "Messages Overview" => "14.jpg",
    "Image Rotation" => "15.jpg"
];
$galleryAlbums = [
    "Web" => [
        "Description" => "",
        "Images" => $galleryImagesWeb
    ],
    "App" => [
        "Description" => "",
        "Images" => $galleryImagesApp
    ]
];
$albumsShowCaption = true;

$projectTitle = "CasaNova";
$projectSubtitle = "A modern full-stack real estate listing platform with advanced image management and seamless user experience.";
$jumbotronImageSrc = "/wp-content/uploads/references/casanova-property-listing-showcase-jumbotron.jpg";
$projectDescription = "<p>CasaNova is a full-stack real estate listing platform built with Laravel, Next.js,
                            and SQLite. It allows users to create, edit, and manage property listings with advanced image handling features.

                            The platform supports drag-and-drop image reordering, inline editing, and multi-file uploads.
                            CasaNova demonstrates my ability to build intuitive, user-friendly interfaces backed by solid backend architecture for dynamic content management.</p>";
$keyFeatures = [
    "Property Listing Management: Create, edit, and delete property listings with ease.",
    "Advanced Image Handling: Drag-and-drop image reordering, multi-file uploads, and inline editing.",
    "User-Friendly Interface: Intuitive UI for seamless property management.",
    "Robust Backend: Secure and scalable backend built with Laravel and SQLite/PostgreSQL.",
    "Real-Time Updates: Instant feedback and updates for listing changes."
];
$technicalApproach = [
    "I developed CasaNova with a strong emphasis on delivering a seamless and efficient user experience for real estate listings. I employed a modern tech stack to ensure the platform is robust, scalable, and maintainable.",
    "On the frontend, I utilized Next.js and React.js to build a dynamic and responsive user interface. I employed Redux for state management to ensure smooth and efficient data flow throughout the application. Material-UI, Tailwind and SCSS were used for styling, creating a visually appealing and intuitive user interface that enhances user engagement.",
    "The backend was developed using Laravel, a powerful PHP framework, which provided a solid foundation for handling complex business logic and data processing. I used Eloquent ORM for database interactions, ensuring efficient data handling and retrieval, which is crucial for managing property listings and user data.",
    "For the database, I used SQLite during the development phase for its simplicity and ease of setup. I transitioned to PostgreSQL for production to leverage its robustness and scalability, ensuring that the platform can handle large volumes of data and user interactions seamlessly.",
    "I utilized Laravel migrations to manage the database schema, allowing for version control of the database and seamless updates across different environments. This approach ensured that the database structure remained consistent and up-to-date with the application's evolving requirements. Custom seeders were developed to populate the database with initial data, facilitating a ready-to-use environment for development and testing. These seeders were designed to create realistic datasets, including users, properties, and other relevant entities, which significantly streamlined the development and testing processes.",
    "DevOps practices were integral to my development process. I used Jest and PHPUnit for comprehensive testing to ensure code quality and reliability. Continuous integration and deployment were managed through GitHub Actions, and the application was hosted on Google Cloud for high availability and performance, ensuring that users have a smooth experience with minimal downtime."
];
$techStack = [
    "Frontend: Next.js, React.js, Redux",
    "Styling: Material-UI, Tailwind, SCSS",
    "Backend: PHP, Laravel, Eloquent",
    "Database: SQLite for dev, PostgreSQL for prod",
    "DevOps: Jest, PHPUnit, GitHub Actions, Google Cloud"
];
$demoUrl = "https://casanova.jonas-alexander.dk";
$demoUsername = "admin@casanova.com";
$demoPassword = "admin123";
$githubRepositories = [
    "Laravel Backend" => "https://github.com/J0nas7/CasaNova-backend",
    "Next.js Frontend" => "https://github.com/J0nas7/CasaNova-frontend",
    "React Native App" => "https://github.com/J0nas7/casanova_reactnative_app",
];

require_once __DIR__ . '/project_template.php';
