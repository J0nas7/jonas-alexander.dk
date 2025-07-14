<?php
$projectTitle = "GiveOrTake";
$projectSubtitle = "Advanced project management and time tracking for teams";
$jumbotronImageSrc = "/wp-content/uploads/references/giveortake-project-time-showcase-jumbotron.jpg";

$projectDescription = "<p>GiveOrTake is an advanced project management and time tracking solution designed to streamline workflows, enhance team collaboration, and provide real-time insights into project progress.</p>
<p>With intuitive task organization, detailed reporting, and seamless time logging, GiveOrTake empowers teams to deliver projects efficiently and on schedule.</p>";

$keyFeatures = [
    "Task Management: Organize and prioritize tasks with ease.",
    "Time Tracking: Log time spent on tasks and projects accurately.",
    "Collaboration Tools: Enhance team collaboration with integrated communication tools.",
    "Real-time Reporting: Gain insights with real-time reports and analytics."
];

$technicalApproach = [
    "The GiveOrTake platform was developed with a focus on creating a seamless and efficient user experience for project management and time tracking. With a modern tech stack to ensure the application is robust, scalable, and maintainable.",
    "On the frontend, I utilized Next.js and TypeScript to build a dynamic and responsive user interface, complemented by Redux and React Context for state management to ensure smooth and efficient data flow throughout the application. Material-UI, Tailwind and SCSS were used for styling to create a visually appealing and intuitive user interface.",
    "The backend was developed using Laravel, a powerful PHP framework, which provided a solid foundation for handling complex business logic and data processing. Eloquent ORM was used for database interactions, ensuring efficient data handling and retrieval.",
    "For the database, SQLite is used during the development phase for its simplicity and ease of setup, and transitioned to PostgreSQL for production to leverage its robustness and scalability.",
    "I utilized Laravel migrations to manage the database schema, allowing for version control of the database and seamless updates across different environments. This approach ensured that the database structure remained consistent and up-to-date with the application's evolving requirements. Custom seeders were developed to populate the database with initial data, facilitating a ready-to-use environment for development and testing.",
    "DevOps practices were integral to the development process. Using Jest and PHPUnit for comprehensive testing to ensure code quality and reliability. Continuous integration and deployment were managed through GitHub Actions, and the application was hosted on Google Cloud for high availability and performance."
];

$techStack = [
    "Frontend: Next.js, React.js, Redux",
    "Styling: Material-UI, Tailwind, SCSS",
    "Backend: PHP, Laravel, Eloquent",
    "Database: SQLite for dev, PostgreSQL for prod",
    "DevOps: Jest, PHPUnit, GitHub Actions, Google Cloud"
];

$demoUrl = "https://giveortake.jonas-alexander.dk";
$demoUsername = "michael@dundermifflin.com";
$demoPassword = "WorldsBestBoss";

$githubRepositories = [
    "Laravel Backend" => "https://github.com/J0nas7/GiveorTake-backend",
    "Next.js Frontend" => "https://github.com/J0nas7/GiveorTake-frontend",
    "React Native App" => "https://github.com/J0nas7/giveortake_reactnative_app"
];

$galleryImagesWeb = [
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
    "Leave Management" => "24.jpg",
    "User Roles" => "25.jpg",
    "Permission Settings" => "26.jpg",
    "Project Templates" => "27.jpg",
    "Task Templates" => "28.jpg",
    "Integration Settings" => "29.jpg",
    "API Access" => "30.jpg",
    "User Activity Log" => "31.jpg",
    "Notifications" => "32.jpg"
];

$galleryAlbums = [
    "Web" => [
        "Description" => "",
        "Images" => $galleryImagesWeb
    ]
];

$albumsShowCaption = false;

require_once __DIR__ . '/project_template.php';
