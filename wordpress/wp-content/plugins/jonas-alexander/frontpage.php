<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">

<header>
    <nav class="page-navigator-wrapper" aria-label="Page navigation" style="display: none;">
        <button class="navigator-toggle" aria-controls="page-navigator-menu" aria-expanded="false" aria-label="Open navigation menu">≡</button>
        <div class="page-navigator" id="page-navigator-menu">
            <input type="checkbox" id="navigator-toggle" style="display:none;" aria-hidden="true" tabindex="-1" />
            <ul>
                <li style="margin-bottom: 30px;">
                    <strong>Jump to:</strong>
                </li>
                <li>
                    <img
                        src="/wp-content/uploads/cap.png"
                        alt="Picture of a floating cap"
                        class="navigation-hovering-item left"
                        width="60px" />
                    <a href="#jonas" aria-label="I am Jonas Sørensen">Jonas Sørensen</a>
                </li>
                <li>
                    <a onclick="goToScene('ilovecoding')" aria-label="Technologies I love coding">I love coding</a>
                    <img
                        src="/wp-content/uploads/coding.png"
                        alt="Picture of a floating code tag"
                        class="navigation-hovering-item right"
                        width="60px" />
                </li>
                <li>
                    <img
                        src="/wp-content/uploads/full-stack.png"
                        alt="Picture of a floating computer"
                        class="navigation-hovering-item left"
                        width="60px" />
                    <a href="#fullstack" aria-label="My Full-stack projects">Full-stack</a>
                </li>
                <li>
                    <a href="#mobileapps" aria-label="My Mobile App projects">Mobile Apps</a>
                    <img
                        src="/wp-content/uploads/mobile-phone.webp"
                        alt="Picture of a floating mobile phone"
                        class="navigation-hovering-item right"
                        width="60px" />
                </li>
                <li>
                    <img
                        src="/wp-content/uploads/wordpress-logo.png"
                        alt="Picture of a floating wordpress logo"
                        class="navigation-hovering-item left"
                        width="60px" />
                    <a href="#wordpress" aria-label="My WordPress website/webshop projects">WordPress</a>
                </li>
                <li>
                    <a href="#contactinfo" aria-label="My Contact/Social links">Contact/Socials</a>
                    <img
                        src="/wp-content/uploads/linkedin-logo.png"
                        alt="Picture of a floating linkedin logo"
                        class="navigation-hovering-item right"
                        width="60px" />
                </li>
                <li>
                    <img
                        src="/wp-content/uploads/work-icon.png"
                        alt="Picture of a floating working icon"
                        class="navigation-hovering-item left"
                        width="60px" />
                    <a href="#work" aria-label="My work experience">Jobs</a>
                </li>
                <li>
                    <a href="#interests" aria-label="My private interests">Interests</a>
                    <img
                        src="/wp-content/uploads/running-icon.png"
                        alt="Picture of a floating running shoe"
                        class="navigation-hovering-item right"
                        width="60px" />
                </li>
                <li>
                    <img
                        src="/wp-content/uploads/brain-icon.png"
                        alt="Picture of a floating brain carrying a book and a pencil"
                        class="navigation-hovering-item left"
                        width="60px" />
                    <a href="#codingskills" aria-label="A complete list of my tech-stack">Coding-skills</a>
                </li>
                <li>
                    <a href="#educations" aria-label="My educations">Educations</a>
                    <img
                        src="/wp-content/uploads/books-icon.png"
                        alt="Picture of a floating pile of books"
                        class="navigation-hovering-item right"
                        width="60px" />
                </li>
            </ul>
        </div>
    </nav>
</header>

<main class="scrollytelling-wrapper">
    <section class="page-content jumbotron" id="jonas">
        <!-- <div id="three-container"></div> -->
        <canvas id="particleCanvas" class="fade-up animation-delay3"></canvas>
        <div class="my-short-info-grid">
            <figure class="info-grid fade-up animation-delay1">
                <div class="my-picture-wrapper">
                    <a
                        href="/wp-content/uploads/jonas-1.jpg"
                        class="image-container"
                        target="_blank"
                        rel="noopener noreferrer">
                        <img decoding=" async" loading="lazy" class="hover-image"
                            alt="My Picture"
                            src="/wp-content/uploads/jonas-1.png" />
                        <span>AI-generated wax look-alike 🖼</span>
                    </a>
                </div>
            </figure>
            <div class="info-grid details fade-up animation-delay2">
                <div class="i-am-jonas">
                    <span class="my-name jump-letters" aria-label="My name is">My name is</span>
                    <h1 class="my-name jump-letters" aria-label="Jonas Sørensen">Jonas Sørensen</h1>
                    <span class="my-occupation jump-letters" aria-label="I am a very">I am a very</span>
                    <h2 class="my-occupation jump-letters" aria-label="Skilled developer">Skilled developer</h2>
                </div>
            </div>
        </div>
        <div class="clear-both"></div>
    </section>

    <section class="page-content about-me" id="ilovecoding">
        <div class="about-me-inner">
            <div class="tech-text">
                I love coding
                <span id="tech-text"></span>
            </div>
            <h3 class="my-projects">
                <span class="jump-letters">About </span>
                <span class="jump-letters">me </span>
                <span class="jump-letters">for </span>
                <span class="jump-letters">the </span>
                <span class="jump-letters">techy </span>
                <span class="jump-letters">people:</span>
            </h3>
            <input type="checkbox" id="toggle-about-me" class="toggle-checkbox">
            <label for="toggle-about-me" class="toggle-button"></label>
            <div id="about-me-section" class="my-about-me-section">
                <div style="clear: both; margin: 20px 0;display: flex;flex-direction: column;gap: 20px;">
                    <p><strong>My Skills:</strong></p>
                    <p>I have developed strong expertise in using modern technologies such as Redux, Custom Hooks, JWT
                        tokens,
                        Axios, Tailwind, CSS Modules, SCSS, Material Design, and more<br />
                        All enable me to create secure, scalable, and reactive frontend solutions.
                        My frontend work includes building dynamic user interfaces with Next.js, styling with Tailwind
                        and<br />
                        integrating design systems like Material Design.</p>

                    <p>On the backend, I have solid experience crafting MVC architectures in both PHP (using Laravel,
                        Eloquent,
                        and Blade) and Node.js (using Express and Socket.io), allowing me to<br />
                        create robust RESTful APIs and real-time applications.
                        I am also proficient in working with databases, including various SQL solutions.</p>
                </div>
                <div style="clear: both; margin: 20px 0;display: flex;flex-direction: column;gap: 20px;">
                    <p><strong>My Experience:</strong></p>
                    <p>I've gained diverse experience as a developer, starting with Joomla CMS and WordPress, where I built
                        responsive websites and worked with RESTful APIs.<br />
                        More recently, I modernized a legacy Laravel app, transitioning to a Next.js frontend,
                        and
                        expanded the mobile app using SwiftUI and React Native.</p>

                    <p>My work spans both backend and frontend development, with expertise in PHP, JavaScript, Node.js, and
                        mobile app engineering, allowing me to build scalable, secure, and dynamic applications.</p>
                </div>
            </div>
            <div class="clear-both"></div>
        </div>
    </section>

    <style>
        .fade-in-right {
            opacity: 0;
            transition: 600ms ease-in-out;
            transform: translateX(70px);
        }

        .fade-in-right.animate-in {
            opacity: 1;
            transform: translateX(0);
        }
    </style>

    <article class="page-content portfolio-projects">
        <h3 class="my-projects" style="color: white;">Look at my portfolio projects:</h3>
        <div class="projects-wrapper" style="clear: left;">
            <div class="projects-group">
                <h3 class="projects-group-title magnetic" id="fullstack">
                    <div class="text-reveal-line">
                        <div class=" text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">Highlighted</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Highlighted</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class=" text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">Full-stack</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Full-stack</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class=" text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">Projects</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Projects</div>
                        </div>
                    </div>
                </h3>
                <div class="projects-group-grid">
                    <div class="projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="Booohking - Simple Booking System"
                            src="/wp-content/uploads/references/booohking.png" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/booohking-booking-system"
                                    target="_blank"
                                    aria-label="Learn more about my demo project, a simple booking system, called Booohking">
                                    Booohking - Simple Booking System
                                </a>
                            </h4>
                            <p>Booohking is a full-stack booking system built with Laravel,<br />
                                Next.js, and PostgreSQL. It allows businesses to manage availability and accept online bookings in a clear and simple way.</p>
                            <p>With a clean booking flow, instant confirmations, and a mobile-friendly interface,<br />
                                Booohking helps reduce manual coordination and booking errors.
                                This project highlights my focus on usability, clean design, and practical SaaS solutions.</p>
                        </div>
                    </div>
                    <div class="projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="GiveOrTake - Project Management & Time Tracking"
                            src="/wp-content/uploads/references/giveortake-project-time.jpg" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/giveortake-project-management-time-tracking"
                                    target="_blank"
                                    aria-label="Learn more about my demo project, a project management & time tracking platform, called GiveOrTake">
                                    GiveOrTake - Project Management & Time Tracking
                                </a>
                            </h4>
                            <p>GiveOrTake is a full-stack project management and time-tracking platform built with
                                Laravel,<br />
                                Next.js, and SQLite. It enables organizations to manage teams, assign tasks, and track time
                                seamlessly.</p>
                            <p>With role-based permissions, activity logs, and file sharing, GiveOrTake streamlines
                                collaboration while ensuring accountability.<br />
                                This project showcases my ability to build scalable, data-driven applications with real-time
                                collaboration features.</p>
                        </div>
                    </div>
                    <div class="projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="CasaNova - Property Listing Marketplace"
                            src="/wp-content/uploads/references/casanova-property-listing.jpg" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/casanova-property-listing-platform"
                                    target="_blank"
                                    aria-label="Learn more about my demo project, a property listing platform, called CasaNova">
                                    CasaNova - Property Listing Platform
                                </a>
                            </h4>
                            <p>CasaNova is a full-stack real estate listing platform built with Laravel, Next.js,<br />
                                and SQLite. It allows users to create, edit, and manage property listings with advanced
                                image handling features.</p>
                            <p>The platform supports drag-and-drop image reordering, inline editing, and multi-file
                                uploads.<br />
                                CasaNova demonstrates my ability to build intuitive, user-friendly interfaces
                                backed by solid backend architecture for dynamic content management.</p>
                        </div>
                    </div>
                    <div class=" projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="CRM system for a IOT-company"
                            src="/wp-content/uploads/references/safelii-crm.jpg" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/base2sale-crm-system"
                                    target="_blank"
                                    aria-label="Learn more about my working experience, a CRM system, called Base2Sale">
                                    Base2Sale CRM system
                                </a>
                            </h4>
                            <p>I was tasked with modernizing an old Laravel program, which I upgraded from<br />
                                PHP 5 to PHP 8 and also expanded with completely new features.</p>
                            <p>I moved the frontend away from Laravel's built-in Blade template to a separate reactive
                                frontend built with Next.js.</p>
                        </div>
                    </div>
                    <div class="projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="YourSpace - Slack/Discord Clone"
                            src="/wp-content/uploads/references/yourspace-rocket.jpg" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/yourspace-slack-discord-clone"
                                    target="_blank"
                                    aria-label="Learn more about my demo project, a slack/discord clone, called YourSpace">
                                    YourSpace - Slack/Discord Clone
                                </a>
                            </h4>
                            <p>YourSpace is a real-time communication platform inspired by Slack and Discord.<br />
                                I developed a frontend clone that replicates the intuitive design of modern chat apps,<br />
                                paired with a Laravel-powered backend managing a robust MySQL database.</p>
                            <p>With features like channel-based conversations, direct messaging, and multimedia
                                support,<br />
                                YourSpace showcases my full-stack development skills in creating scalable and interactive
                                real-time applications.</p>
                        </div>
                    </div>
                    <div class="projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="SEObetter - Website Analytics & SEO Optimization Platform"
                            src="/wp-content/uploads/references/seobetter.jpg" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/seobetter-website-analytics-seo-optimization"
                                    target="_blank"
                                    aria-label="Learn more about my working experience, analytics & SEO optimization platform, called SEObetter">
                                    SEObetter - Website Analytics & SEO Optimization Platform
                                </a>
                            </h4>
                            <p>SEObetter is a SaaS platform inspired by Google Analytics and Hotjar, developed to provide deep insight into how users interact with a website.<br />
                                It tracks visits, unique users, referrals, returning users, bounce rates, and device/browser demographics. It also features interactive heatmaps and conversion funnels.</p>
                            <p>The platform reveals which pages users visit in sequence, where they click, how far they scroll, and whether they convert (e.g. purchase, signup).<br />
                                It helps optimize UX by showing where to place CTA buttons and other key elements.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects-group">
                <h3 class="projects-group-title magnetic" id="mobileapps">
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">Highlighted</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Highlighted</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">Mobile</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Mobile</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">Apps</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Apps</div>
                        </div>
                    </div>
                </h3>
                <div class="projects-group-grid">
                    <div class="projects-group-item slide-fade-wrapper right">
                        <img decoding="async" loading="lazy" class=" parallax-image"
                            alt="Funler Messaging"
                            src="/wp-content/uploads/references/funler-app.png" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/funler-messaging"
                                    target="_blank"
                                    aria-label="Learn more about my freelance task of creating a mobile React Native app, for an AI Chatbot company, called Funler Messaging">
                                    Funler Messaging
                                </a>
                            </h4>
                            <p>As a freelance mobile app engineer for Funler ApS, I developed and deployed the<br />
                                Funler Messaging App for iOS and Android using React Native, TypeScript, and Redux.<br />
                                My work included Firebase Messaging, Google & Facebook Authentication, and GitHub Actions
                                for seamless deployment.
                            </p>
                        </div>
                    </div>
                    <div class="projects-group-item slide-fade-wrapper right">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="IOT App"
                            src="/wp-content/uploads/references/safelii-app-2.jpg" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/iot-sos-app"
                                    target="_blank"
                                    aria-label="Learn more about my working experience, extending an Internet of Things mobile app">
                                    IOT APP
                                </a>
                            </h4>
                            <p>I extended an IOT mobile app with new features,
                                using SwiftUI in Xcode for iOS and afterwards using React Native for a hybrid-app.</p>
                            <p>The backend is built in Node.js using Express and Socket.io, hosted on Google Cloud.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="projects-group">
                <h3 class="projects-group-title magnetic" id="wordpress">
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">Highlighted</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Highlighted</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">WordPress</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">WordPress</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">&amp;</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">&amp;</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">WooCommerce</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">WooCommerce</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper" aria-hidden="true">
                            <div class="text-huge text-lighter">webshops</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">webshops</div>
                        </div>
                    </div>
                </h3>
                <div class="projects-group-grid">
                    <div class="projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="Allingbjerggaard - Responsive WooCommmerce farmshop"
                            src="/wp-content/uploads/references/allingbjerggaard-0.jpg" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/allingbjerggaard"
                                    target="_blank"
                                    aria-label="Learn more about my freelance task of creating a WordPress webshop for a small farm shop">
                                    Allingbjerggaard.dk - Responsive WooCommmerce webshop
                                </a>
                            </h4>
                            <p class="project-description">I developed the website for Allingbjerggaard, a charming farm
                                shop located in Skibby.<br />
                                The farm shop offers a selection of handmade Christmas decorations and hostess gifts, which
                                can be purchased from their cozy roadside stall.</p>
                            <p class="project-description">The website is designed with a focus on usability and aesthetics,
                                giving visitors an easy and pleasant experience<br />
                                when exploring Allingbjerggaard's products and services.</p>
                        </div>
                    </div>
                    <div class="projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="Go @ Netto - REMA 1000 Vigo Webshop Clone"
                            src="/wp-content/uploads/references/rema-vigo-gonetto.jpg" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/gonetto"
                                    target="_blank"
                                    aria-label="Learn more about my demo project, a webshop clone of REMA 1000 Vigo, called Go@Netto">
                                    Go@Netto - REMA 1000 Vigo Webshop Clone
                                </a>
                            </h4>
                            <p>Go@Netto is a replica of the REMA 1000 Vigo webshop, built to mirror its concept,
                                functionality,<br />
                                and user experience. It features a responsive layout, intuitive navigation, and a smooth
                                shopping experience.</p>
                            <p>This project demonstrates my ability to recreate complex e-commerce platforms with a focus on
                                usability and performance.</p>
                        </div>
                    </div>
                    <div class="projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="Happy with my bike - Responsive WC webshop"
                            src="/wp-content/uploads/references/happy-0.jpg" />
                        <div class="projects-group-item-description magnetic">
                            <h4 class="projects-group-item-title">
                                <a
                                    href="/happy-with-my-bike"
                                    target="_blank"
                                    aria-label="Learn more about my multi-language WordPress/WooCommerce demo webshop, called Happy with my bike">
                                    Happy with my bike - Responsive WC webshop
                                </a>
                            </h4>
                            <p>Responsive e-commerce site for "Happy Bikes," featuring
                                diverse bike categories, detailed product pages, and user-friendly navigation.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear-both"></div>
        </div>
    </article>

    <section class="page-content cv-wrapper cv-contact-details" id="contactinfo">
        <div class="my-picture-and-contact-info">
            <div class="my-picture-wrapper-2">
                <img decoding="async" loading="lazy" class="the-picture magnetic"
                    alt="My picture"
                    src="/wp-content/uploads/jonas-library.jpg" />
            </div>
            <div class="my-contact-info magnetic">
                <div>
                    <p class="c30">
                        <span class="c37 c28 c34 c49">Jonas Alexander Sørensen</span><br />
                        <img decoding="async" loading="lazy" style="width: 20px; height: 20px;"
                            alt="E-mail"
                            src="/wp-content/uploads/image3.png" />
                        <span class="c23 c35"><a class="c3"
                                href="mailto:jonas.sorensen.93dk@gmx.com" aria-label="Send me an email">jonas.sorensen.93dk@gmx.com</a></span>
                        <br />
                        <img decoding="async" loading="lazy" style="width: 20px; height: 20px;"
                            alt="Phone"
                            src="/wp-content/uploads/image1.png" /> <span
                            class="c36 c23"> +45 60 81 99 80</span>
                    </p>
                    <p class="c30">
                        <img decoding="async" loading="lazy" style="width: 20px; height: 20px;"
                            alt="Age"
                            src="/wp-content/uploads/image2.png" /> <span
                            class="c23 c36"> 32 years old, 7 July 1993</span>
                    </p>
                    <p class="c30">
                        <img decoding="async" loading="lazy" style="width: 20px; height: 20px;"
                            alt="City"
                            src="/wp-content/uploads/image6.png" /> <span
                            class="c23"> 2830 Virum<br /></span>
                        <img decoding="async" loading="lazy" style="width: 20.11px; height: 21.50px;"
                            alt="Github"
                            src="/wp-content/uploads/image4.png" />
                        <span class="c23 c35"><a class="c3" href="https://github.com/J0nas7" target="_blank" aria-label="Visit my GitHub profile"
                                rel="noopener">Github.com/J0nas7</a><br /></span>
                    </p>
                    <div class="linkedIn">
                        <img decoding="async" loading="lazy" style="width: 20.11px; height: 21.50px;"
                            alt="LinkedIn"
                            src="/wp-content/uploads/linkedin-icon.png" />
                        <span class="c23 c35"><a class="c3"
                                href="https://www.linkedin.com/in/jonas-alexander-sørensen-92840495/" target="_blank"
                                rel="noopener" aria-label="Visit my LinkedIn Profile">LinkedIn/jonas-alexander-...</a></span>
                    </div>
                    <div>
                        <span style="font-size: 8.5pt;">
                            Read about my working experience and my educations on my LinkedIn profile
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <article class="wp-block-group page-content cv-wrapper">
        <div class="interests-techstack-educations-wrapper">
            <div class="interests-techstack-container">
                <div class="interests">
                    <h3 class="c38 magnetic" id="interests">
                        <div class="text-reveal-line">
                            <div class="text-reveal-line-wrapper" aria-hidden="true">
                                <div class="text-huge text-lighter">Interests</div>
                            </div>
                            <div class="text-reveal-hover-wrapper" style="width: 100%;">
                                <div class="text-huge">Interests</div>
                            </div>
                        </div>
                    </h3>
                    <div class="interests-carousel">
                        <div class="interests-carousel-inner">
                            <span class="interest-item">👟 Running</span>
                            <span class="interest-item">📚 Reading</span>
                            <span class="interest-item">🎙 Podcasts</span>
                            <span class="interest-item">♻ Second-hand</span>
                            <span class="interest-item">🏋 Gym</span>
                            <span class="interest-item">🍳 Cooking</span>
                            <span class="interest-item">🚙 Cars</span>
                            <span class="interest-item">👟 Running</span>
                            <span class="interest-item">📚 Reading</span>
                            <span class="interest-item">🎙 Podcasts</span>
                            <span class="interest-item">♻ Second-hand</span>
                            <span class="interest-item">🏋 Gym</span>
                            <span class="interest-item">🍳 Cooking</span>
                            <span class="interest-item">🚙 Cars</span>
                            <span class="interest-item">👟 Running</span>
                            <span class="interest-item">📚 Reading</span>
                            <span class="interest-item">🎙 Podcasts</span>
                            <span class="interest-item">♻ Second-hand</span>
                            <span class="interest-item">🏋 Gym</span>
                            <span class="interest-item">🍳 Cooking</span>
                            <span class="interest-item">🚙 Cars</span>
                        </div>
                    </div>
                </div>
                <div class="techstack">
                    <h3 class="c38 magnetic" id="codingskills">
                        <div class="text-reveal-line">
                            <div class="text-reveal-line-wrapper" aria-hidden="true">
                                <div class="text-huge text-lighter">Coding</div>
                            </div>
                            <div class="text-reveal-hover-wrapper" style="width: 100%;">
                                <div class="text-huge">Coding</div>
                            </div>
                        </div>
                        <div class="text-reveal-line">
                            <div class="text-reveal-line-wrapper" aria-hidden="true">
                                <div class="text-huge text-lighter">Skills</div>
                            </div>
                            <div class="text-reveal-hover-wrapper" style="width: 100%;">
                                <div class="text-huge">Skills</div>
                            </div>
                        </div>
                    </h3>

                    <div class="techstack-group">
                        <span class="magnetic techstack-item beginner-item">Beginner</span>
                        <span class="magnetic techstack-item intermediate-item">Intermediate</span>
                        <span class="magnetic techstack-item expert-item">Expert</span>
                    </div>

                    <strong>Backend</strong>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item beginner-item">Node.js/NestJS</span>
                        <span class="magnetic techstack-item intermediate-item">C#/.NET</span>
                        <span class="magnetic techstack-item expert-item">PHP/Laravel</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item beginner-item">ElasticSearch</span>
                        <span class="magnetic techstack-item expert-item">JSON</span>
                        <span class="magnetic techstack-item expert-item">JWT</span>
                        <span class="magnetic techstack-item expert-item">Redis</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item expert-item">WordPress</span>
                        <span class="magnetic techstack-item expert-item">Advanced Custom Fields</span>
                        <span class="magnetic techstack-item expert-item">WooCommerce</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item beginner-item">Express</span>
                        <span class="magnetic techstack-item beginner-item">Prisma</span>
                        <span class="magnetic techstack-item beginner-item">Socket</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item expert-item">MySQL</span>
                        <span class="magnetic techstack-item intermediate-item">SQLite</span>
                        <span class="magnetic techstack-item beginner-item">PostgreSQL</span>
                    </div>
                    <strong>Frontend</strong>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item expert-item">TypeScript</span>
                        <span class="magnetic techstack-item expert-item">React.js</span>
                        <span class="magnetic techstack-item expert-item">Next.js</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item intermediate-item">React Native</span>
                        <span class="magnetic techstack-item intermediate-item">SwiftUI</span>
                        <span class="magnetic techstack-item beginner-item">Expo</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item expert-item">Redux</span>
                        <span class="magnetic techstack-item expert-item">React Context</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item expert-item">Axios</span>
                        <span class="magnetic techstack-item expert-item">TanStack Query</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item intermediate-item">Formik</span>
                        <span class="magnetic techstack-item expert-item">Tailwind</span>
                        <span class="magnetic techstack-item expert-item">SCSS Modules</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item expert-item">Styled Components</span>
                        <span class="magnetic techstack-item beginner-item">Material Design</span>
                    </div>
                    <strong>DevOps</strong>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item beginner-item">xUnit</span>
                        <span class="magnetic techstack-item expert-item">PHPUnit</span>
                        <span class="magnetic techstack-item expert-item">Jest</span>
                        <span class="magnetic techstack-item intermediate-item">Cypress</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item expert-item">Github Actions</span>
                        <span class="magnetic techstack-item intermediate-item">Terraform</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item intermediate-item">Google Cloud</span>
                        <span class="magnetic techstack-item expert-item">Firebase</span>
                        <span class="magnetic techstack-item beginner-item">Supabase</span>
                    </div>
                    <div class="techstack-group">
                        <span class="magnetic techstack-item intermediate-item">Docker</span>
                        <span class="magnetic techstack-item beginner-item">Scaleway</span>
                        <span class="magnetic techstack-item beginner-item">DNS</span>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>
