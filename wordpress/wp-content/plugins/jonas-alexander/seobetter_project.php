<?php
$galleryImages = [
    "Showcase" => "1.jpg",
    "Demo" => "2.jpg"
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

    <img alt="SEObetter Jumbotron Image" class="project-jumbotron"
        src="/wp-content/uploads/references/seobetter-showcase-jumbotron.jpg" />

    <div class="project-body">
        <div class="project-container">
            <div class="project-content">
                <header class="project-header">
                    <h1 class="project-title">SEObetter</h1>
                    <p class="project-subtitle">Website Analytics & SEO Optimization Platform</p>
                </header>

                <div class="project-details">
                    <div class="project-description">
                        <h2>About SEObetter</h2>
                        <p>
                            SEObetter is a SaaS platform inspired by Google Analytics and Hotjar, developed to provide deep insight into how users interact with a website.
                        </p>
                        <p>
                            It tracks visits, unique users, referrals, returning users, bounce rates, and device/browser demographics. It also features interactive heatmaps and conversion funnels.
                        </p>
                        <p>
                            The platform reveals which pages users visit in sequence, where they click, how far they scroll, and whether they convert (e.g. purchase, signup).
                        </p>
                        <p>
                            It helps optimize UX by showing where to place CTA buttons and other key elements. A built-in SEO analyzer offers actionable suggestions to improve website rankings and performance.
                        </p>
                    </div>

                    <div class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <li>Tracks pageviews, unique visits, and referral sources</li>
                            <li>Demographics by country, screen size, browser, and OS</li>
                            <li>Interactive heatmaps for clicks and scroll depth</li>
                            <li>User session tracking and conversion flow analysis</li>
                            <li>Built-in SEO analysis and improvement suggestions</li>
                            <li>Insight into bounce rates and returning visitor behavior</li>
                            <li>Optimization recommendations for CTAs and layout</li>
                        </ul>
                    </div>

                    <div class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $images): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <div class=" project-gallery">
                                <?php foreach ($images as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <img src="/wp-content/uploads/references/gallery/seobetter-<?= strtolower($albumName); ?>/<?= $image; ?>"
                                            alt="Project Image <?= $image ?>" class="gallery-image"
                                            onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'seobetter')" />
                                        <span><?= $caption; ?></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="technical-approach">
                        <h2>Technical Approach</h2>
                        <p>
                            SEObetter was originally created as an exam project and later expanded into a full-scale SaaS application over several years. The project has been rebuilt multiple times as new technical skills were acquired, including object-oriented programming, advanced frontend frameworks, and modern backend tools.
                        </p>
                        <p>
                            The frontend is built using React.js for a dynamic and responsive UI. Heatmaps and session visualizations are generated based on real-time user interaction data. A comprehensive admin dashboard displays aggregated metrics and trends.
                        </p>
                        <p>
                            The backend is developed in Laravel (PHP) and integrates a MySQL database for data storage. APIs deliver structured analytics data, and Laravel's queue system handles data processing efficiently. The SEO analyzer component crawls websites and analyzes content for best-practice optimization tips.
                        </p>
                        <p>
                            The system is designed to scale and has been optimized through repeated iterations. This hands-on project taught valuable lessons in data visualization, application design, and building maintainable code.
                        </p>
                        <div class="tech-stack">
                            <h3>Tech Stack</h3>
                            <ul>
                                <li>Frontend: React.js</li>
                                <li>Backend: Laravel (PHP)</li>
                                <li>Database: MySQL</li>
                                <li>SEO Engine: Custom site crawler & analyzer</li>
                                <li>Other Tools: Git, VS Code, Postman</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
