document.addEventListener('DOMContentLoaded', () => {
    const textEl = document.querySelector('.text');
    const select = document.querySelector('.select-color');

    select.addEventListener('change', () => {
        const color = select.value;
        textEl.style.color = color || '';
    });
});