<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>D-BOOK</title>
<link rel="stylesheet" href="styles.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans&display=swap" rel="stylesheet">
<script src="script.js"></script>
</head>
<body class="<?php echo (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark') ? 'dark-theme' : 'light-theme'; ?>">
  <header>
    <div class="top-line">
      <span class="phone-info">📞 (812) 123-45-67 | Работаем 7 дней в неделю | 9:00 — 18:00</span>
      <div class="buttons-container">
        <button class="auth-button" id="loginButton">Войти</button>
        <span class="divider">/</span>
        <button class="auth-button" id="registerButton">Регистрация</button>
    </div>
    </div>
    <div class="second-line">
      <div class="container">
      <div class="header-logo">
        <img src="<?php echo (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark') ? 'img/LogoDT.png' : 'img/LogoLT.png'; ?>" alt="Логотип">
      </div>
        <div class="menu-icons">
          <nav class="menu">
            <button class="menu-button">МЕНЮ</button>
          </nav>
          <button class="icon-search">🔍</button>
          <button class="icon-cart">🛒</button>
          <button class="theme-toggle" onclick="toggleTheme()">🌞</button>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="background-image">
      <div class="intro-text">
        <h2>D-BOOK</h2>
        <h1>TEACH THE WORLD</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus interdum purus, est tortor pulvinar ut in. Fringilla a diam enim sed justo, sed iaculis sagittis. Tortor id eu interdum nec ut iaculis. Penatibus ullamcorper ultricies morbi ipsum sem metus pharetra, mi. Tortor nibh magna feugiat id nunc, dui nisl viverra.</p>
      </div>
    </div>
    <section class="new-arrivals">
      <div class="products">
        <div class="product-item">
          <a href="catalog-page.html">
            <img src="img/1blockCatalog.webp" alt="Catalog">
            <h3>CATALOG</h3>
          </a>
        </div>
        <div class="product-item">
          <a href="history-company-page.html">
            <img src="img/2BlockHistorC.webp" alt="History Company">
            <h3>HISTORY COMPANY</h3>
          </a>
        </div>
        <div class="product-item">
          <a href="hit-sales-page.html">
            <img src="img/3BlockSales.jpg" alt="Hit Sales">
            <h3>HIT SALES</h3>
          </a>
        </div>
        <div class="product-item">
          <a href="popular-page.html">
            <img src="img/4BlockPopular.webp" alt="Popular Products">
            <h3>POPULAR</h3>
          </a>
        </div>
        <div class="product-item">
          <a href="feedback-page.html">
            <img src="img/5BlockFeedback.webp" alt="Feedback">
            <h3>FEEDBACK</h3>
          </a>
        </div>
      </div>
    </section>    
    <section class="second-section">
      <div class="block block-hidden">
          <img src="img/1corg.webp" alt="Книга 1">
          <h1>✨Четвероногие литературные приключения🐾</h1>
          <p>В мире интеллекта и вдохновения даже самые милые четвероногие друзья не остаются в стороне от
              увлекательного чтения! 📚🐾 Наш маленький корги занят пристальным чтением книги, погруженный в мир слов
              и историй. 🐶✨ Погрузитесь в удивительные приключения вместе с нашими книгами - идеальными спутниками
              для всех любителей литературы, даже самых пушистых!</p>
      </div>
      <div class="block block-hidden">
          <img src="img/2corg.webp" alt="Книга 3">
          <h1>🐾Путешествие в мир слов начинается с улыбчивого корги! 📚</h1>
          <p>Наш маленький литературный друг приглашает вас присоединиться к нему в увлекательном чтении. Сидя на
              открытой книге с взглядом, полным приглашения, он предлагает вам погрузиться в удивительные истории
              вместе. Давайте создадим вместе моменты волшебства и знаний! 🐶✨ #ЧитайСоМной</p>
      </div>
      <div class="block block-hidden">
          <img src="img/3capib.webp" alt="Книга 2">
          <h1>💖Любовь, книги и капибары! 📖</h1>
          <p>Наши влюбленные капибары погружены в захватывающее чтение, смотря друг на друга с нежностью. Почувствуйте
              магию момента вместе с нашими электронными книгами - идеальным компаньоном для романтических вечеров и
              уютных моментов вдвоем!</p>
      </div>
  </section>
  <section class="collection-section">
    <div class="collection-image">
      <img src="" alt="">
      
  </div>
    <div class="collection-content">
        <h2>ПОЧЕМУ ИМЕННО МЫ?❤️</h2>
        <p>Наша команда огромных профессионалов, которые не только знают что делать, но и с душой относятся к своей работе. Мы всегда готовы прийти на помощь и подсказать что взять лучше для развития в той сфере, которая тебе интересна. Очень надеемся тебя увидеть в качестве нашего клиента(лучше постоянного). Будем рады тебе 💖</p>
        <button>О НАС</button>
    </div>
</section>

<!-- Блок партнёров -->
<div class="brands-section">
  <h2>НАШИ ПАРТНЕРЫ</h2>
  <div class="brands">
    <div class="brand">
    <img src="img/1PTinKoff.png" style="width: 135px; margin-left: auto; margin-right: 11px;" alt="COCOFINE JEWELRY logo">
      <img src="img/2PSber.png"style="width: 135px; margin-left: auto; margin-right: 11px;" alt="COCOFINE JEWELRY logo">
      <img src="img/3PLit.png" style="width: 135px; margin-left: auto; margin-right: 11px;" alt="COCOFINE JEWELRY logo">
      <img src="img/4PChitG.png" style="width: 135px; margin-left: auto; margin-right: 11px;" alt="COCOFINE JEWELRY logo">
      <img src="img/5PTesla.png" style="width: 135px; margin-left: auto; margin-right: 11px;" alt="COCOFINE JEWELRY logo">
      <img src="img/6PChase.png" style="width: 135px; margin-left: auto; margin-right: 11px;" alt="COCOFINE JEWELRY logo">
      <img src="img/7PVTB.png" style="width: 135px; margin-left: auto; margin-right: 11px;" alt="COCOFINE JEWELRY logo">
    </div>
    <!-- Повторите для каждого бренда -->
  </div>
</div>

<!-- Подвал -->
<footer class="footer-section">
    <div class="footer-logo">
      <img src="<?php echo (isset($_COOKIE['theme']) && $_COOKIE['theme'] === 'dark') ? 'img/LogoDT.png' : 'img/LogoLT.png'; ?>" alt="Логотип в подвале">
    </div>
  <div class="footer-content">
  <div class="footer-block">
      <h3>О МАГАЗИНЕ</h3>
      <p>В D-BOOK мы верим в силу слов и знаний. </p>
      <p> Наш магазин - это место, где можно найти книги для каждого.</p>
      <p>Надеемя на теплое и дружное сотрудничество 😊 </p>
    </div>
    <div class="footer-block categories">
  <h3>КАТЕГОРИИ</h3>
  <div class="category-links">
    <button>Книги</button>
    <button>Электроника</button>
    <button>Одежда</button>
    <button>Спорт</button>
    <button>Дом и сад</button>
    <button>Игрушки</button>
    <button>Красота и здоровье</button>
    <button>Авто товары</button>
    <button>Питание</button>
    <button>Хобби</button>
  </div>
</div>
<!-- Блок Рассылки с картой -->
<div class="footer-block newsletter">
  <h3>РАССЫЛКА</h3>
  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.7118477496!2d-73.9796796394246!3d40.705825335064924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25fe0b147d195%3A0xc80b8f1e0803f62d!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1615338109183"
      frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
    </iframe>
  </div>
  <div class="contact-info">
    <p>Телефон: (123) 456-7890</p>
    <p>Email: info@example.com</p>
    <button>Подробнее</button>
  </div>
</div>
  <div class="footer-bottom">
    <p>© 2024 Все права защищены, сайт, комапания и разработчики не несут ответсвенность за сохранение ваших данных.</p>
    <p>Все совпадения с зарегестрированными компаниями, реальными людьми случайны. Сайт не несет никакой юридической силы и не осуществляет продажи.</p>
    <p>Автор Дизайна и Разработал сайта: Копылов Денис Андреевич</p>
  </div>
</footer>
  </main>
    <!-- Модальное окно для входа -->
    <div id="loginModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Вход в систему</h2>
        <form id="loginForm">
          <input type="text" placeholder="Логин" required>
          <input type="password" placeholder="Пароль" required>
          <button type="submit">Войти</button>
        </form>
      </div>
    </div>
  
    <!-- Модальное окно для регистрации -->
    <div id="registerModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Регистрация</h2>
        <form id="registerForm">
          <input type="text" placeholder="Логин" required>
          <input type="password" id="password" placeholder="Пароль" required>
          <input type="password" id="confirmPassword" placeholder="Подтвердите пароль" required>
          <input type="email" placeholder="Email" required>
          <input type="text" placeholder="Номер телефона" required>
          <button type="submit">Зарегистрироваться</button>
        </form>
      </div>
    </div>
  </main>
  <script src="script.js"></script>
</body>
</html>