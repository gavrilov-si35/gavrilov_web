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
        if (currentImageIndex >= images.length) {
            currentImageIndex = 0;
        }
        image.src = images[currentImageIndex];
        currentImageIndex += 1;
    });
});
