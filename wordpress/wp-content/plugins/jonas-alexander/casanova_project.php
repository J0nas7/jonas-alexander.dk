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
    "Web" => $galleryImagesWeb,
    "App" => $galleryImagesApp
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

    <img alt="CasaNova Jumbotron Image" class="project-jumbotron"
        src="/wp-content/uploads/references/casanova-property-listing-showcase-jumbotron.jpg" />

    <div class="project-body">
        <div class="project-container">
            <div class="project-content">
                <header class="project-header">
                    <h1 class="project-title">CasaNova</h1>
                    <p class="project-subtitle">A modern full-stack real estate listing platform with advanced image management and seamless user experience.</p>
                </header>

                <div class="project-details">
                    <div class="project-description">
                        <h2>About CasaNova</h2>
                        <p>CasaNova is a full-stack real estate listing platform built with Laravel, Next.js,
                            and SQLite. It allows users to create, edit, and manage property listings with advanced image handling features.

                            The platform supports drag-and-drop image reordering, inline editing, and multi-file uploads.
                            CasaNova demonstrates my ability to build intuitive, user-friendly interfaces backed by solid backend architecture for dynamic content management.</p>
                    </div>

                    <div class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <li>Property Listing Management: Create, edit, and delete property listings with ease.</li>
                            <li>Advanced Image Handling: Drag-and-drop image reordering, multi-file uploads, and inline editing.</li>
                            <li>User-Friendly Interface: Intuitive UI for seamless property management.</li>
                            <li>Robust Backend: Secure and scalable backend built with Laravel and SQLite/PostgreSQL.</li>
                            <li>Real-Time Updates: Instant feedback and updates for listing changes.</li>
                        </ul>
                    </div>

                    <div class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $images): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <div class="project-gallery">
                                <?php foreach ($images as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <img src="/wp-content/uploads/references/gallery/casanova-<?= strtolower($albumName); ?>/<?= $image; ?>"
                                            alt="Project Image <?= $image ?>" class="gallery-image"
                                            onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'casanova')" />
                                        <span><?= $caption; ?></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="technical-approach">
                        <h2>Technical Approach</h2>
                        <p>
                            I developed CasaNova with a strong emphasis on delivering a seamless and efficient user experience for real estate listings. I employed a modern tech stack to ensure the platform is robust, scalable, and maintainable.
                        </p>
                        <p>
                            On the frontend, I utilized Next.js and React.js to build a dynamic and responsive user interface. I employed Redux for state management to ensure smooth and efficient data flow throughout the application. Material-UI, Tailwind and SCSS were used for styling, creating a visually appealing and intuitive user interface that enhances user engagement.
                        </p>
                        <p>
                            The backend was developed using Laravel, a powerful PHP framework, which provided a solid foundation for handling complex business logic and data processing. I used Eloquent ORM for database interactions, ensuring efficient data handling and retrieval, which is crucial for managing property listings and user data.
                        </p>
                        <p>
                            For the database, I used SQLite during the development phase for its simplicity and ease of setup. I transitioned to PostgreSQL for production to leverage its robustness and scalability, ensuring that the platform can handle large volumes of data and user interactions seamlessly.
                        </p>
                        <p>
                            I utilized Laravel migrations to manage the database schema, allowing for version control of the database and seamless updates across different environments. This approach ensured that the database structure remained consistent and up-to-date with the application's evolving requirements. Custom seeders were developed to populate the database with initial data, facilitating a ready-to-use environment for development and testing. These seeders were designed to create realistic datasets, including users, properties, and other relevant entities, which significantly streamlined the development and testing processes.
                        </p>
                        <p>
                            DevOps practices were integral to my development process. I used Jest and PHPUnit for comprehensive testing to ensure code quality and reliability. Continuous integration and deployment were managed through GitHub Actions, and the application was hosted on Google Cloud for high availability and performance, ensuring that users have a smooth experience with minimal downtime.
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
                        <p>For a live demo, you can visit the <a href="https://casanova.jonas-alexander.dk" target="_blank">CasaNova demo site</a>.</p>
                        <p>Login details:</p>
                        <ul>
                            <li><strong>Email:</strong> <code>admin@casanova.com</code></li>
                            <li><strong>Password:</strong> <code>admin123</code></li>
                        </ul>
                        <p>Below are GitHub repositories for the Laravel backend, the Next.js frontend and the React Native app.</p>
                        <ul>
                            <li>
                                <a href="https://github.com/J0nas7/CasaNova-backend" target="_blank">
                                    <strong>Laravel Backend</strong>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/J0nas7/CasaNova-frontend" target="_blank">
                                    <strong>Next.js Frontend</strong>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/J0nas7/casanova_reactnative_app" target="_blank">
                                    <strong>React Native App</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
