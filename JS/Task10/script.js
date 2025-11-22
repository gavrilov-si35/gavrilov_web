document.addEventListener('DOMContentLoaded', () => {
    const list = document.querySelector('.list');
    const addBtn = document.querySelector('.button--add');

    addBtn.addEventListener('click', () => {
        const item = document.createElement('li');
        item.className = 'list__item';
        item.textContent = 'Новый пункт';
        list.appendChild(item);
    });

    list.addEventListener('click', (event) => {
        const target = event.target;
        if (target.classList && target.classList.contains('list__item')) {
            target.textContent = 'Нажато!';
            target.classList.add('clicked');
        }
    });
});