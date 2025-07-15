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
        <div class="gallery-close-button">
            <button onclick="closeLightBox()">&times;</button>
        </div>
        <div class="gallery-image-container">
            <video controls class="hidden">
                <source src="#" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <img decoding="async" loading="lazy"
                alt="Project Image"
                src="#" />
            <div class="gallery-image-buttons">
                <button class="gallery-button previous" onclick="openPreviousImage()">Previous</button>
                <button class="gallery-button next" onclick="openNextImage()">Next</button>
            </div>
        </div>
        <p class="gallery-image-caption"></p>
        <p>Image nr. <span class="gallery-image-index"></span> out of <span class="gallery-image-total">0</span></p>
    </div>

    <img decoding="async" loading="lazy" class="project-jumbotron"
        alt="<?= $projectTitle; ?> Jumbotron Image"
        src="<?= $jumbotronImageSrc; ?>" />

    <main class="project-body">
        <div class="project-container">
            <article class="project-content">
                <header class="project-header">
                    <h1 class="project-title"><?= $projectTitle; ?></h1>
                    <p class="project-subtitle"><?= $projectSubtitle; ?></p>
                </header>

                <div class="project-details">
                    <section class="project-description">
                        <h2>About <?= $projectTitle; ?></h2>
                        <?= $projectDescription; ?>
                    </section>

                    <section class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <?php foreach ($keyFeatures as $feature): ?>
                                <li><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </section>

                    <section class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $album): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <?php if (!empty($album["Description"])): ?>
                                <p style="color: darkgrey;"><?= $album["Description"]; ?></p>
                            <?php endif; ?>
                            <div class="project-gallery">
                                <?php foreach ($album["Images"] as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <?php if (strpos($image, '.mp4') || strpos($image, '.mov') || strlen($image) > 6) : ?>
                                            <?php if (strlen($image) > 6) : ?>
                                                <a href="https://drive.google.com/file/d/<?= $image; ?>/view" target="_blank">
                                                    <img decoding="async" loading="lazy" class="gallery-image"
                                                        alt="Project Video <?= $image ?>"
                                                        src="https://placehold.co/600x400?text=Video" />
                                                </a>
                                            <?php else: ?>
                                                <button onclick="
                                                    openLightBox('<?= $image ?>', '<?= $albumName ?>', '<?= $folderName ?>');
                                                    document.querySelector('.gallery-button.next').focus();
                                                ">
                                                    <img decoding="async" loading="lazy" class="gallery-image"
                                                        alt="Project Video <?= $image ?>"
                                                        src="https://placehold.co/600x400?text=Video" />
                                                </button>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <button onclick="
                                                openLightBox('<?= $image ?>', '<?= $albumName ?>', '<?= $folderName ?>');
                                                document.querySelector('.gallery-button.next').focus();
                                            ">
                                                <img decoding="async" loading="lazy"
                                                    alt="Project Image <?= $image ?>" class="gallery-image"
                                                    src="/wp-content/uploads/references/gallery/<?= $folderName ?>-<?= strtolower($albumName); ?>/<?= $image; ?>" />
                                            </button>
                                        <?php endif; ?>
                                        <span><?= ($albumsShowCaption ? $caption : ""); ?></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </section>

                    <section class="technical-approach">
                        <h2>Technical Approach</h2>
                        <?= $technicalApproach ?>
                        <div class="tech-stack">
                            <h3>Tech Stack</h3>
                            <ul>
                                <?php foreach ($techStack as $stack): ?>
                                    <li><?= $stack; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </section>

                    <?php if (!empty($demoUrl) || count($githubRepositories)) : ?>
                        <section class="code-and-demo">
                            <h2>GitHub repositories & Online Demo</h2>
                            <?php if (!empty($demoUrl)) : ?>
                                <p>For a live demo, you can <a href="<?= $demoUrl; ?>" target="_blank" aria-label="Visit the <?= $projectTitle; ?> demo site">Visit the <?= $projectTitle; ?> demo site</a>.</p>
                                <p>Login details:</p>
                                <ul>
                                    <li><strong>Email:</strong> <code><?= $demoUsername; ?></code></li>
                                    <li><strong>Password:</strong> <code><?= $demoPassword; ?></code></li>
                                </ul>
                            <?php endif; ?>
                            <?php if (count($githubRepositories)) : ?>
                                <p>Below are GitHub repositories.</p>
                                <ul>
                                    <?php foreach ($githubRepositories as $id => $value): ?>
                                        <li>
                                            <a href="<?= $value; ?>" target="_blank">
                                                <strong><?= substr($value, strrpos($value, '/') + 1); ?></strong>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </section>
                    <?php endif; ?>
                </div>
            </article>
        </div>
    </main>
</div>
