document.addEventListener('DOMContentLoaded', () => {
    const list = document.querySelector('.list');
    const input = document.querySelector('.input');
    const button = document.querySelector('.button-add');

    button.addEventListener('click', () => {
        const text = input.value.trim();
        if (text === '') {
            return;
        }
        const item = document.createElement('li');
        item.textContent = text;
        list.appendChild(item);
        input.value = '';
    });
});