document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.form');
    const inputText = document.querySelector('.form__input--text');
    const inputEmail = document.querySelector('.form__input--email');
    const message = document.querySelector('.message');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const textValue = inputText.value.trim();
        const emailValue = inputEmail.value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (textValue === '' || emailValue === '') {
            message.textContent = 'Ошибка: все поля должны быть заполнены';
            message.classList.remove('message--success');
            message.classList.add('message--error');
            return;
        }

        if (!emailPattern.test(emailValue)) {
            message.textContent = 'Ошибка: email введён неверно';
            message.classList.remove('message--success');
            message.classList.add('message--error');
            return;
        }

        message.textContent = 'Форма успешно отправлена (в консоль)!';
        message.classList.remove('message--error');
        message.classList.add('message--success');

        const formData = new FormData(form);
        console.log('Данные формы:');
        for (const [name, value] of formData.entries()) {
            console.log(`${name}: ${value}`);
        }
    });
});