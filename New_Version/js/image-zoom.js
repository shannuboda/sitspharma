document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.clickable');

    images.forEach(image => {
        image.addEventListener('click', () => {
            if (image.requestFullscreen) {
                image.requestFullscreen();
            } else if (image.mozRequestFullScreen) { // Firefox
                image.mozRequestFullScreen();
            } else if (image.webkitRequestFullscreen) { // Chrome, Safari and Opera
                image.webkitRequestFullscreen();
            } else if (image.msRequestFullscreen) { // IE/Edge
                image.msRequestFullscreen();
            }
        });
    });
});
