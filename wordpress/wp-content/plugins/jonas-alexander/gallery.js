let galleryAlbums = []
let currentGallery = 'Web'; // Default gallery
let currentProject = 'Jonas-Alexander'; // Default project

function initializeGalleryFromPHP(galleryData) {
    galleryAlbums = galleryData;
}

function openLightBox(image, gallery, project) {
    currentGallery = gallery;
    currentProject = project;
    const lightbox = document.querySelector('.gallery-lightbox');
    const galleryImages = galleryAlbums[gallery];
    const galleryImageKeys = Object.keys(galleryImages);
    const galleryImageValues = Object.values(galleryImages);
    const imagePath = `/wp-content/uploads/references/gallery/${project.toLowerCase()}-${gallery.toLowerCase()}/` + image;

    if (image.includes('.mp4') || image.includes('.mov') || image.length > 6) {
        var videoSource = lightbox.querySelector('video source');
        var videoElement = lightbox.querySelector('video');

        if (image.length > 6) {
            videoSource.src = `https://drive.google.com/file/d/${image}/view`
        } else {
            videoSource.src = imagePath;
        }
        videoElement.classList.remove('hidden');
        videoElement.load(); // This line ensures the video element reloads with the new source
        videoElement.classList.remove('hidden');
        lightbox.querySelector('img').classList.add('hidden');
        lightbox.querySelector('img').src = "#";
    } else {
        lightbox.querySelector('img').src = imagePath
        lightbox.querySelector('video').classList.add('hidden');
        lightbox.querySelector('img').classList.remove('hidden');
        lightbox.querySelector('video source').src = "#";
    }

    const imageIndex = galleryImageValues.indexOf(image);
    lightbox.querySelector('.gallery-image-index').textContent = imageIndex + 1;
    lightbox.querySelector('.gallery-image-caption').textContent = galleryImageKeys[imageIndex];
    lightbox.querySelector('.gallery-image-total').textContent = galleryImageValues.length;
    lightbox.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeLightBox() {
    const lightbox = document.querySelector('.gallery-lightbox');
    lightbox.querySelector('img').src = "#";
    lightbox.classList.add('hidden');
    document.body.style.overflow = '';
}

function getCurrentMediaSrc(lightbox) {
    // Determine if the current media is a video or an image
    if (!lightbox.querySelector('video').classList.contains('hidden')) {
        return lightbox.querySelector('video source').src.split('/').pop();
    } else {
        return lightbox.querySelector('img').src.split('/').pop();
    }
}

function navigateMedia(offset) {
    const lightbox = document.querySelector('.gallery-lightbox');
    const currentMediaSrc = getCurrentMediaSrc(lightbox);
    const galleryImages = Object.values(galleryAlbums[currentGallery]);
    const currentIndex = galleryImages.indexOf(currentMediaSrc);

    // Calculate the new index based on the offset
    const newIndex = (currentIndex + offset + galleryImages.length) % galleryImages.length;
    const nextMedia = galleryImages[newIndex];

    openLightBox(nextMedia, currentGallery, currentProject);
}

function openPreviousImage() {
    navigateMedia(-1);
}

function openNextImage() {
    navigateMedia(1);
}

document.addEventListener('DOMContentLoaded', function () {
    const lightbox = document.querySelector('.gallery-lightbox');
    const lightboxImage = lightbox.querySelector('img');

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            if (!lightbox.classList.contains('hidden')) {
                closeLightBox();
            }
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'ArrowRight') {
            if (!lightbox.classList.contains('hidden')) {
                openNextImage();
            }
        } else if (event.key === 'ArrowLeft') {
            if (!lightbox.classList.contains('hidden')) {
                openPreviousImage();
            }
        }
    });
});
