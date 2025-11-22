document.addEventListener('DOMContentLoaded', () => {
    const list = document.querySelector('.list');
    const button = document.querySelector('.button--remove');
  
    button.addEventListener('click', () => {
      const last = list.lastElementChild;
      if (last) {
        last.remove();
      }
    });
  });