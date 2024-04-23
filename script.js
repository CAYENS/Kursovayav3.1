function setTheme(themeName) {
    localStorage.setItem('theme', themeName);
    document.body.className = themeName;
  }
  
  function toggleTheme() {
    if (document.body.className === 'dark-theme') {
      setTheme('light-theme');
      document.querySelector('.theme-toggle').textContent = '🌜'; // Иконка для светлой темы
    } else {
      setTheme('dark-theme');
      document.querySelector('.theme-toggle').textContent = '🌞'; // Иконка для темной темы
    }
  }
  
  // Немедленно вызываемая функция для установки темы при загрузке страницы
  (function () {
    // Устанавливаем светлую тему по умолчанию, если в localStorage нет сохраненной темы
    if (!localStorage.getItem('theme') || localStorage.getItem('theme') === 'light-theme') {
      setTheme('light-theme');
    } else {
      setTheme('dark-theme');
    }
  })();
  
  document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('block-visible');
        } else {
          entry.target.classList.remove('block-visible');
        }
      });
    }, {
      threshold: 0.1 // 10% элемента должно быть видно для активации
    });
  
    document.querySelectorAll('.block').forEach(block => {
      observer.observe(block);
    });
  });
  
  document.querySelectorAll('.block').forEach(block => {
    block.addEventListener('mouseenter', () => {
      block.classList.add('block-visible');
    });
    block.addEventListener('mouseleave', () => {
      block.classList.remove('block-visible');
    });
  });
  
  // Функция для изменения размера изображения
  function setImageSize(width) {
    const image = document.querySelector('.collection-image img');
    image.style.width = width + 'px'; // Задаем ширину
    image.style.height = 'auto'; // Высота автоматически для сохранения пропорций
  }
  
  // Пример использования
  setImageSize(200); // Установит ширину изображения в 200 пикселей
  
  document.addEventListener('DOMContentLoaded', () => {
    // Получаем элементы для входа и регистрации
    const loginButton = document.getElementById('loginButton');
    const registerButton = document.getElementById('registerButton');
    const loginModal = document.getElementById('loginModal');
    const registerModal = document.getElementById('registerModal');
    const closeButtons = document.querySelectorAll('.close');
  
    // Функция открытия модального окна
    const openModal = (modal) => {
      modal.style.display = 'block';
    };
  
    // Функция закрытия модального окна
    const closeModal = (modal) => {
      modal.style.display = 'none';
    };
  
    // Открытие модальных окон
    loginButton.onclick = () => openModal(loginModal);
    registerButton.onclick = () => openModal(registerModal);
  
    // Закрытие модальных окон при нажатии на "крестик"
    closeButtons.forEach(button => {
      button.onclick = () => {
        closeModal(loginModal);
        closeModal(registerModal);
      };
    });
  
    // Закрытие модального окна при нажатии вне его области
    window.onclick = (event) => {
      if (event.target === loginModal) {
        closeModal(loginModal);
      }
      if (event.target === registerModal) {
        closeModal(registerModal);
      }
    };
  
    // Валидация формы регистрации
    const registerForm = document.getElementById('registerForm');
    registerForm.onsubmit = (event) => {
      event.preventDefault(); // Предотвращаем отправку формы
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirmPassword').value;
  
      // Проверяем сложность пароля
      if (password.length >= 8 && /\d/.test(password) && /[!@#$%^&*(),.?":{}|<>]/.test(password)) {
        // Пароли совпадают
        if (password === confirmPassword) {
          // Тут код для обработки данных формы
          console.log('Регистрация прошла успешно!');
          closeModal(registerModal);
        } else {
          alert('Пароли не совпадают!');
        }
      } else {
        alert('Пароль должен быть не менее 8 символов, содержать цифры и специальные символы.');
      }
    };
  });
  