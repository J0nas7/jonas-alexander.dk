<?php
$galleryImagesNext = [
    "Showcase" => "1.jpg",
    "Project Timeline" => "2.jpg",
    "Task Creation" => "3.jpg",
    "Task Assignment" => "4.jpg",
    "Time Tracking" => "5.jpg",
    "Daily Timesheet" => "6.jpg",
    "Weekly Timesheet" => "7.jpg",
    "Monthly Timesheet" => "8.jpg",
    "Project Calendar" => "9.jpg",
    "Team Collaboration" => "10.jpg",
    "Task Prioritization" => "11.jpg",
    "Task Deadlines" => "12.jpg",
    "Gantt Chart" => "13.jpg",
    "Resource Allocation" => "14.jpg",
    "Progress Tracking" => "15.jpg",
    "Milestone Setting" => "16.jpg",
    "Report Generation" => "17.jpg",
    "Custom Reports" => "18.jpg",
    "Budget Tracking" => "19.jpg",
    "Expense Management" => "20.jpg",
    "Project Budgeting" => "21.jpg",
    "Time Logs" => "22.jpg",
    "Attendance Tracking" => "23.jpg",
    "Lead Management" => "24.jpg",
    "Contact Management" => "25.jpg",
    "Sales Pipeline" => "26.jpg",
    "Customer Segmentation" => "27.jpg",
    "Email Integration" => "28.jpg",
    "Document Management" => "29.jpg",
    "Workflow Automation" => "30.jpg",
    "Analytics Dashboard" => "31.jpg",
    "Customer Support Tickets" => "32.jpg",
    "Mobile CRM Access" => "33.jpg",
    "CRM Customization" => "34.jpg",
    "Data Import/Export" => "35.jpg",
    "User Permissions" => "36.jpg",
    "CRM API Integration" => "37.jpg",
    "Sales Forecasting" => "38.jpg",
    "CRM Mobile App" => "39.jpg",
    "CRM Security Settings" => "40.jpg",
    "Lorem ipsum" => "41.jpg"
];

$galleryImagesBlade = [
    "Dashboard Overview" => "1.jpg",
    "Project Timeline" => "2.jpg",
    "Task Creation" => "3.jpg",
    "Task Assignment" => "4.jpg",
    "Time Tracking" => "5.jpg",
    "Daily Timesheet" => "6.jpg",
    "Weekly Timesheet" => "7.jpg",
    "Monthly Timesheet" => "8.jpg",
    "Project Calendar" => "9.jpg",
    "Team Collaboration" => "10.jpg",
    "Task Prioritization" => "11.jpg",
    "Task Deadlines" => "12.jpg",
    "Gantt Chart" => "13.jpg",
    "Resource Allocation" => "14.jpg",
    "Progress Tracking" => "15.jpg",
    "Milestone Setting" => "16.jpg",
    "Report Generation" => "17.jpg",
    "Custom Reports" => "18.jpg",
    "Budget Tracking" => "19.jpg",
    "Expense Management" => "20.jpg",
    "Project Budgeting" => "21.jpg",
    "Time Logs" => "22.jpg",
    "Attendance Tracking" => "23.jpg"
];

$galleryAlbums = [
    "Nextjs" => [
        "Description" => "Galleries: Logo has been removed because I don't own the solution.<br />This album shows the modernized Next.js frontend.",
        "Images" => $galleryImagesNext
    ],
    "Blade" => [
        "Description" => "Galleries: Logo has been removed because I don't own the solution.<br />This album shows the outdated Laravel Blade frontend.",
        "Images" => $galleryImagesBlade
    ]
];

$albumsShowCaption = false;

$projectTitle = "Base2Sale CRM system";
$projectSubtitle = "Modernization and feature expansion of a legacy Laravel CRM for sales teams.";
$jumbotronImageSrc = "/wp-content/uploads/references/base2sale-crm-showcase-jumbotron.jpg";

$projectDescription = "
    <p>I was tasked with modernizing an old Laravel program, upgrading it from PHP 5 to PHP 8 and expanding it with new features.</p>
    <p>New features included a calendar for key account managers to manage appointments, a dashboard overview with key sales metrics, and a detailed customer view. The customer view provided info, purchase history, and an advanced subview combining a floorplan builder and webshop, supporting complex drag-and-drop for both equipment and products.</p>
    <p>I also decoupled the frontend from Laravel’s Blade templates, building a new reactive frontend in Next.js for a more modern user experience.</p>
";

$keyFeatures = [
    "Upgrade from PHP 5 to PHP 8 and Laravel modernization",
    "Calendar for key account managers to manage appointments",
    "Dashboard with sales metrics: total sales, confirmed orders, growth, returning customers, abandoned purchases, top 10 customers, sales by category/city/customer type, monthly sales",
    "Detailed customer view with info, purchase history, and advanced subview",
    "Floorplan builder and webshop with drag-and-drop for equipment and products",
    "Frontend decoupled from Blade, rebuilt in Next.js for a modern UX"
];

$technicalApproach = [
    "The modernization of the Base2Sale CRM system involved a comprehensive upgrade from PHP 5 to PHP 8, significantly enhancing performance, security, and compatibility with modern web technologies. This upgrade was crucial for leveraging the latest features of the Laravel framework.",
    "I rebuilt the frontend using Next.js, a React-based framework, to create a more dynamic and responsive user interface. This transition enabled faster page loads and interactive elements, utilizing React.js and Redux for efficient state management.",
    "The backend was restructured using Laravel, taking advantage of Eloquent ORM for streamlined data handling. Laravel migrations enabled smooth database updates and schema management.",
    "The CRM used MySQL hosted on One.com for scalable and reliable data storage.",
    "New features integrated into the system included a dashboard with detailed sales metrics, a robust calendar system for account managers, and a complex drag-and-drop floorplan builder integrated into a customer view and webshop.",
    "Testing was handled via Jest and PHPUnit, while CI/CD pipelines were implemented using GitHub Actions. Hosting was managed via Google Cloud for high availability and performance."
];

$techStack = [
    "Frontend: Next.js, React.js, Redux, TypeScript, MUI, SCSS",
    "Backend: PHP, Laravel, Eloquent",
    "Database: MySQL hosted on One.com",
    "DevOps: Jest, PHPUnit, GitHub Actions, Google Cloud"
];

$demoUrl = null;
$demoUsername = null;
$demoPassword = null;

$githubRepositories = []; // Not publicly available

require_once __DIR__ . '/project_template.php';
