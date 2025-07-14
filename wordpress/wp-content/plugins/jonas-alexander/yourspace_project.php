<?php
$galleryImages = [
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
    "Attendance Tracking2" => "24.png",
    "Attendance Tracking3" => "25.png",
    "Attendance Tracking4" => "26.png",
    "Attendance Tracking5" => "27.png"
];
$galleryAlbums = [
    "Images" => $galleryImages
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

    <img alt="YourSpace Jumbotron Image" class="project-jumbotron"
        src="/wp-content/uploads/references/yourspace-slack-discord-clone-showcase-jumbotron.jpg" />

    <div class="project-body">
        <div class="project-container">
            <div class="project-content">
                <header class="project-header">
                    <h1 class="project-title">YourSpace</h1>
                    <p class="project-subtitle">A real-time chat platform inspired by Slack and Discord, built with Laravel and React.</p>
                </header>

                <div class="project-details">
                    <div class="project-description">
                        <h2>About YourSpace</h2>
                        <p>
                            YourSpace is a real-time communication platform inspired by Slack and Discord.
                            I developed a frontend clone that replicates the intuitive design of modern chat apps,
                            paired with a Laravel-powered backend managing a robust MySQL database.
                        </p>
                        <p>
                            With features like channel-based conversations, direct messaging, and multimedia support,
                            YourSpace showcases my full-stack development skills in creating scalable and interactive real-time applications.
                        </p>
                    </div>

                    <div class="project-timeline">
                        <h2>Project Timeline</h2>
                        <p>
                            I worked on YourSpace from August to December 2023. The project began as a personal initiative
                            to showcase my full-stack development skills, but in January 2024, I received a permanent hire and
                            transitioned to a full-time position. As a result, I abandoned the development of YourSpace,
                            and the project remains in an unfinished state.
                        </p>
                    </div>

                    <div class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <li>Channel-based conversations for organized group discussions</li>
                            <li>Direct messaging between users</li>
                            <li>Real-time updates using WebSockets</li>
                            <li>Multimedia support: share images and files in chat</li>
                            <li>Modern, intuitive UI inspired by Slack/Discord</li>
                            <li>Robust backend with Laravel and MySQL</li>
                            <li>User authentication and role-based permissions</li>
                        </ul>
                    </div>

                    <div class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $images): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <div class="project-gallery">
                                <?php foreach ($images as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <img src="/wp-content/uploads/references/gallery/yourspace-<?= strtolower($albumName); ?>/<?= $image; ?>"
                                            alt="Project Image <?= $image ?>" class="gallery-image"
                                            onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'yourspace')" />
                                        <span></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="technical-approach">
                        <h2>Technical Approach</h2>
                        <p>
                            The development of YourSpace was driven by a focus on building a real-time, scalable chat platform
                            with modern, interactive UI/UX elements, while ensuring the application is easy to maintain and
                            scalable for future growth. The project utilizes a full-stack approach, incorporating both front-end
                            and back-end technologies, as well as powerful tools for real-time communication.
                        </p>
                        <div class="tech-stack">
                            <h3>Tech Stack</h3>
                            <ul>
                                <li>Frontend: Next.js, React.js, Redux, TypeScript, MUI, SCSS</li>
                                <li>Backend: PHP, Laravel, Eloquent</li>
                                <li>Database: SQLite for dev, PostgreSQL for prod</li>
                                <li>DevOps: Jest, PHPUnit, GitHub Actions, Google Cloud</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
