<?php
$galleryImages = [
    "Showcase" => "1.jpg",
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
    "" => [
        "Description" => "",
        "Images" => $galleryImages,
    ],
    "App" => [
        "Description" => "",
        "Images" => $galleryVideos,
    ],
];

$albumsShowCaption = true;

$projectTitle = "IOT SOS APP";
$projectSubtitle = "Extended Mobile IOT App with Safety Features";
$jumbotronImageSrc = "/wp-content/uploads/references/iot-sos-app-showcase-jumbotron.jpg";

$projectDescription = "
<p>I extended an IOT mobile app with new features, using SwiftUI in Xcode for iOS and later React Native for a hybrid app.</p>
<p>The backend is built in Node.js using Express and Socket.io, hosted on Google Cloud.</p>
<p>The app includes a fake phone call feature, allowing the user to schedule a simulated incoming call after a chosen number of minutes. It also offers a 'Follow Me' mode for traditional navigation from A to B, where the user can invite friends to monitor their journey remotely, specify a destination, and set a duration for their stay before returning home.</p>
<p>Additionally, the SOS feature lets users send a critical alert to friends, who then receive real-time navigation from their location to the user, even if the user is moving.</p>
";

$keyFeatures = [
    "Fake phone call: schedule a simulated incoming call for safety",
    "\"Follow Me\" mode: share live journey and destination with friends",
    "SOS alert: send critical alerts with real-time navigation for responders",
    "Invite friends to monitor your route and receive updates",
    "Real-time communication using WebSockets (Socket.io)",
    "Hybrid mobile app (SwiftUI & React Native)",
    "Cloud-hosted backend (Node.js, Express, Google Cloud)",
];

$technicalApproach = [
    "The development of the IOT SOS App involved a comprehensive approach to ensure robust functionality and seamless user experience across both iOS and Android platforms. Initially, the app was developed using SwiftUI in Xcode to leverage the native capabilities of iOS devices. To extend the app's reach and ensure cross-platform compatibility, it was later transitioned to React Native, allowing for a hybrid app solution that works efficiently on both iOS and Android.",
    "The backend infrastructure was designed using Node.js with Express to handle server-side logic and API requests. Socket.io was integrated to facilitate real-time communication, which is crucial for features like live location sharing and SOS alerts. This setup ensures that users can receive immediate updates and navigate in real-time to their friends' locations.",
    "For hosting, Google Cloud was chosen for its scalability and reliability, providing a robust environment to support the app's backend services. This cloud infrastructure ensures that the app can handle high loads and deliver consistent performance to users worldwide.",
    "The app's features, such as the fake phone call and 'Follow Me' mode, were designed with user safety and convenience in mind. These features required careful planning and implementation to ensure they function seamlessly within the app's ecosystem. The SOS feature, in particular, was developed to provide critical assistance by sending real-time navigation data to friends, ensuring they can reach the user quickly in case of an emergency.",
];

$techStack = [
    "Mobile App: SwiftUI, React Native",
    "Backend: Node.js, Express",
    "Real-time Communication: WebSockets (Socket.io)",
    "Cloud Hosting: Google Cloud",
    "Development Tools: Xcode, Visual Studio Code",
];

$githubRepositories = [];

require_once __DIR__ . '/project_template.php';
