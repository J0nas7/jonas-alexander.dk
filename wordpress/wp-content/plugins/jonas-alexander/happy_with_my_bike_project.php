<?php
$galleryImages = [
    "Dashboard Overview" => "1.png",
    "Project Timeline" => "2.jpg",
    "Task Creation" => "3.jpg",
    "Task Assignment" => "4.jpg",
    "Task Assignment2" => "5.jpg",
    "Responsive screen recording" => "6.mp4",
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
        src="/wp-content/uploads/references/happybike-showcase-jumbotron.png" />

    <div class="project-body">
        <div class="project-container">
            <div class="project-content">
                <header class="project-header">
                    <h1 class="project-title">Happy with my bike - Responsive WC webshop</h1>
                    <p class="project-subtitle"></p>
                </header>

                <div class="project-details">
                    <div class="project-description">
                        <h2>About Happy Bikes</h2>
                        <p>
                            Happy Bikes is a responsive WooCommerce webshop designed for bike enthusiasts. The site features a variety of bike categories, detailed product pages, and a user-friendly navigation system to ensure a seamless shopping experience across all devices.
                        </p>
                        <p>
                            Customers can easily browse different types of bikes, view comprehensive product information, and enjoy a streamlined checkout process. The project highlights my skills in building modern, accessible, and high-performing e-commerce solutions with WordPress and WooCommerce.
                        </p>
                    </div>

                    <div class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <li>Responsive WooCommerce webshop for bike enthusiasts</li>
                            <li>Multiple bike categories and detailed product pages</li>
                            <li>User-friendly navigation across all devices</li>
                            <li>Streamlined and accessible checkout process</li>
                        </ul>
                    </div>

                    <div class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $images): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <div class=" project-gallery">
                                <?php foreach ($images as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <?php if (strpos($image, '.mp4')) : ?>
                                            <img src="https://placehold.co/600x400?text=Video"
                                                alt="Project Video <?= $image ?>" class="gallery-image"
                                                onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'happybike')" />
                                        <?php else: ?>
                                            <img src="/wp-content/uploads/references/gallery/happybike-<?= strtolower($albumName); ?>/<?= $image; ?>"
                                                alt="Project Image <?= $image ?>" class="gallery-image"
                                                onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'happybike')" />
                                        <?php endif; ?>
                                        <span></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="technical-approach">
                        <h2>Technical Approach</h2>
                        <p>
                            The Happy with my bike project was built using a custom WordPress theme tailored for WooCommerce integration. I utilized SCSS for modular and maintainable styling, leveraging CSS Grid and Flexbox for responsive layouts. Advanced Custom Fields (ACF) and custom meta boxes were implemented to provide flexible content management for product details and categories.
                        </p>
                        <p>
                            Performance optimization was achieved through asset minification, caching strategies, and lazy loading of images. The site is hosted on Google Cloud Platform, ensuring scalability and reliability.
                        </p>
                        <div class="tech-stack">
                            <h3>Tech Stack</h3>
                            <ul>
                                <li>CMS: WordPress</li>
                                <li>E-commerce: WooCommerce</li>
                                <li>Styling: SCSS, custom CSS, CSS Grid, Flexbox</li>
                                <li>Custom Fields: Advanced Custom Fields (ACF), custom meta boxes</li>
                                <li>Performance: Asset optimization, caching, lazy loading</li>
                                <li>Hosting: Google Cloud Platform</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
