<?php
$folderName = strtolower(explode(' ', trim($projectTitle))[0]);
$folderName = str_replace('@', '', $folderName);
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

    <img alt="<?= $projectTitle; ?> Jumbotron Image" class="project-jumbotron"
        src="<?= $jumbotronImageSrc; ?>" />

    <div class="project-body">
        <div class="project-container">
            <div class="project-content">
                <header class="project-header">
                    <h1 class="project-title"><?= $projectTitle; ?></h1>
                    <p class="project-subtitle"><?= $projectSubtitle; ?></p>
                </header>

                <div class="project-details">
                    <div class="project-description">
                        <h2>About <?= $projectTitle; ?></h2>
                        <?= $projectDescription; ?>
                    </div>

                    <div class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <?php foreach ($keyFeatures as $feature): ?>
                                <li><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $album): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <?php if (!empty($album["Description"])): ?>
                                <p style="color: darkgrey;"><?= $album["Description"]; ?></p>
                            <?php endif; ?>
                            <div class="project-gallery">
                                <?php foreach ($album["Images"] as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <?php if (strpos($image, '.mp4') || strpos($image, '.mov') || strlen($image) > 6) : ?>
                                            <img src="https://placehold.co/600x400?text=Video"
                                                alt="Project Video <?= $image ?>" class="gallery-image"
                                                onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', '<?= $folderName ?>')" />
                                        <?php else: ?>
                                            <img src="/wp-content/uploads/references/gallery/<?= $folderName ?>-<?= strtolower($albumName); ?>/<?= $image; ?>"
                                                alt="Project Image <?= $image ?>" class="gallery-image"
                                                onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', '<?= $folderName ?>')" />
                                        <?php endif; ?>
                                        <span><?= ($albumsShowCaption ? $caption : ""); ?></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="technical-approach">
                        <h2>Technical Approach</h2>
                        <?php foreach ($technicalApproach as $paragraph): ?>
                            <p><?= $paragraph; ?></p>
                        <?php endforeach; ?>
                        <div class="tech-stack">
                            <h3>Tech Stack</h3>
                            <ul>
                                <?php foreach ($techStack as $stack): ?>
                                    <li><?= $stack; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <?php if (!empty($demoUrl) || count($githubRepositories)) : ?>
                        <div class="code-and-demo">
                            <h2>GitHub repositories & Online Demo</h2>
                            <?php if (!empty($demoUrl)) : ?>
                                <p>For a live demo, you can visit the <a href="<?= $demoUrl; ?>" target="_blank"><?= $projectTitle; ?> demo site</a>.</p>
                                <p>Login details:</p>
                                <ul>
                                    <li><strong>Email:</strong> <code><?= $demoUsername; ?></code></li>
                                    <li><strong>Password:</strong> <code><?= $demoPassword; ?></code></li>
                                </ul>
                            <?php endif; ?>
                            <?php if (count($githubRepositories)) : ?>
                                <p>Below are GitHub repositories.</p>
                                <ul>
                                    <?php foreach ($githubRepositories as $name => $url): ?>
                                        <li>
                                            <a href="<?= $url; ?>" target="_blank">
                                                <strong><?= $name; ?></strong>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
