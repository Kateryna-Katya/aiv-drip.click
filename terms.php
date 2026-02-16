<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Стратегический консалтинг
    </title>
<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='45' fill='%231a1a1a'/%3E%3Ccircle cx='50' cy='50' r='18' fill='%233b82f6'/%3E%3Cpath d='M50 5 L50 25 M50 75 L50 95 M5 50 L25 50 M75 50 L95 50' stroke='%233b82f6' stroke-width='6' stroke-linecap='round'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Syne:wght@700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">

    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#services" class="nav__link">Услуги</a></li>
                    <li><a href="./#method" class="nav__link">Методология</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" id="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-up">Условия использования</h1>

            <div class="policy-intro" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                    (далее — «Условия» или «Соглашение») представляют собой юридически
                    обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                    (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                    ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                    услуги, вы подтверждаете свое полное и безоговорочное согласие с
                    данными Условиями. Если вы не согласны, вы должны немедленно
                    прекратить использование сайта.
                </p>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>1. Предмет Соглашения</h2>
                <p>
                    Компания предоставляет Пользователю доступ к использованию сайта
                    <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                    инновационным материалам, статьям в блоге, экспертным консультациям и другим инструментам 
                    развития (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                    взаимодействия Пользователя с платформой.
                </p>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>2. Обязанности и права Пользователя</h2>
                <p>
                    Вы обязуетесь использовать сайт исключительно в законных и личных
                    некоммерческих целях. При использовании платформы <strong><?= $domainTitle ?></strong>
                    <strong>запрещается</strong>:
                </p>
                <ul class="pages__list">
                    <li>
                        Публиковать, передавать или распространять любую информацию,
                        которая является незаконной, вредоносной, нарушает авторские права или разжигает ненависть.
                    </li>
                    <li>
                        Предпринимать любые действия, которые могут нарушить нормальную
                        работу сайта или привести к перегрузке
                        цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                    </li>
                    <li>
                        Использовать автоматизированные скрипты (ботов) для сбора
                        информации без нашего предварительного письменного разрешения.
                    </li>
                    <li>
                        Выдавать себя за другое лицо или предоставлять недостоверную
                        информацию о себе при регистрации на консультацию.
                    </li>
                </ul>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>3. Интеллектуальная собственность</h2>
                <p>
                    Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты, графику,
                    изображения, логотипы и программный код (далее — «Контент»), является объектом интеллектуальной
                    собственности Компании или ее партнеров. Вам предоставляется ограниченная
                    лицензия на доступ и использование Контента в личных целях. 
                    Любое копирование или распространение Контента без письменного разрешения строго запрещено.
                </p>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>4. Ограничение ответственности и отказ от гарантий</h2>
                <p>
                    Услуги и все материалы на сайте предоставляются по принципу «как
                    есть» (as is). Мы не даем никаких гарантий, что сайт будет работать бесперебойно или что его контент является абсолютно точным в контексте динамически 
                    меняющегося рынка в Германии и странах ЕС.
                </p>
                <p>
                    Компания не несет ответственности за любые прямые или косвенные
                    убытки, которые могут возникнуть у Пользователя в результате использования 
                    платформы <strong><?= $domainTitle ?></strong>.
                </p>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>5. Изменения в Условиях использования</h2>
                <p>
                    Мы оставляем за собой право в любое время изменять настоящие Условия. 
                    Все изменения вступают в силу с момента их публикации на этой странице. 
                    Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> означает ваше автоматическое согласие с новой редакцией Условий.
                </p>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>6. Разрешение споров</h2>
                <p>
                    Все споры и разногласия стороны будут стремиться разрешить путем конструктивных переговоров.
                    В случае если согласие не будет достигнуто, спор подлежит рассмотрению в соответствии 
                    с действующим законодательством по месту регистрации Компании в <strong>Германии</strong>.
                </p>
            </div>

            <div class="contact-box" data-aos="fade-up">
                <h2>7. Контактная информация</h2>
                <p>
                    Если у вас возникли вопросы, связанные с настоящими Условиями,
                    пожалуйста, свяжитесь с нашей службой поддержки:
                </p>
                <ul class="contact-box__list">
                    <li><strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></li>
                    <li><strong>Телефон:</strong> <a href="tel:+390696479457">+39 069 647 9457</a></li>
                    <li><strong>Адрес:</strong> Friedrichstraße 176, 10117 Berlin, Germany</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Экспертная поддержка на всех этапах вашего бизнеса. Мы внедряем технологии, которые работают на вас.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#services">Услуги</a></li>
                    <li><a href="./#method">Методология</a></li>
                    <li><a href="./#cases">Кейсы</a></li>
                    <li><a href="./#blog">Блог</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contacts">
                    <li>
                        <i data-lucide="phone" class="icon-small"></i>
                        <a href="tel:+390696479457">+39 069 647 9457</a>
                    </li>
                    <li>
                        <i data-lucide="mail" class="icon-small"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i data-lucide="map-pin" class="icon-small"></i>
                        <span>Friedrichstraße 176, 10117 Berlin, Germany</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Платформа уже доступна в Европе.
            </p>
        </div>
    </footer>
<div class="cookie-popup" id="cookiePopup">
    <div class="cookie-popup__content">
        <i data-lucide="cookie" class="cookie-popup__icon"></i>
        <p class="cookie-popup__text">
            Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.
    </div>
    <button class="btn btn--primary btn--sm" id="acceptCookies">Принять</button>
</div>
</div>

<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu__container">
        <ul class="mobile-menu__list">
            <li><a href="./#hero" class="mobile-menu__link">Главная</a></li>
            <li><a href="./#services" class="mobile-menu__link">Услуги</a></li>
            <li><a href="./#method" class="mobile-menu__link">Методология</a></li>
            <li><a href="./#cases" class="mobile-menu__link">Кейсы</a></li>
            <li><a href="./#blog" class="mobile-menu__link">Блог</a></li>
            <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
        </ul>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="script.js"></script>
</body>

</html>