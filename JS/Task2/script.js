document.addEventListener('DOMContentLoaded', () => {
    const box = document.querySelector('.box');
    const button = document.querySelector('.toggle-btn');

    button.textContent = 'Переключить стиль';

    button.addEventListener('click', () => {
        box.classList.toggle('highlight');
    });
});