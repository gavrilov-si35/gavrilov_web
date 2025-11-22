document.addEventListener('DOMContentLoaded', () => {
    const image = document.querySelector('.image');
    const button = document.querySelector('.button--change');

    const images = [
        'https://placehold.co/200x200.png?text=Image+1',
        'https://placehold.co/200x200.png?text=Image+2',
        'https://placehold.co/200x200.png?text=Image+3'
    ];

    let currentImageIndex = 0;

    button.addEventListener('click', () => {
        currentImageIndex += 1;
        if (currentImageIndex >= images.length) {
            currentImageIndex = 0;
        }
        image.src = images[currentImageIndex];
    });
});