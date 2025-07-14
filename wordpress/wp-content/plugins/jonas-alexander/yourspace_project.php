<?php
$galleryImages = [
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
    "Attendance Tracking" => "23.jpg",
    "Attendance Tracking2" => "24.jpg",
    "Attendance Tracking3" => "25.jpg",
    "Attendance Tracking4" => "26.jpg",
    "Attendance Tracking5" => "27.jpg"
];

$galleryAlbums = [
    "Images" => [
        "Description" => "",
        "Images" => $galleryImages,
    ],
];

$albumsShowCaption = false;

$projectTitle = "YourSpace";
$projectSubtitle = "A real-time chat platform inspired by Slack and Discord, built with Laravel and React.";
$jumbotronImageSrc = "/wp-content/uploads/references/yourspace-slack-discord-clone-showcase-jumbotron.jpg";

$projectDescription = "
<p>YourSpace is a real-time communication platform inspired by Slack and Discord. I developed a frontend clone that replicates the intuitive design of modern chat apps, paired with a Laravel-powered backend managing a robust MySQL database.</p>
<p>With features like channel-based conversations, direct messaging, and multimedia support, YourSpace showcases my full-stack development skills in creating scalable and interactive real-time applications.</p>
";

$keyFeatures = [
    "Channel-based conversations for organized group discussions",
    "Direct messaging between users",
    "Real-time updates using WebSockets",
    "Multimedia support: share images and files in chat",
    "Modern, intuitive UI inspired by Slack/Discord",
    "Robust backend with Laravel and MySQL",
    "User authentication and role-based permissions",
];

$technicalApproach = [
    "The development of YourSpace was driven by a focus on building a real-time, scalable chat platform with modern, interactive UI/UX elements, while ensuring the application is easy to maintain and scalable for future growth.",
    "The project utilizes a full-stack approach, incorporating both front-end and back-end technologies, as well as powerful tools for real-time communication.",
];

$projectTimeline = "
<p>I worked on YourSpace from August to December 2023. The project began as a personal initiative to showcase my full-stack development skills, but in January 2024, I received a permanent hire and transitioned to a full-time position. As a result, I abandoned the development of YourSpace, and the project remains in an unfinished state.</p>
";

$techStack = [
    "Frontend: Next.js, React.js, Redux, TypeScript, MUI, SCSS",
    "Backend: PHP, Laravel, Eloquent",
    "Database: SQLite for dev, PostgreSQL for prod",
    "DevOps: Jest, PHPUnit, GitHub Actions, Google Cloud",
];

$githubRepositories = [];

require_once __DIR__ . '/project_template.php';
