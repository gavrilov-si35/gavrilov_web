document.addEventListener('DOMContentLoaded', () => {
    const title = document.querySelector('.title');
    const button = document.querySelector('.button-change');

    button.addEventListener('click', () => {
        title.textContent = 'Заголовок изменен!';
    });
});