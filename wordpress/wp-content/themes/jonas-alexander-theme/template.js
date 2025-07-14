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
            navMenu.style.display = expanded ? 'none' : 'block';
            toggleBtn.style.display = expanded ? 'block' : 'none';

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

document.querySelectorAll('.jump-letters').forEach(element => {
    element.innerHTML = element.textContent.split('').map(letter => {
        if (letter === ' ') {
            return `<span class="letter">&nbsp;</span>`;
        }
        return `<span class="letter">${letter}</span>`;
    }).join('');
});

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

// Select all the .letter elements
const letters = document.querySelectorAll('.i-am-jonas .letter');
let activeIndex = null;

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

function TechTextRotator() {
    const searchTerms = [
        "PHP",
        "Laravel",
        "React/Next.js",
        "TypeScript",
        "SQLite",
        "PostgreSQL",
        "React Native",
        "Redux",
        "Tailwind & SCSS",
        "Node.js",
        "REST API",
    ];

    let displayedText = "PHP"; // Initial displayed text
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

