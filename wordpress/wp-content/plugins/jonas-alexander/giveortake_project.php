<?php
$galleryImagesWeb = [
    "Dashboard Overview" => "1.png",
    "Project Timeline" => "2.png",
    "Task Creation" => "3.png",
    "Task Assignment" => "4.png",
    "Time Tracking" => "5.png",
    "Daily Timesheet" => "6.png",
    "Weekly Timesheet" => "7.png",
    "Monthly Timesheet" => "8.png",
    "Project Calendar" => "9.png",
    "Team Collaboration" => "10.png",
    "Task Prioritization" => "11.png",
    "Task Deadlines" => "12.png",
    "Gantt Chart" => "13.png",
    "Resource Allocation" => "14.png",
    "Progress Tracking" => "15.png",
    "Milestone Setting" => "16.png",
    "Report Generation" => "17.png",
    "Custom Reports" => "18.png",
    "Budget Tracking" => "19.png",
    "Expense Management" => "20.png",
    "Project Budgeting" => "21.png",
    "Time Logs" => "22.png",
    "Attendance Tracking" => "23.png",
    "Leave Management" => "24.png",
    "User Roles" => "25.png",
    "Permission Settings" => "26.png",
    "Project Templates" => "27.png",
    "Task Templates" => "28.png",
    "Integration Settings" => "29.png",
    "API Access" => "30.png",
    "User Activity Log" => "31.png",
    "Notifications" => "32.png"
];
$galleryAlbums = [
    "Web" => $galleryImagesWeb
];
?>
<script src="<?= plugin_dir_url(__FILE__) . 'gallery.js'; ?>" type="text/javascript"></script>
<script>
    // Initialize the gallery albums from PHP
    initializeGalleryFromPHP(<?php echo json_encode($galleryAlbums); ?>);
</script>
<div class="project-wrapper">
    <div class="gallery-lightbox hidden">
        <p>Navigate with left/right arrow and close with ESC</p>
        <div class="gallery-image-container">
            <video controls class="hidden">
                <source src="#" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <img alt="Project Image" src="#" />
            <div class="gallery-image-buttons">
                <button class="gallery-button previous" onclick="openPreviousImage()">Previous</button>
                <button class="gallery-button next" onclick="openNextImage()">Next</button>
            </div>
        </div>
        <p class="gallery-image-caption"></p>
        <p>Image nr. <span class="gallery-image-index"></span> out of <span class="gallery-image-total">0</span></p>
    </div>

    <img alt="GiveOrTake Jumbotron Image" class="project-jumbotron"
        src="/wp-content/uploads/references/giveortake-project-time-showcase-jumbotron.png" />

    <div class="project-body">
        <div class="project-container">
            <div class="project-content">
                <header class="project-header">
                    <h1 class="project-title">GiveOrTake</h1>
                    <p class="project-subtitle">Advanced project management and time tracking for teams</p>
                </header>

                <div class="project-details">
                    <div class="project-description">
                        <h2>About GiveOrTake</h2>
                        <p>
                            GiveOrTake is an advanced project management and time tracking solution designed to streamline workflows, enhance team collaboration, and provide real-time insights into project progress.
                        </p>
                        <p>
                            With intuitive task organization, detailed reporting, and seamless time logging, GiveOrTake empowers teams to deliver projects efficiently and on schedule.</p>
                        </p>
                    </div>

                    <div class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <li>Task Management: Organize and prioritize tasks with ease.</li>
                            <li>Time Tracking: Log time spent on tasks and projects accurately.</li>
                            <li>Collaboration Tools: Enhance team collaboration with integrated communication tools.</li>
                            <li>Real-time Reporting: Gain insights with real-time reports and analytics.</li>
                        </ul>
                    </div>

                    <div class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $images): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <div class="project-gallery">
                                <?php foreach ($images as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <img src="/wp-content/uploads/references/gallery/giveortake-<?= strtolower($albumName); ?>/<?= $image; ?>"
                                            alt="Project Image <?= $image ?>" class="gallery-image"
                                            onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'giveortake')" />
                                        <span><?= $caption; ?></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="technical-approach">
                        <h2>Technical Approach</h2>
                        <p>
                            The GiveOrTake platform was developed with a focus on creating a seamless and efficient user experience for project management and time tracking. With a modern tech stack to ensure the application is robust, scalable, and maintainable.
                        </p>
                        <p>
                            On the frontend, I utilized Next.js and TypeScript to build a dynamic and responsive user interface, complemented by Redux and React Context for state management to ensure smooth and efficient data flow throughout the application. Material-UI, Tailwind and SCSS were used for styling to create a visually appealing and intuitive user interface.
                        </p>
                        <p>
                            The backend was developed using Laravel, a powerful PHP framework, which provided a solid foundation for handling complex business logic and data processing. Eloquent ORM was used for database interactions, ensuring efficient data handling and retrieval.
                        </p>
                        <p>
                            For the database, SQLite is used during the development phase for its simplicity and ease of setup, and transitioned to PostgreSQL for production to leverage its robustness and scalability.
                        </p>
                        <p>
                            I utilized Laravel migrations to manage the database schema, allowing for version control of the database and seamless updates across different environments. This approach ensured that the database structure remained consistent and up-to-date with the application's evolving requirements. Custom seeders were developed to populate the database with initial data, facilitating a ready-to-use environment for development and testing. These seeders were designed to create realistic datasets, including users, properties, and other relevant entities, which significantly streamlined the development and testing processes.
                        </p>
                        <p>
                            DevOps practices were integral to the development process. Using Jest and PHPUnit for comprehensive testing to ensure code quality and reliability. Continuous integration and deployment were managed through GitHub Actions, and the application was hosted on Google Cloud for high availability and performance.
                        </p>
                        <div class="tech-stack">
                            <h3>Tech Stack</h3>
                            <ul>
                                <li>Frontend: Next.js, React.js, Redux</li>
                                <li>Styling: Material-UI, Tailwind, SCSS</li>
                                <li>Backend: PHP, Laravel, Eloquent</li>
                                <li>Database: SQLite for dev, PostgreSQL for prod</li>
                                <li>DevOps: Jest, PHPUnit, GitHub Actions, Google Cloud</li>
                            </ul>
                        </div>
                    </div>

                    <div class="code-and-demo">
                        <h2>GitHub repositories & Online Demo</h2>
                        <p>For a live demo, you can visit the <a href="https://giveortake.jonas-alexander.dk" target="_blank">GiveorTake demo site</a>.</p>
                        <p>Login details:</p>
                        <ul>
                            <li><strong>Email:</strong> <code>michael@dundermifflin.com</code></li>
                            <li><strong>Password:</strong> <code>WorldsBestBoss</code></li>
                        </ul>
                        <p>Below are GitHub repositories for the Laravel backend, the Next.js frontend and the React Native app.</p>
                        <ul>
                            <li>
                                <a href="https://github.com/J0nas7/GiveorTake-backend" target="_blank">
                                    <strong>Laravel Backend</strong>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/J0nas7/GiveorTake-frontend" target="_blank">
                                    <strong>Next.js Frontend</strong>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/J0nas7/giveortake_reactnative_app" target="_blank">
                                    <strong>React Native App</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
