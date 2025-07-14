<?php
$galleryImages = [
    "Dashboard Overview" => "1.png",
    "Project Timeline" => "2.png",
    "Task Creation" => "3.png",
    "Task Assignment" => "4.png"
];
$galleryAlbums = [
    "" => $galleryImages
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

    <img alt="Go@Netto Jumbotron Image" class="project-jumbotron"
        src="/wp-content/uploads/references/gonetto-showcase-jumbotron.png" />

    <div class="project-body">
        <div class="project-container">
            <div class="project-content">
                <header class="project-header">
                    <h1 class="project-title">Go@Netto - REMA 1000 Vigo Webshop Clone</h1>
                    <p class="project-subtitle">A custom WordPress & WooCommerce build replicating the REMA 1000 Vigo shopping experience.</p>
                </header>

                <div class="project-details">
                    <div class="project-description">
                        <h2>About Go@Netto</h2>
                        <p>
                            Go@Netto is a replica of the REMA 1000 Vigo webshop, built to mirror its concept, functionality, and user experience. It features a responsive layout, intuitive navigation, and a smooth shopping experience. This project demonstrates my ability to recreate complex e-commerce platforms with a focus on usability and performance.
                        </p>
                        <p>
                            Vigo is a service where you can order goods from your local REMA 1000 and have them delivered to your door - by other like-minded customers. You can also help other customers with their shopping and earn extra pocket money with the app.
                        </p>
                    </div>

                    <div class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <li>Replica of REMA 1000 Vigo webshop concept and user flows</li>
                            <li>Responsive layout and intuitive navigation</li>
                            <li>Smooth shopping and checkout experience</li>
                            <li>Order management and real-time tracking</li>
                            <li>Custom integrations for payment and shipping providers</li>
                            <li>Accessibility and mobile-first design</li>
                            <li>Automated notifications for customers and delivery helpers</li>
                        </ul>
                    </div>

                    <div class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $images): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <div class="project-gallery">
                                <?php foreach ($images as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <img src="/wp-content/uploads/references/gallery/gonetto-<?= strtolower($albumName); ?>/<?= $image; ?>"
                                            alt="Project Image <?= $image ?>" class="gallery-image"
                                            onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'gonetto')" />
                                        <span></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="technical-approach">
                        <h2>Technical Approach</h2>
                        <p>
                            The Go@Netto project involved reverse-engineering the user flows and interface patterns of the original Vigo platform, then implementing them using WordPress and WooCommerce. Special attention was given to replicating the seamless onboarding, product search, and order management features. The checkout process was customized to closely match the original, including support for multiple delivery options and real-time order tracking.
                        </p>
                        <p>
                            Throughout the build, I prioritized accessibility and mobile-first design, ensuring that all users have a consistent and enjoyable experience. The project also included custom integrations for payment gateways and shipping providers, as well as automated notifications for both customers and delivery helpers. This comprehensive approach highlights my skills in full-stack WordPress development, UI/UX design, and third-party API integration.
                        </p>
                        <div class="tech-stack">
                            <h3>Tech Stack</h3>
                            <ul>
                                <li>CMS: WordPress</li>
                                <li>E-commerce: WooCommerce</li>
                                <li>Styling: SCSS, custom CSS, CSS Grid, Flexbox</li>
                                <li>Custom Fields: Advanced Custom Fields (ACF), custom meta boxes</li>
                                <li>Performance: Asset optimization, caching, lazy loading</li>
                                <li>Notifications: Custom email/SMS integration</li>
                                <li>APIs: REST API for order management and tracking</li>
                                <li>Hosting: Google Cloud Platform</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
