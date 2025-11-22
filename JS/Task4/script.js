document.addEventListener('DOMContentLoaded', () => {
    let count = 0;
    const valueEl = document.querySelector('.counter__value');
    const incrementBtn = document.querySelector('.button--increment');

    incrementBtn.addEventListener('click', () => {
        count += 1;
        valueEl.textContent = String(count);
    });
});