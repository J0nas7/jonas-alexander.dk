document.addEventListener("DOMContentLoaded", function () {
    const section = document.querySelector(".scrollytelling-wrapper");

    window.addEventListener("scroll", () => {
        const rect = section.getBoundingClientRect();
        const windowHeight = window.innerHeight;

        const progress = Math.min(
            Math.max((windowHeight - rect.top) / (rect.height), 0),
            1
        );

        const scrollY = window.scrollY;

        console.log(`ScrollY: ${scrollY}, Progress: ${progress.toFixed(2)}`);

        animate(progress, scrollY);
    });

    const jumbotron = document.querySelector(".page-content.jumbotron");
    const ilovecoding = document.querySelector(".page-content.about-me");
    const projects = document.querySelector(".page-content.portfolio-projects");
    const contactdetails = document.querySelector(".page-content.cv-wrapper.cv-contact-details");
    const interestsTechstack = document.querySelector(".page-content.cv-wrapper:not(.cv-contact-details)");

    function clamp(val, min, max) {
        return Math.max(min, Math.min(max, val));
    }

    function rangeProgress(scrollY, start, end) {
        return clamp((scrollY - start) / (end - start), 0, 1);
    }

    function animate(progress, scrollY) {
        // --- JUMBOTRON (0 → 400)
        const jOpacity = 1 - rangeProgress(scrollY, 0, 400);
        jumbotron.style.opacity = jOpacity;

        // --- ILOVECODING (500 → 1000)
        const iIn = rangeProgress(scrollY, 500, 600);
        const iOut = rangeProgress(scrollY, 900, 1000);
        let t = (scrollY - 500) / 100;
        ilovecoding.style.opacity = iIn * (1 - iOut);
        ilovecoding.style.pointerEvents = t > 0.01 ? "auto" : "none";

        // --- PROJECTS (1000 → 1500)
        const visible = scrollY >= 1000 && scrollY <= 1500;
        projects.style.opacity = visible ? 1 : 0;
        projects.style.pointerEvents = visible ? "auto" : "none";

        // --- CONTACT DETAILS (1500 → 2500)
        const cIn = rangeProgress(scrollY, 1500, 1600);
        const cOut = rangeProgress(scrollY, 1800, 1900);
        t = (scrollY - 1500) / 100;
        contactdetails.style.opacity = cIn * (1 - cOut);
        contactdetails.style.pointerEvents = t > 0.01 ? "auto" : "none";

        // --- INTERESTS/TECHSTACK (1900 → 4200)
        const sIn = rangeProgress(scrollY, 1900, 2000);
        const sOut = rangeProgress(scrollY, 4000, 4200);
        t = (scrollY - 1900) / 100;
        interestsTechstack.style.opacity = sIn * (1 - sOut);
        interestsTechstack.style.pointerEvents = t > 0.01 ? "auto" : "none";
    }

    // Expose goToScene globally for navigation clicks
    window.goToScene = function (name) {
        const positions = {
            jonas: 0,
            ilovecoding: 600,
            projects: 1000,
            contactinfo: 1500,
            intereststechstack: 2600
        };

        const target = positions[name];

        if (typeof target === "number") {
            window.scrollTo({
                top: target,
                behavior: "smooth"
            });
        }
    };
});

// Particle animation on jumbotron
document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById("particleCanvas");
    const ctx = canvas.getContext("2d");

    let particles = [];
    const particleCount = 360;

    const mouse = {
        x: null,
        y: null,
        radius: 120
    };

    function resize() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    resize();
    window.addEventListener("resize", resize);

    // Track mouse on jumbotron
    document.querySelector(".page-content.jumbotron").addEventListener("mousemove", (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });

    document.querySelector(".page-content.jumbotron").addEventListener("mouseleave", () => {
        mouse.x = null;
        mouse.y = null;
    });

    // Particle class
    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;

            this.baseX = this.x;
            this.baseY = this.y;

            this.size = Math.random() * 2 + 1;
            this.vx = 0;
            this.vy = 0;
        }

        update() {
            // Distance to mouse
            if (mouse.x !== null) {
                let dx = this.x - mouse.x;
                let dy = this.y - mouse.y;
                let distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < mouse.radius) {
                    let force = (mouse.radius - distance) / mouse.radius;
                    let angle = Math.atan2(dy, dx);

                    this.vx += Math.cos(angle) * force * 2;
                    this.vy += Math.sin(angle) * force * 2;
                }
            }

            // 🌊 VERY gentle pull back to base (reduced a lot)
            this.vx += (this.baseX - this.x) * 0.002;
            this.vy += (this.baseY - this.y) * 0.002;

            // ✨ Slow drifting motion (the key part)
            this.vx += (Math.random() - 0.5) * 0.035;
            this.vy += (Math.random() - 0.5) * 0.035;

            // Smooth it out
            this.vx *= 0.96;
            this.vy *= 0.96;

            this.x += this.vx;
            this.y += this.vy;
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = "#38bdf8";
            ctx.fill();
        }
    }

    // Init particles
    function init() {
        particles = [];
        for (let i = 0; i < particleCount; i++) {
            particles.push(new Particle());
        }
    }
    init();

    // Animation loop
    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        for (let p of particles) {
            p.update();
            p.draw();
        }

        requestAnimationFrame(animate);
    }
    animate();
});

// Cursor glow effect
document.addEventListener("DOMContentLoaded", function () {
    // 🌟 CURSOR GLOW (mikrointeraktion)
    const glow = document.createElement("div");
    glow.classList.add("cursor-glow");
    document.body.appendChild(glow);

    document.addEventListener("mousemove", (e) => {
        glow.style.left = e.clientX + "px";
        glow.style.top = e.clientY + "px";
    });
});

// Magnetic hover effect
document.addEventListener("DOMContentLoaded", function () {
    const magnets = document.querySelectorAll(".magnetic");

    magnets.forEach(el => {
        el.addEventListener("mousemove", e => {
            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            el.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
        });

        el.addEventListener("mouseleave", () => {
            el.style.transform = `translate(0,0)`;
        });
    });
});

// Pause carousel animation on hover
document.addEventListener("DOMContentLoaded", function () {
    const interestsContainer = document.querySelector('.interests-carousel-inner');
    if (!interestsContainer) return

    interestsContainer.addEventListener('mouseover', () => {
        interestsContainer.style.animationPlayState = 'paused'; // Pause on hover
    });
    interestsContainer.addEventListener('mouseout', () => {
        interestsContainer.style.animationPlayState = 'running'; // Resume after hover
    });
});

// Three.js particle system in jumbotron
document.addEventListener("DOMContentLoaded", function () {
    console.log("Portfolio Loaded!");

    // Three.js Setup
    let scene = new THREE.Scene();
    let camera = new THREE.PerspectiveCamera(75, window.innerWidth / 300, 0.1, 1000);
    let renderer = new THREE.WebGLRenderer({ alpha: true });

    renderer.setSize(window.innerWidth, 300);
    const threeContainer = document.getElementById("three-container")
    if (threeContainer) threeContainer.appendChild(renderer.domElement);

    // Create Particle System
    let particles = new THREE.BufferGeometry();
    let particleCount = 200;
    let positions = new Float32Array(particleCount * 3);

    for (let i = 0; i < particleCount * 3; i++) {
        positions[i] = (Math.random() - 0.5) * 10;
    }

    particles.setAttribute("position", new THREE.BufferAttribute(positions, 3));

    let material = new THREE.PointsMaterial({
        color: 0xffffff,
        size: 0.05
    });

    let points = new THREE.Points(particles, material);
    scene.add(points);

    // Camera Position
    camera.position.z = 3;

    // Animate Particles
    function animate() {
        requestAnimationFrame(animate);
        points.rotation.y += 0.001;
        renderer.render(scene, camera);
    }

    animate();

    // Resize Handling
    window.addEventListener("resize", () => {
        camera.aspect = window.innerWidth / 300;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, 300);
    });
});

// Accessibility: Toggle menu open/close for screen readers and keyboard users
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.querySelector('.navigator-toggle');
    const navMenu = document.getElementById('page-navigator-menu');

    // Toggle menu visibility
    if (toggleBtn) {
        toggleBtn.addEventListener('click', function () {
            const expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !expanded);
            navMenu.style.display = expanded ? 'none' : 'flex';
            // toggleBtn.style.display = expanded ? 'block' : 'none';

            const checkbox = document.getElementById('navigator-toggle');
            checkbox.checked = !checkbox.checked;
        });
    }

    // Close menu when focus leaves nav
    if (navMenu) {
        navMenu.addEventListener('focusout', function (e) {
            if (!navMenu.contains(e.relatedTarget)) {
                toggleBtn.setAttribute('aria-expanded', 'false');
                navMenu.style.display = 'none';
                toggleBtn.style.display = 'block';
            }
        });
    }
});

// Image tilt effect on hover
document.querySelectorAll('.image-container').forEach(container => {
    const image = container.querySelector('.hover-image');

    container.addEventListener('mousemove', (e) => {
        const rect = container.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width) * 2 - 1; // -1 to 1
        const y = ((e.clientY - rect.top) / rect.height) * 2 - 1; // -1 to 1

        const maxTilt = 10; // Maximum tilt in degrees
        const tiltX = maxTilt * x;
        const tiltY = maxTilt * y;

        image.style.transform = `scale(1.1) rotateX(${-tiltY}deg) rotateY(${tiltX}deg)`;
    });

    container.addEventListener('mouseleave', () => {
        image.style.transform = 'scale(1) rotateX(0) rotateY(0)';
    });
});

// Wrap each letter in .jump-letters with a span for individual animation
document.querySelectorAll('.jump-letters').forEach(element => {
    element.innerHTML = element.textContent.split('').map(letter => {
        if (letter === ' ') {
            return `<span class="letter space" aria-hidden="true">&nbsp;</span>`;
        }
        return `<span class="letter" aria-hidden="true">${letter}</span>`;
    }).join('');
});

// Utility function to check if an element is in the viewport
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

/*// Function to get a random integer between min and max (inclusive)
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

// Select all the elements with jump-letters class
const lines = document.querySelectorAll('.i-am-jonas .jump-letters');
let activeLetterIndices = Array.from({ length: lines.length }, () => null);

function pickRandomLetter() {
    lines.forEach((line, lineIndex) => {
        // Get the current text content
        const text = line.textContent;

        // Reset inner HTML for each line to re-apply letter classes
        line.innerHTML = text
            .split("")
            .map((char, charIndex) => `<span class="letter">${char}</span>`)
            .join("");

        // Get all span.letter elements within the line
        const letters = line.querySelectorAll('.letter');

        // Remove the 'active' class from the previous active letter, if any
        if (activeLetterIndices[lineIndex] !== null) {
            letters[activeLetterIndices[lineIndex]].classList.remove('active');
        }

        // Pick a new random letter within this line
        const randomIndex = getRandomInt(0, letters.length - 1);
        activeLetterIndices[lineIndex] = randomIndex;

        // Add the 'active' class to the randomly chosen letter
        letters[randomIndex].classList.add('active');
    });
}

// Run the pickRandomLetter function every second
setInterval(pickRandomLetter, 1000);

// Initial call to set an active letter immediately
pickRandomLetter();*/

// Function to get a random integer between min and max (inclusive)
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

// Select all the .letter elements except spaces
const letters = document.querySelectorAll('.i-am-jonas .letter:not(.space)');
let activeIndex = null;

// Function to pick a random letter and add the 'active' class
function pickRandomLetter() {
    // Remove the 'active' class from the currently active letter, if any
    if (activeIndex !== null) {
        const activeLetter = letters[activeIndex];
        if (activeLetter) {
            activeLetter.classList.remove('active');
        }
    }

    // Get a new random index
    activeIndex = getRandomInt(0, letters.length - 1);

    const letterElement = letters[activeIndex];
    if (letterElement && isElementInViewport(letterElement)) {
        // Add the 'active' class to the new random letter
        letterElement.classList.add('active');
    }
}

// Run the pickRandomLetter function every second
setInterval(pickRandomLetter, 1000);

// Initial call to set an active letter immediately
pickRandomLetter();

// Tech text rotator with letter-by-letter animation
function TechTextRotator() {
    const searchTerms = [
        "C# || PHP",
        ".NET || Laravel",
        "React/Next.js",
        "TypeScript",
        "React Native",
        "Redis",
        "Elasticsearch",
        "Redux",
        "Tailwind & SCSS",
    ];

    let displayedText = "C# || PHP"; // Initial displayed text
    let currentIndex = 0;                // Start index
    let isSwitching = false;
    const displayElement = document.getElementById("tech-text");

    // Function to handle text switching with delay (similar to React useEffect with dependencies)
    const handleSwitch = async () => {
        const currentTerm = searchTerms[currentIndex];
        const nextTerm = searchTerms[(currentIndex + 1) % searchTerms.length];

        // Step 1: Remove letters from the current search term
        for (let i = currentTerm.length; i >= 0; i--) {
            await new Promise(resolve => setTimeout(resolve, 100));
            displayedText = `${currentTerm.slice(0, i)}`;
            updateDisplayedText(displayedText);
        }

        // Step 2: Add letters for the next search term
        for (let i = 0; i <= nextTerm.length; i++) {
            await new Promise(resolve => setTimeout(resolve, 100));
            displayedText = `${nextTerm.slice(0, i)}`;
            updateDisplayedText(displayedText);
        }

        // Update the index to the next term in the array
        currentIndex = (currentIndex + 1) % searchTerms.length;
    };

    // Function to update the displayed text in the DOM
    const updateDisplayedText = (text) => {
        if (displayElement) {
            displayElement.textContent = text;
        }
    };

    // Set up interval to switch search terms
    setInterval(() => {
        if (!isSwitching && displayElement && isElementInViewport(displayElement)) {
            isSwitching = true;
            handleSwitch().then(() => {
                isSwitching = false;
            });
        }
    }, 2500); // Change every 2.5 seconds
}

// Initialize the text rotator and set up the DOM element for display
document.addEventListener("DOMContentLoaded", () => {
    TechTextRotator();
});

// Continuously updates the width of the `.text-reveal-hover-wrapper` element inside each `line`
document.addEventListener('DOMContentLoaded', function () {
    const lines = document.querySelectorAll('.text-reveal-line');

    function updateLines() {
        const viewportHeight = window.innerHeight;

        lines.forEach((line) => {
            const hoverWrapper = line.querySelector('.text-reveal-hover-wrapper');
            if (isElementInViewport(hoverWrapper)) {
                const rect = line.getBoundingClientRect();

                const elementCenter = rect.top + rect.height / 2;
                const start = viewportHeight; // element center is at bottom of viewport
                const end = viewportHeight / 2; // element center is at center of viewport

                let ratio = (start - elementCenter) / (start - end);
                ratio = Math.min(Math.max(ratio, 0), 1);

                hoverWrapper.style.width = `${ratio * 100}%`;
            }
        });

        requestAnimationFrame(updateLines); // Keep updating
    }

    requestAnimationFrame(updateLines);
});

// Adds the 'animate' class to each .slide-fade-wrapper
// when it is near the center of the lower half of the viewport,
// creating a staggered fade-in effect as the user scrolls down
document.addEventListener('DOMContentLoaded', function () {
    const wrappers = document.querySelectorAll('.slide-fade-wrapper');

    function checkPositions() {
        const viewportHeight = window.innerHeight;

        wrappers.forEach(wrapper => {
            if (wrapper.classList.contains('animate')) return

            const rect = wrapper.getBoundingClientRect();
            const elementCenter = rect.top + rect.height / 2;
            const lowerViewportCenter = viewportHeight * 3 / 4; // Center of the lower half of the viewport

            // Check if the element's center is near or above the center of the lower half of the viewport
            if (elementCenter <= lowerViewportCenter + 50) { // Allow a small threshold below center
                wrapper.classList.add('animate');
            }
        });

        requestAnimationFrame(checkPositions); // Continue checking positions
    }

    requestAnimationFrame(checkPositions);
});

// Navigation hovering floating rotating items
document.addEventListener('DOMContentLoaded', function () {
    const leftItems = document.querySelectorAll('.navigation-hovering-item.left');
    const rightItems = document.querySelectorAll('.navigation-hovering-item.right');

    // Animation parameters (can tweak)
    const driftAmplitudeX = 5;   // px horizontal drift
    const floatAmplitudeY = 10;  // px vertical float
    const tiltAmplitude = 10;    // deg rotation

    const driftSpeed = 0.2;      // cycles per second for drift X
    const floatSpeed = 0.05;      // cycles per second for float Y
    const tiltSpeed = 0.1;       // cycles per second for rotation

    let startTime = null;

    function animate(timestamp) {
        if (!startTime) startTime = timestamp;
        const elapsed = (timestamp - startTime) / 1000; // seconds

        leftItems.forEach((el, i) => {
            if (isElementInViewport(el)) {
                // phase offsets so each left item is slightly out of sync
                const phaseOffsetX = (i / leftItems.length) * 2 * Math.PI;
                const phaseOffsetY = (i / leftItems.length) * Math.PI;
                const phaseOffsetTilt = (i / leftItems.length) * Math.PI / 2;

                const x = driftAmplitudeX * Math.sin(2 * Math.PI * driftSpeed * elapsed + phaseOffsetX);
                const y = floatAmplitudeY * Math.sin(2 * Math.PI * floatSpeed * elapsed + phaseOffsetY);
                const rotation = tiltAmplitude * Math.sin(2 * Math.PI * tiltSpeed * elapsed + phaseOffsetTilt);

                el.style.transform = `translateX(${x.toFixed(2)}px) translateY(${y.toFixed(2)}px) rotate(${rotation.toFixed(2)}deg)`;
            }
        });

        rightItems.forEach((el, i) => {
            if (isElementInViewport(el)) {
                // Different base phase offsets for right items to desync from left items + among themselves
                const basePhase = Math.PI / 4;
                const phaseOffsetX = basePhase + (i / rightItems.length) * 2 * Math.PI;
                const phaseOffsetY = basePhase + (i / rightItems.length) * Math.PI;
                const phaseOffsetTilt = basePhase + (i / rightItems.length) * Math.PI / 2;

                const x = driftAmplitudeX * Math.sin(2 * Math.PI * driftSpeed * elapsed + phaseOffsetX);
                const y = floatAmplitudeY * Math.sin(2 * Math.PI * floatSpeed * elapsed + phaseOffsetY);
                const rotation = tiltAmplitude * Math.sin(2 * Math.PI * tiltSpeed * elapsed + phaseOffsetTilt);

                el.style.transform = `translateX(${x.toFixed(2)}px) translateY(${y.toFixed(2)}px) rotate(${rotation.toFixed(2)}deg)`;
            }
        });

        requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
});
