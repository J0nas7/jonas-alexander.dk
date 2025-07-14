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
    "Video" => "9.mp4",
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

    <img alt="Allingbjerggaard Jumbotron Image" class="project-jumbotron"
        src="/wp-content/uploads/references/allingbjerggaard-showcase-jumbotron.jpg" />

    <div class="project-body">
        <div class="project-container">
            <div class="project-content">
                <header class="project-header">
                    <h1 class="project-title">Allingbjerggaard.dk</h1>
                    <p class="project-subtitle">Webshop & Farm Shop - Handmade Gifts and Pet Supplies in Skibby</p>
                </header>

                <div class="project-details">
                    <div class="project-description">
                        <h2>About Allingbjerggaard.dk</h2>
                        <p>
                            I developed the website for Allingbjerggaard, a charming farm shop located in Skibby. The shop offers a selection of handmade decorations and hostess gifts, available from their cozy roadside stall.
                        </p>
                        <p>
                            In addition, the webshop features a range of pet food and accessories for animals—including dogs, cats, and rodents—making it easy for customers to find quality products for their pets.
                        </p>
                        <p>
                            The site is built on WooCommerce and designed with a focus on usability and aesthetics, ensuring visitors enjoy a seamless and pleasant experience while exploring Allingbjerggaard's products and services.
                        </p>
                    </div>

                    <div class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <li>WooCommerce-powered webshop for easy product management and sales</li>
                            <li>Responsive design for seamless browsing on all devices</li>
                            <li>Product categories for handmade gifts and pet supplies</li>
                            <li>Simple, user-friendly navigation and checkout process</li>
                            <li>Custom branding and visual design tailored to Allingbjerggaard</li>
                            <li>Integration of roadside stall information and opening hours</li>
                            <li>Optimized for performance and accessibility</li>
                        </ul>
                    </div>

                    <div class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $images): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <div class="project-gallery">
                                <?php foreach ($images as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <?php if (strpos($image, '.mp4')) : ?>
                                            <img src="https://placehold.co/600x400?text=Video"
                                                alt="Project Video <?= $image ?>" class="gallery-image"
                                                onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'allingbjerggaard')" />
                                        <?php else: ?>
                                            <img src="/wp-content/uploads/references/gallery/allingbjerggaard-<?= strtolower($albumName); ?>/<?= $image; ?>"
                                                alt="Project Image <?= $image ?>" class="gallery-image"
                                                onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'allingbjerggaard')" />
                                        <?php endif; ?>
                                        <span></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="technical-approach">
                        <h2>Technical Approach</h2>
                        <p>The Allingbjerggaard.dk website was built as a custom WordPress theme with WooCommerce integration, focusing on performance, accessibility, and maintainability. I implemented a modular SCSS architecture for styling, custom PHP templates for product and category pages, and leveraged Advanced Custom Fields (ACF) for flexible content management. The checkout flow and navigation were optimized for mobile and desktop users, and all assets were optimized for fast load times. SEO best practices and accessibility standards (WCAG) were followed throughout the build.</p>
                        <p>For shipping, I integrated Shipmondo with WooCommerce to automate shipping label creation and provide customers with real-time tracking. This integration streamlines order fulfillment and enhances the overall shopping experience.</p>
                        <div class="tech-stack">
                            <h3>Tech Stack</h3>
                            <ul>
                                <li>CMS: WordPress</li>
                                <li>E-commerce: WooCommerce</li>
                                <li>Shipping Integration: Shipmondo</li>
                                <li>Styling: SCSS, custom CSS</li>
                                <li>Custom Fields: Advanced Custom Fields (ACF)</li>
                                <li>Performance: Asset optimization, caching</li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
