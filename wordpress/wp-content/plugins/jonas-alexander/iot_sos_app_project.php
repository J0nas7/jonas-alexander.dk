<?php
$galleryImages = [
    "Showcase" => "1.png"
];
$galleryVideos = [
    "Fra REMA til Sorgenfri" => "1IlsvnGlUHUAhCVWpjWRnAPzjWC8AFWUG",
    "Fra REMA til SPAR" => "1GHTC4JQz14lisWvYBTJPKnxng8mSExYW",
    "Bo kører til Sorgenfri" => "1mmCaUJbJxkU9WY24kODpNlxrwRWkOj2-",
    "Hjemkomst Ur-skive" => "1qmcrVN9a0e7FTRQqyCnCKmZqiqKqiS-X",
    "SOS vs Find" => "1vXu3k4EM6yyZvjRPD9gKldVWwe7jcp3y",
    "Zoom indstillinger" => "1ef_6PqiMTj3mDg5SyQZEwTjBYdwjOBsf",
    "Vælge mellem venner" => "1eBHALRpWw3SXodCnnPWnSmRAcu11JrvQ",
    "Rutevælger" => "1u8eaMngphd_Pvw9TluorR0UlBlAxYD2z",
];
$galleryAlbums = [
    "" => $galleryImages,
    "App" => $galleryVideos
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

    <img alt="IOT SOS APP Jumbotron Image" class="project-jumbotron"
        src="/wp-content/uploads/references/iot-sos-app-showcase-jumbotron.jpg" />

    <div class="project-body">
        <div class="project-container">
            <div class="project-content">
                <header class="project-header">
                    <h1 class="project-title">IOT SOS APP</h1>
                    <p class="project-subtitle">Extended Mobile IOT App with Safety Features</p>
                </header>

                <div class="project-details">
                    <div class="project-description">
                        <h2>About IOT SOS APP</h2>
                        <p>
                            I extended an IOT mobile app with new features, using SwiftUI in Xcode for iOS and later React Native for a hybrid app.<br><br>
                            The backend is built in Node.js using Express and Socket.io, hosted on Google Cloud.
                        </p>
                        <p>
                            The app includes a fake phone call feature, allowing the user to schedule a simulated incoming call after a chosen number of minutes. It also offers a "Follow Me" mode for traditional navigation from A to B, where the user can invite friends to monitor their journey remotely, specify a destination, and set a duration for their stay before returning home. Additionally, the SOS feature lets users send a critical alert to friends, who then receive real-time navigation from their location to the user, even if the user is moving.
                        </p>
                    </div>

                    <div class="project-features">
                        <h2>Key Features</h2>
                        <ul>
                            <li>Fake phone call: schedule a simulated incoming call for safety</li>
                            <li>"Follow Me" mode: share live journey and destination with friends</li>
                            <li>SOS alert: send critical alerts with real-time navigation for responders</li>
                            <li>Invite friends to monitor your route and receive updates</li>
                            <li>Real-time communication using WebSockets (Socket.io)</li>
                            <li>Hybrid mobile app (SwiftUI & React Native)</li>
                            <li>Cloud-hosted backend (Node.js, Express, Google Cloud)</li>
                        </ul>
                    </div>

                    <div class="project-gallery-wrapper">
                        <?php foreach ($galleryAlbums as $albumName => $images): ?>
                            <h2>Gallery: <?= $albumName; ?></h2>
                            <div class=" project-gallery">
                                <?php foreach ($images as $caption => $image): ?>
                                    <p class="gallery-item">
                                        <?php if (strpos($image, '.mp4') || strpos($image, '.mov') || strlen($image) > 6) : ?>
                                            <a href="https://drive.google.com/file/d/<?= $image; ?>/view" target="_blank">
                                                <img src="https://placehold.co/600x400?text=Video"
                                                    alt="Project Video <?= $image ?>" class="gallery-image" />
                                            </a>
                                        <?php else: ?>
                                            <img src="/wp-content/uploads/references/gallery/iot-<?= strtolower($albumName); ?>/<?= $image; ?>"
                                                alt="Project Image <?= $image ?>" class="gallery-image"
                                                onclick="openLightBox('<?= $image ?>', '<?= $albumName ?>', 'iot')" />
                                        <?php endif; ?>
                                        <span><?= $caption; ?></span>
                                    </p>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="technical-approach">
                        <h2>Technical Approach</h2>
                        <p>
                            The development of the IOT SOS App involved a comprehensive approach to ensure robust functionality and seamless user experience across both iOS and Android platforms. Initially, the app was developed using SwiftUI in Xcode to leverage the native capabilities of iOS devices. To extend the app's reach and ensure cross-platform compatibility, it was later transitioned to React Native, allowing for a hybrid app solution that works efficiently on both iOS and Android.
                        </p>
                        <p>
                            The backend infrastructure was designed using Node.js with Express to handle server-side logic and API requests. Socket.io was integrated to facilitate real-time communication, which is crucial for features like live location sharing and SOS alerts. This setup ensures that users can receive immediate updates and navigate in real-time to their friends' locations.
                        </p>
                        <p>
                            For hosting, Google Cloud was chosen for its scalability and reliability, providing a robust environment to support the app's backend services. This cloud infrastructure ensures that the app can handle high loads and deliver consistent performance to users worldwide.
                        </p>
                        <p>
                            The app's features, such as the fake phone call and "Follow Me" mode, were designed with user safety and convenience in mind. These features required careful planning and implementation to ensure they function seamlessly within the app's ecosystem. The SOS feature, in particular, was developed to provide critical assistance by sending real-time navigation data to friends, ensuring they can reach the user quickly in case of an emergency.
                        </p>
                        <div class="tech-stack">
                            <h3>Tech Stack</h3>
                            <ul>
                                <li>Mobile App: SwiftUI, React Native</li>
                                <li>Backend: Node.js, Express</li>
                                <li>Real-time Communication: WebSockets (Socket.io)</li>
                                <li>Cloud Hosting: Google Cloud</li>
                                <li>Development Tools: Xcode, Visual Studio Code</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
