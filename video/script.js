let currentIndex = 0;

function moveCarousel(direction) {
    const container = document.querySelector('.video-container');
    const videos = document.querySelectorAll('.video-container video');
    const totalVideos = videos.length;

    currentIndex += direction;

    if (currentIndex < 0) {
        currentIndex = totalVideos - 1;
    } else if (currentIndex >= totalVideos) {
        currentIndex = 0;
    }

    const offset = -currentIndex * 800; 
    container.style.transform = `translateX(${offset}px)`;
}