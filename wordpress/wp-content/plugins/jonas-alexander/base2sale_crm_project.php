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
    "Nextjs" => $galleryImagesNext,
    "Blade" => $galleryImagesBlade
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

    <img alt="Base2Sale CRM system Jumbotron Image" class="project-jumbotron"
        src="/wp-content/uploads/references/base2sale-crm-showcase-jumbotron.jpg" />

    <div class="project-body">
        <div class="project-container">
            <div class="project-content">
                <header class="project-header">
                    <h1 class="project-title">Base2Sale CRM system</h1>
                    <p class="project-subtitle">Modernization and feature expansion of a legacy Laravel CRM for sales teams</p>
                </header>

                <div class="project-details">
                    <div class="project-description">
                        <h2>About Base2Sale CRM system</h2>
                        <p>
                            I was tasked with modernizing an old Laravel program, upgrading it from PHP 5 to PHP 8 and expanding it with new features.
                        </p>
                        <p>
                            New features included a calendar for key account managers to manage appointments, a dashboard overview with key sales metrics, and a detailed customer view. The customer view provided info, purchase history, and an advanced subview combining a floorplan builder and webshop, supporting complex drag-and-drop for both equipment and products.
                        </p>
                        <p>
                            I also decoupled the frontend from Laravel’s Blade templates, building a new reactive frontend in Next.js for a more modern user experience.
                        </p>
                    </div>

                    <div class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <li>Upgrade from PHP 5 to PHP 8 and Laravel modernization</li>
                            <li>Calendar for key account managers to manage appointments</li>
                            <li>Dashboard with sales metrics: total sales, confirmed orders, growth, returning customers, abandoned purchases, top 10 customers, sales by category/city/customer type, monthly sales</li>
                            <li>Detailed customer view with info, purchase history, and advanced subview</li>
                            <li>Floorplan builder and webshop with drag-and-drop for equipment and products</li>
                            <li>Frontend decoupled from Blade, rebuilt in Next.js for a modern UX</li>
                        </ul>
                    </div>

                    <div class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $images): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <p style="color: darkgrey;">
                                Galleries: Logo has been removed because I don't own the solution.<br />
                                <?php
                                if ($albumName === "Nextjs") {
                                    echo "This album shows the modernized Next.js frontend.";
                                } elseif ($albumName === "Blade") {
                                    echo "This album shows the outdated Laravel Blade frontend.";
                                }
                                ?>
                            </p>
                            <div class="project-gallery">
                                <?php foreach ($images as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <img src="/wp-content/uploads/references/gallery/base2sale-<?= strtolower($albumName); ?>/<?= $image; ?>"
                                            alt="Project Image <?= $image ?>" class="gallery-image"
                                            onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'base2sale')" />
                                        <span></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="technical-approach">
                        <h2>Technical Approach</h2>
                        <p>
                            The modernization of the Base2Sale CRM system involved a comprehensive upgrade from PHP 5 to PHP 8, significantly enhancing performance, security, and compatibility with modern web technologies. This upgrade was crucial for leveraging the latest features of the Laravel framework, ensuring the system could handle increased loads and provide a more robust backend infrastructure.
                        </p>
                        <p>
                            A key aspect of the modernization was decoupling the frontend from Laravel's Blade templates. I rebuilt the frontend using Next.js, a React-based framework, to create a more dynamic and responsive user interface. This transition allowed for improved user experiences through faster page loads and more interactive elements, utilizing React.js and Redux for efficient state management.
                        </p>
                        <p>
                            The backend was restructured using Laravel, taking advantage of its powerful features like Eloquent ORM for database interactions, which streamlined data handling and improved system performance. The use of Laravel migrations facilitated seamless database updates and schema management, ensuring consistency across different environments.
                        </p>
                        <p>
                            For the database, MySQL hosted on One.com was used, providing a reliable and scalable solution to support the CRM's data-intensive operations. This setup ensured that the system could efficiently manage large volumes of data and user interactions.
                        </p>
                        <p>
                            New features were integrated into the CRM, including a more organized and easy to use calendar system for key account managers to manage appointments efficiently. A detailed dashboard was developed to provide an overview of key sales metrics, such as total sales, confirmed orders, sales growth, returning customers, abandoned purchases, top 10 customers, sales by category/city/customer type, monthly sales, and customer insights, enabling better decision-making and strategic planning. Additionally, a detailed customer view was implemented, offering information, purchase history, and an advanced subview combining a floorplan builder and webshop with complex drag-and-drop functionalities for both equipment and products.
                        </p>
                        <p>
                            DevOps practices were integral to the project, with Jest and PHPUnit used for thorough testing to ensure code quality and system reliability. Continuous integration and deployment pipelines were managed through GitHub Actions, facilitating automated testing and deployment processes. The application was hosted on Google Cloud, ensuring high availability and performance.
                        </p>
                        <div class="tech-stack">
                            <h3>Tech Stack</h3>
                            <ul>
                                <li>Frontend: Next.js, React.js, Redux, TypeScript, MUI, SCSS</li>
                                <li>Backend: PHP, Laravel, Eloquent</li>
                                <li>Database: MySQL hosted on One.com</li>
                                <li>DevOps: Jest, PHPUnit, GitHub Actions, Google Cloud</li>
                            </ul>
                        </div>
                    </div>

                    <div class="code-and-demo">
                        <h2>GitHub repositories & Online Demo</h2>
                        <p>Not available, since I don't own the solution.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
