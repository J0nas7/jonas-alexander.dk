<header>
    <nav class="page-navigator-wrapper" aria-label="Page navigation">
        <button class="navigator-toggle" aria-controls="page-navigator-menu" aria-expanded="false" aria-label="Open navigation menu">≡</button>
        <div class="page-navigator" id="page-navigator-menu">
            <input type="checkbox" id="navigator-toggle" style="display:none;" aria-hidden="true" tabindex="-1" />
            <ul>
                <li><strong>Jump to:</strong></li>
                <li>
                    <a href="#jonas">Jonas Sørensen</a>
                </li>
                <li>
                    <a href="#ilovecoding">I love coding</a>
                </li>
                <li>
                    <a href="#fullstack">Full-stack projects</a>
                </li>
                <li>
                    <a href="#mobileapps">Mobile Apps</a>
                </li>
                <li>
                    <a href="#wordpress">WordPress websites</a>
                </li>
                <li>
                    <a href="#contactinfo">Contact info &amp; socials</a>
                </li>
                <li>
                    <a href="#work">Working Experience</a>
                </li>
                <li>
                    <a href="#interests">Interests</a>
                </li>
                <li>
                    <a href="#codingskills">Coding-skills</a>
                </li>
                <li>
                    <a href="#educations">Educations</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <section class="page-content jumbotron" id="jonas">
        <div id="three-container"></div>
        <div class="my-short-info-grid">
            <figure class="info-grid">
                <div class="my-picture-wrapper">
                    <div class="image-container">
                        <img decoding="async" loading="lazy" class="hover-image"
                            alt="My Picture"
                            src="/wp-content/uploads/jonas-1.jpg" />
                    </div>
                </div>
            </figure>
            <div class="info-grid details">
                <div class="i-am-jonas">
                    <span class="my-name jump-letters">My name is</span>
                    <h1 class="my-name jump-letters">Jonas Sørensen</h1>
                    <span class="my-occupation jump-letters">I am a very</span>
                    <h2 class="my-occupation jump-letters">Skilled developer</h2>
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
                <h3 class="projects-group-title" id="fullstack">
                    <div class="text-reveal-line">
                        <div class=" text-reveal-line-wrapper">
                            <div class="text-huge text-lighter">Highlighted</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Highlighted</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class=" text-reveal-line-wrapper">
                            <div class="text-huge text-lighter">Full-stack</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Full-stack</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class=" text-reveal-line-wrapper">
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
                            alt="CasaNova - Property Listing Marketplace"
                            src="/wp-content/uploads/references/casanova-property-listing.jpg" />
                        <div class="projects-group-item-description">
                            <h4 class="projects-group-item-title">
                                <a href="/casanova-property-listing-platform" target="_blank">
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
                    <div class="projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="GiveOrTake - Project Management & Time Tracking"
                            src="/wp-content/uploads/references/giveortake-project-time.jpg" />
                        <div class="projects-group-item-description">
                            <h4 class="projects-group-item-title">
                                <a href="/giveortake-project-management-time-tracking" target="_blank">
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
                    <div class=" projects-group-item slide-fade-wrapper left">
                        <img decoding="async" loading="lazy" class="parallax-image"
                            alt="CRM system for a IOT-company"
                            src="/wp-content/uploads/references/safelii-crm.jpg" />
                        <div class="projects-group-item-description">
                            <h4 class="projects-group-item-title">
                                <a href="/base2sale-crm-system" target="_blank">
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
                        <div class="projects-group-item-description">
                            <h4 class="projects-group-item-title">
                                <a href="/yourspace-slack-discord-clone" target="_blank">
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
                        <div class="projects-group-item-description">
                            <h4 class="projects-group-item-title">
                                <a href="/seobetter-website-analytics-seo-optimization" target="_blank">
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
                <h3 class="projects-group-title" id="mobileapps">
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper">
                            <div class="text-huge text-lighter">Highlighted</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Highlighted</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper">
                            <div class="text-huge text-lighter">Mobile</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Mobile</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper">
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
                        <div class="projects-group-item-description">
                            <h4 class="projects-group-item-title">
                                <a href="/funler-messaging" target="_blank">
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
                        <div class="projects-group-item-description">
                            <h4 class="projects-group-item-title">
                                <a href="/iot-sos-app" target="_blank">
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
                <h3 class="projects-group-title" id="wordpress">
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper">
                            <div class="text-huge text-lighter">Highlighted</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">Highlighted</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper">
                            <div class="text-huge text-lighter">WordPress</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">WordPress</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper">
                            <div class="text-huge text-lighter">&amp;</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">&amp;</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper">
                            <div class="text-huge text-lighter">WooCommerce</div>
                        </div>
                        <div class="text-reveal-hover-wrapper">
                            <div class="text-huge">WooCommerce</div>
                        </div>
                    </div>
                    <div class="text-reveal-line">
                        <div class="text-reveal-line-wrapper">
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
                        <div class="projects-group-item-description">
                            <h4 class="projects-group-item-title">
                                <a href="/allingbjerggaard" target="_blank">
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
                        <div class="projects-group-item-description">
                            <h4 class="projects-group-item-title">
                                <a href="/gonetto" target="_blank">
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
                        <div class="projects-group-item-description">
                            <h4 class="projects-group-item-title">
                                <a href="/happy-with-my-bike" target="_blank">
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
                <img decoding="async" loading="lazy" class="the-picture"
                    alt="My picture"
                    src="/wp-content/uploads/jonas-2.jpg" />
            </div>
            <div class="my-contact-info">
                <div>
                    <p class="c30">
                        <span class="c37 c28 c34 c49">Jonas Alexander Sørensen</span><br />
                        <img decoding="async" loading="lazy" style="width: 20px; height: 20px;"
                            alt="E-mail"
                            src="/wp-content/uploads/image3.png" /> <span
                            class="c23"> jonas.sorensen.93dk@gmail.com</span><br />
                        <img decoding="async" loading="lazy" style="width: 20px; height: 20px;"
                            alt="Phone"
                            src="/wp-content/uploads/image1.png" /> <span
                            class="c36 c23"> +45 60 81 99 80</span>
                    </p>
                    <p class="c30">
                        <img decoding="async" loading="lazy" style="width: 20px; height: 20px;"
                            alt="Age"
                            src="/wp-content/uploads/image2.png" /> <span
                            class="c23 c36"> 31 years old, 7 July 1993</span>
                    </p>
                    <p class="c30">
                        <img decoding="async" loading="lazy" style="width: 20px; height: 20px;"
                            alt="City"
                            src="/wp-content/uploads/image6.png" /> <span
                            class="c23"> 2830 Virum<br /></span>
                        <img decoding="async" loading="lazy" style="width: 20.11px; height: 21.50px;"
                            alt="Github"
                            src="/wp-content/uploads/image4.png" />
                        <span class="c23 c35"><a class="c3" href="https://github.com/J0nas7" target="_blank"
                                rel="noopener">Github.com/J0nas7</a><br /></span>
                    </p>
                    <div class="linkedIn">
                        <img decoding="async" loading="lazy" style="width: 20.11px; height: 21.50px;"
                            alt="LinkedIn"
                            src="/wp-content/uploads/linkedin-icon.png" />
                        <span class="c23 c35"><a class="c3"
                                href="https://www.linkedin.com/in/jonas-alexander-sørensen-92840495/" target="_blank"
                                rel="noopener" aria-label="My LinkedIn Profile">jonas-alexander-sørensen-92840495</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <article class="page-content cv-wrapper working-experience" id="work">
        <div class="working-headline">
            <h1 id="h.d3ub5g7mrx2l" class="c38">Working Experience</h1>
        </div>
        <div class="work-experiences">
            <div class="work-experience-list">
                <div>
                    <p class="c8">
                        <span class="level level-1">1</span>
                        <span class="c28 c19">Freelance React Native Developer</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="c21">Funler ApS</span>
                    </p>
                    <p class="c10 experience-period">
                        <span class="c21">Nov. 2024 - mar. 2025</span>
                    </p>
                    <p class="c10 experience-type">
                        <span class="c21">Freelance, Remote</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="work-skills-item">React Native</span>
                        <span class="work-skills-item">TypeScript</span>
                        <span class="work-skills-item">Jest</span>
                        <span class="work-skills-item">Redux</span>
                        <span class="work-skills-item">Material Design</span>
                        <span class="work-skills-item">Styled Components</span>
                        <span class="work-skills-item">JSON</span>
                        <span class="work-skills-item">JWT</span>
                        <span class="work-skills-item">REST</span>
                        <span class="work-skills-item">GitHub Actions</span>
                        <span class="work-skills-item">Firebase Messaging</span>
                        <span class="work-skills-item">Firebase App Distribution</span>
                        <span class="work-skills-item">Google Auth</span>
                        <span class="work-skills-item">Facebook Auth</span>
                    </p>
                    <p class="c10">
                        <span class="c14">
                            As a freelance mobile app engineer for Funler ApS, I have been responsible for developing and
                            deploying the Funler Messaging App (versions 0.1 and 0.2) for iOS and Android.<br />
                            My role includes building scalable and responsive features using React Native, TypeScript,
                            Redux, and Styled
                            Components, ensuring a smooth and engaging user experience.<br /><br />

                            I have also integrated Firebase Messaging, Google & Facebook Authentication, and GitHub Actions
                            for CI/CD automation.<br />
                            Additionally, I have worked with JWT authentication, RESTful APIs, and
                            Firebase App Distribution to streamline the deployment process.
                        </span>
                    </p>
                    <p class="c7">
                        <span class="c16 c0"></span>
                    </p>
                </div>
            </div>

            <div class="work-experience-list">
                <div>
                    <p class="c8">
                        <span class="level level-1">2</span>
                        <span class="c28 c19">Full-stack Developer & Mobile App Engineer</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="c21">IOT-company, Frederiksberg</span>
                    </p>
                    <p class="c10 experience-period">
                        <span class="c21">Jan. 2024 - mar. 2025</span>
                    </p>
                    <p class="c10 experience-type">
                        <span class="c21">Full-time</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="work-skills-item">PHP</span>
                        <span class="work-skills-item">Laravel</span>
                        <span class="work-skills-item">NoSQL</span>
                        <span class="work-skills-item">Blade</span>
                        <span class="work-skills-item">PHPUnit</span>
                        <span class="work-skills-item">React</span>
                        <span class="work-skills-item">Next.js</span>
                        <span class="work-skills-item">TypeScript</span>
                        <span class="work-skills-item">JWT</span>
                        <span class="work-skills-item">Redux</span>
                        <span class="work-skills-item">Jest</span>
                        <span class="work-skills-item">Material Design</span>
                        <span class="work-skills-item">Tailwind</span>
                        <span class="work-skills-item">CSS Modules</span>
                        <span class="work-skills-item">SCSS</span>
                    </p>
                    <p class="c10">
                        <span class="c14">
                            I have the task of modernizing an old Laravel program, which must be upgraded from PHP 5 to PHP
                            8 and which must also be expanded with completely new features.<br>
                            I am moving the frontend away from Laravel's built-in Blade template, to a separate reactive
                            frontend built with Next.js.
                            <br><br>
                            Secondly I am extending the mobile app with new features, using SwiftUI in Xcode for iOS
                            and afterwards using React Native for a hybrid-app.<br>
                            The backend is built in Node.js using Express and Socket.io, hosted on Google Cloud.
                        </span>
                    </p>
                    <p class="c7">
                        <span class="c16 c0"></span>
                    </p>
                </div>
            </div>

            <div class="work-experience-list">
                <div>
                    <div>
                        <p class="c8">
                            <!-- <span class="level level-1">2</span> -->
                            <span class="c28 c19">Sales Manager</span>
                        </p>
                        <p class="c10 clear-both">
                            <span class="c21">Lidl, Vangedevej, Dyssegaard</span>
                        </p>
                        <p class="c10 experience-period">
                            <span class="c21">May-sep. 2023</span>
                        </p>
                        <p class="c10 experience-type">
                            <span class="c21">Full-time</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="work-experience-list">
                <div>
                    <!-- <div style="clear: both;margin-top: 100px;"> -->
                    <p class="c8">
                        <!-- <span class="level level-1">3</span> -->
                        <span class="c28 c19">Sales Manager</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="c21">Netto, Frederikssundsvej, Kbh NV</span>
                    </p>
                    <p class="c10 experience-period">
                        <span class="c21">May 2022 - jan. 2023</span>
                    </p>
                    <p class="c10 experience-type">
                        <span class="c21">Full-time</span>
                    </p>
                </div>
            </div>

            <div class="work-experience-list">
                <div>
                    <p class="c8">
                        <!-- <span class="level level-1">4</span> -->
                        <span class="c28 c19">Full Stack Developer</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="c21">Serento, Remote</span>
                    </p>
                    <p class="c10 experience-period">
                        <span class="c21">Aug-oct. 2021</span>
                    </p>
                    <p class="c10 experience-type">
                        <span class="c21">Internship/Full-time</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="work-skills-item">PHP</span>
                        <span class="work-skills-item">MySQL</span>
                        <span class="work-skills-item">HTML/CSS</span>
                        <span class="work-skills-item">SCSS</span>
                        <span class="work-skills-item">JavaScript/jQuery</span>
                        <span class="work-skills-item">Webpack</span>
                        <span class="work-skills-item">Git/SourceTree</span>
                    </p>
                    <p class="c10">
                        <span class="c14">During my web development PBA on the internship, I worked on developing a simple
                            SEO analysis tool.</span>
                    </p>
                    <p class="c7"> </p>
                </div>
            </div>

            <div class="work-experience-list">
                <div>
                    <p class="c8">
                        <span class="c28 c19">Assistant Manager</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="c21">Netto, Bagsværd Hovedgade</span>
                    </p>
                    <p class="c10 experience-period">
                        <span class="c21">Year 2021</span>
                    </p>
                    <p class="c10 experience-type">
                        <span class="c21">Full-time</span>
                    </p>
                </div>
            </div>

            <div class="work-experience-list">
                <div>
                    <p class="c8">
                        <span class="c28 c19">Founder&amp;Partner, Full-stack Developer</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="c21">SEObetter, Remote</span>
                    </p>
                    <p class="c10 experience-period">
                        <span class="c21">Jul. 2012 - aug. 2021</span>
                    </p>
                    <p class="c10 experience-type">
                        <span class="c21">Part-time/Student</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="work-skills-item">PHP</span>
                        <span class="work-skills-item">MySQL</span>
                        <span class="work-skills-item">HTML/CSS</span>
                        <span class="work-skills-item">JavaScript/jQuery</span>
                    </p>
                    <p class="c10">
                        <span class="c14 c47">I developed a website analytics platform, learned a lot along the way, and
                            started over at different points when I had learned something ground-breaking.</span>
                    </p>
                    <p class="c10">
                        <span class="c14 c47">The platform was reminiscent of and inspired by Google Analytics and
                            Hotjar.</span>
                    </p>
                </div>
            </div>

            <div class="work-experience-list">
                <div>
                    <p class="c8">
                        <span class="c28 c19">Frontend Developer</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="c21">HTML24, Kbh S.</span>
                    </p>
                    <p class="c10 experience-period">
                        <span class="c21">Aug - nov. 2019</span>
                    </p>
                    <p class="c10 experience-type">
                        <span class="c21">Internship/Full-time</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="work-skills-item">PHP</span>
                        <span class="work-skills-item">WP+WC</span>
                        <span class="work-skills-item">ACF</span>
                        <span class="work-skills-item">Docker+Gulp</span>
                        <span class="work-skills-item">HTML/CSS</span>
                        <span class="work-skills-item">SCSS/Stylus</span>
                        <span class="work-skills-item">Bootstrap</span>
                        <span class="work-skills-item">JavaScript/jQuery</span>
                        <span class="work-skills-item">Git/SourceTree</span>
                    </p>
                    <p class="c10">
                        <span class="c14 c47">During my computer science AP, I worked agile in a Scrum-like setup during the
                            internship.</span>
                    </p>
                    <p class="c10">
                        <span class="c14 c47">There I contributed to an optimization of the Glyptotek's WordPress website
                            and webshop.</span>
                    </p>
                </div>
            </div>

            <div class="work-experience-list">
                <div>
                    <p class="c8">
                        <span class="c28 c19">Freelance Webdeveloper</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="c21">Webdesigner 18, Remote</span>
                    </p>
                    <p class="c10 experience-period">
                        <span class="c21">2015 - 2017</span>
                    </p>
                    <p class="c10 experience-type">
                        <span class="c21">Freelance/Ad-hoc</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="work-skills-item">PHP</span>
                        <span class="work-skills-item">Joomla</span>
                        <span class="work-skills-item">HTML/CSS</span>
                        <span class="work-skills-item">JavaScript/jQuery</span>
                    </p>
                    <p class="c7"> </p>
                </div>
            </div>

            <div class="work-experience-list">
                <div>
                    <p class="c8">
                        <span class="c28 c19">Joomla Developer</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="c21">redWEB, Odense</span>
                    </p>
                    <p class="c10 experience-period">
                        <span class="c21">Apr. 2011 - jul. 2012</span>
                    </p>
                    <p class="c10 experience-type">
                        <span class="c21">Part-time/Student</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="work-skills-item">PHP</span>
                        <span class="work-skills-item">Joomla</span>
                        <span class="work-skills-item">HTML/CSS</span>
                        <span class="work-skills-item">JavaScript/jQuery</span>
                    </p>
                    <p class="c10">
                        <span class="c14">During my web developer EUD, I worked for a year and a half as a student Joomla
                            CMS developer, where I contributed to approx. 6 new websites.</span>
                    </p>
                    <p class="c7"> </p>
                </div>
            </div>

            <div class="work-experience-list">
                <div>
                    <p class="c8">
                        <span class="c28 c19">Full stack developer</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="c21">Constant Solutions, Remote</span>
                    </p>
                    <p class="c10 experience-period">
                        <span class="c21">2009 - 2013</span>
                    </p>
                    <p class="c10 experience-type">
                        <span class="c21">Freelance/Ad-hoc</span>
                    </p>
                    <p class="c10 clear-both">
                        <span class="work-skills-item">PHP</span>
                        <span class="work-skills-item">MySQL</span>
                        <span class="work-skills-item">HTML/CSS</span>
                        <span class="work-skills-item">JavaScript/jQuery</span>
                    </p>
                    <p class="c10">
                        <span class="c14">I collaborated for a number of years with an independent developer, where I was
                            given tasks on an ad-hoc basis.</span>
                    </p>
                </div>
            </div>

        </div>
    </article>

    <article class="wp-block-group page-content cv-wrapper">
        <div class="interests-techstack-educations-wrapper">
            <div class="interests-techstack-container">
                <div class="interests">
                    <h3 class="c38" id="interests">Interests</h3>
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
                    <h3 class="c38" id="codingskills">Coding-skills</h3>
                    <strong>Backend</strong>
                    <div class="techstack-group">
                        <span class="techstack-item">PHP</span>
                        <span class="techstack-item">Laravel</span>
                        <span class="techstack-item">JSON</span>
                        <span class="techstack-item">JWT</span>
                    </div>
                    <div class="techstack-group">
                        <span class="techstack-item">WordPress</span>
                        <span class="techstack-item">ACF</span>
                        <span class="techstack-item">WooCommerce</span>
                    </div>
                    <div class="techstack-group">
                        <span class="techstack-item">Node.js</span>
                        <span class="techstack-item">Express</span>
                        <span class="techstack-item">Prisma</span>
                        <span class="techstack-item">Socket</span>
                    </div>
                    <div class="techstack-group">
                        <span class="techstack-item">MySQL</span>
                        <span class="techstack-item">SQLite</span>
                        <span class="techstack-item">PostgreSQL</span>
                    </div>
                    <strong>Frontend</strong>
                    <div class="techstack-group">
                        <span class="techstack-item">TypeScript</span>
                        <span class="techstack-item">React/Next.js</span>
                        <span class="techstack-item">React Native</span>
                    </div>
                    <div class="techstack-group">
                        <span class="techstack-item">Redux</span>
                        <span class="techstack-item">Axios</span>
                        <span class="techstack-item">Tailwind</span>
                        <span class="techstack-item">SCSS</span>
                    </div>
                    <div class="techstack-group">
                        <span class="techstack-item">CSS Modules</span>
                        <span class="techstack-item">Styled Components</span>
                        <span class="techstack-item">Material Design</span>
                    </div>
                    <strong>DevOps</strong>
                    <div class="techstack-group">
                        <span class="techstack-item">PHPUnit</span>
                        <span class="techstack-item">Jest</span>
                        <span class="techstack-item">Google Cloud</span>
                        <span class="techstack-item">Firebase</span>
                    </div>
                    <div class="techstack-group">
                        <span class="techstack-item">Supabase</span>
                        <span class="techstack-item">Git</span>
                        <span class="techstack-item">GitHub Actions</span>
                    </div>
                </div>
            </div>
            <h3 id="h.39j0ues6x9x2" class="c38">Educations</h3>
            <div class="educations-and-skills" id="educations">
                <!-- <div class="educations-list"> -->
                <!-- <div> -->
                <div class="education-list-item">
                    <p class="c10" style="margin-top: 10px"><span class="c16 c25 c19">Bachelor of Web Development</span></p>
                    <p class="c8"><span class="c21">Sep. 2020 - Jan. 2022</span></p>
                    <p class="c10"><span class="c2">Copenhagen Business Academy</span></p>
                    <p class="c10"><span class="c2">2800 Kgs. Lyngby</span></p>
                    <p class="c10"><i class="c25 c14">
                            Gained knowledge and skills in various aspects of web development, including both frontend and
                            backend technologies. Achieved good grades in programming courses.
                        </i></p>
                </div>
                <div class="education-list-item">
                    <p class="c10" style="margin-top: 10px"><span class="c16 c25 c19">Computer Science</span></p>
                    <p class="c8"><span class="c21">Aug. 2017 - Jan. 2020</span></p>
                    <p class="c10"><span class="c2">Københavns EA</span></p>
                    <p class="c10"><span class="c2">2400 Copenhagen NW</span></p>
                    <p class="c10"><i class="c25 c14">
                            Learned foundational concepts of computer science, including algorithms, data structures, and
                            object-oriented programming.
                        </i></p>
                </div>
                <div class="education-list-item">
                    <p class="c10" style="margin-top: 10px"><span class="c28 c19">High School</span></p>
                    <p class="c8"><span class="c21">Jan. 2013 - Feb. 2016</span></p>
                    <p class="c10"><span class="c2">Copenhagen VUC</span></p>
                    <p class="c10"><span class="c2">1165 Copenhagen K</span></p>
                </div>
                <div class="education-list-item">
                    <p class="c10" style="margin-top: 10px"><span class="c28 c19">Web-developer</span></p>
                    <p class="c8"><span class="c21">Jan. 2011 - Jul. 2012</span></p>
                    <p class="c10"><span class="c2">Southern Danish Business School</span></p>
                    <p class="c10"><span class="c2">5230 Odense</span></p>
                </div>
                <div class="education-list-item">
                    <p class="c10" style="margin-top: 10px"><span class="c19 c28">Computer Technician Basic Course</span>
                    </p>
                    <p class="c8"><span class="c21">Aug. 2010 - Dec. 2010</span></p>
                    <p class="c10"><span class="c2">Zealand Business College</span></p>
                    <p class="c10"><span class="c2">4100 Ringsted</span></p>
                </div>
                <div class="education-list-item">
                    <p class="c10" style="margin-top: 10px"><span class="c28 c19">Elementary School</span></p>
                    <p class="c8"><span class="c21">2008 - 2010</span></p>
                    <p class="c10"><span class="c2">Pederstrup Efterskole</span></p>
                    <p class="c10"><span class="c28 c34">4943 Torrig L</span></p>
                </div>
                <!-- </div> -->
                <!-- </div> -->
                <!--<div class="skills-list">
                    <div>
                        <h1 id="h.e8omzpmjsbi" class="c38">Developer<span class="c34 c43">-</span>skills</h1>
                        <p class="c8"><span class="c16 c31 c19">Levels are between:</span></p>
                        <p class="c8" style="clear: both;margin-bottom: 6px;"><span class="level level-1">1</span><span
                                class="c22">Beginner</span></p>
                        <p class="c8" style="clear: both;margin-bottom: 6px;"><span class="level level-2">2</span><span
                                class="c22">Good knowledge</span></p>
                        <p class="c8" style="clear: both;margin-bottom: 6px;"><span class="level level-3">3</span><span
                                class="c22">Skilled</span></p>
                        <p class="c8" style="clear: both;margin-bottom: 6px;"><span class="level level-4">4</span><span
                                class="c22">Experienced</span></p>
                        <p class="c8" style="clear: both;margin-bottom: 6px;"><span class="level level-5">5</span><span
                                class="c22">Very experienced</span></p>
                        <p class="c7"> </p>
                        <div class="skills-category-title">Programming:</div>
                        <div class="skills-grid"><span class="skills-item"> <span class="level level-5">5</span>PHP </span>
                            <span class="skills-item"> <span class="level level-3">3</span>Laravel </span> <span
                                class="skills-item"> <span class="level level-2">2</span>Python </span> <span
                                class="skills-item"> <span class="level level-3">3</span>Java </span> <span class="skills-item">
                                <span class="level level-3">3</span>Spring Boot </span> <span class="skills-item"> <span
                                    class="level level-2">2</span>C#/.NET </span>
                        </div>
                        <div class="skills-category-title">Databases:</div>
                        <div class="skills-grid"><span class="skills-item"> <span class="level level-5">5</span>MySQL </span>
                            <span class="skills-item"> <span class="level level-4">4</span>NoSQL </span> <span
                                class="skills-item"> <span class="level level-1">1</span>GraphQL </span> <span
                                class="skills-item" style="grid-column: span 2 / span 2;"> <span
                                    class="level level-3">3</span>Firebase & Firestore </span> <span class="skills-item"> <span
                                    class="level level-3">3</span>Eloquent </span> <span class="skills-item"
                                style="grid-column: span 2 / span 2;"> <span class="level level-1">1</span>Prisma schema </span>
                        </div>
                        <div class="skills-category-title">JavaScript:</div>
                        <div class="skills-grid"><span class="skills-item"> <span class="level level-5">5</span>JavaScript
                            </span> <span class="skills-item"> <span class="level level-3">3</span>TypeScript </span> <span
                                class="skills-item"> <span class="level level-5">5</span>jQuery </span> <span
                                class="skills-item" style="grid-column: span 2 / span 2;"> <span
                                    class="level level-4">4</span>React/Next.js </span> <span class="skills-item"> <span
                                    class="level level-2">2</span>Vue </span> <span class="skills-item"> <span
                                    class="level level-3">3</span>Redux </span> <span class="skills-item"> <span
                                    class="level level-4">4</span>JSX </span> <span class="skills-item"> <span
                                    class="level level-1">1</span>Angular </span></div>
                        <div class="skills-category-title">Frontend:</div>
                        <div class="skills-grid"><span class="skills-item"> <span class="level level-5">5</span>HTML </span>
                            <span class="skills-item"> <span class="level level-5">5</span>CSS </span> <span
                                class="skills-item"> <span class="level level-4">4</span>SCSS </span> <span class="skills-item"
                                style="grid-column: span 2 / span 2;"> <span class="level level-4">4</span>Tailwind CSS </span>
                            <span class="skills-item"> <span class="level level-1">1</span>Bootstrap </span> <span
                                class="skills-item" style="grid-column: span 2 / span 2;"> <span
                                    class="level level-1">1</span>Material Design </span>
                        </div>
                        <div class="skills-category-title">CMS:</div>
                        <div class="skills-grid"><span class="skills-item" style="grid-column: span 3 / span 3;"> <span
                                    class="level level-4">4</span>WordPress + ACF + WooCommerce </span> <span
                                class="skills-item" style="grid-column: span 3 / span 3;"> <span
                                    class="level level-4">4</span>Joomla! CMS </span> <span class="skills-item"
                                style="grid-column: span 3 / span 3;"> <span class="level level-2">2</span>Headless WordPress
                            </span></div>
                        <div class="skills-category-title">Webshop-related:</div>
                        <div class="skills-grid"><span class="skills-item" style="grid-column: span 3 / span 3;"> <span
                                    class="level level-2">2</span>ShipMondo freight-handling </span> <span class="skills-item"
                                style="grid-column: span 3 / span 3;"> <span class="level level-3">3</span>QuickPay, Nets/DIBS
                                payment-gateway </span></div>
                        <div class="skills-category-title">DevOps:</div>
                        <div class="skills-grid"><span class="skills-item" style="grid-column: span 3 / span 3;"> <span
                                    class="level level-4">4</span>Git version control </span> <span class="skills-item"
                                style="grid-column: span 3 / span 3;"> <span class="level level-4">4</span>Webpack/Gulp/NPM
                            </span> <span class="skills-item" style="grid-column: span 3 / span 3;"> <span
                                    class="level level-2">2</span>Jest, CI/CD, Github Actions </span> <span class="skills-item"
                                style="grid-column: span 3 / span 3;"> <span class="level level-2">2</span>Docker, Composer
                            </span></div>
                    </div>
                </div>-->
            </div>
        </div>
    </article>
</main>
