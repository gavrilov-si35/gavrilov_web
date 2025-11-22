document.addEventListener('DOMContentLoaded', () => {
    const box = document.querySelector('.box');
    const toggleBtn = document.querySelector('.btn--toggle');
    toggleBtn.addEventListener('click', () => {
        box.classList.toggle('hidden');
    });
});
