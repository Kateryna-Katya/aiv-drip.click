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
            <h1 data-aos="fade-up">Политика касаемо обработки персональных данных</h1>

            <div class="policy-section" data-aos="fade-up">
                <h2>1. Общие положения</h2>
                <p>
                    Настоящая политика обработки персональных данных (далее —
                    «Политика») определяет порядок и условия обработки персональных
                    данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                    устанавливает меры по обеспечению безопасности этих данных.
                </p>
                <p>
                    1.1. Важнейшей целью и условием осуществления своей деятельности
                    Оператор считает соблюдение прав и свобод человека и гражданина при
                    обработке его персональных данных, в том числе защиты прав на
                    неприкосновенность частной жизни, личную и семейную тайну.
                </p>
                <p>
                    1.2. Настоящая Политика применяется ко всей информации, которую
                    Оператор может получить о посетителях (далее — «Пользователи»)
                    веб-сайта <strong><?= $fullDomain ?></strong>.
                </p>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>2. Основные понятия, используемые в Политике</h2>
                <ul class="pages__list">
                    <li>
                        <strong>Веб-сайт</strong> — совокупность графических и
                        информационных материалов, а также программ для ЭВМ и баз данных,
                        обеспечивающих их доступность в сети интернет по сетевому адресу
                        <strong><?= $fullDomain ?></strong>.
                    </li>
                    <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                    <li>
                        <strong>Персональные данные</strong> — любая информация,
                        относящаяся прямо или косвенно к определенному или определяемому
                        Пользователю веб-сайта.
                    </li>
                    <li>
                        <strong>Обработка персональных данных</strong> — любое действие
                        (операция) или совокупность действий (операций), совершаемых с
                        использованием средств автоматизации или без использования таких
                        средств с персональными данными.
                    </li>
                    <li>
                        <strong>Безопасность персональных данных</strong> — защищенность
                        персональных данных от неправомерного или случайного доступа к
                        ним, уничтожения, изменения или блокирования.
                    </li>
                    <li>
                        <strong>Согласие</strong> — добровольное, информированное и
                        сознательное выражение воли Пользователя на обработку его
                        персональных данных.
                    </li>
                </ul>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>3. Данные, которые мы обрабатываем</h2>
                <p>Оператор может обрабатывать следующие категории данных:</p>
                <ul class="pages__list">
                    <li>
                        <strong>Персональные данные, предоставляемые Пользователем:</strong>
                        <ul>
                            <li>Фамилия, имя, отчество;</li>
                            <li>Адрес электронной почты (Email);</li>
                            <li>Номера телефонов (валидация по стандартам Германии).</li>
                        </ul>
                    </li>
                    <li>
                        <strong>Данные, собираемые автоматически:</strong>
                        <ul>
                            <li>
                                Также на сайте происходит сбор и обработка обезличенных данных
                                о посетителях (в т.ч. файлов «cookie») с помощью сервисов
                                интернет-статистики (Google Аналитика и других). Эти данные включают 
                                IP-адрес, тип браузера и время доступа.
                            </li>
                        </ul>
                    </li>
                </ul>
                <p>
                    Вышеперечисленные данные далее по тексту Политики <strong><?= $domainTitle ?></strong> объединены общим
                    понятием Персональные данные.
                </p>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>4. Цели обработки персональных данных</h2>
                <ul class="pages__list">
                    <li>Идентификация Пользователя для предоставления доступа к сервисам консалтинговой платформы.</li>
                    <li>Установление обратной связи, включая направление уведомлений и запросов, касающихся использования сайта.</li>
                    <li>Заключение и исполнение договоров на экспертные услуги в ЕС.</li>
                    <li>
                        Информирование Пользователя посредством отправки электронных писем. 
                        Пользователь всегда может отказаться от рассылок, написав на 
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a> 
                        с пометкой «Отказ от уведомлений».
                    </li>
                    <li>Улучшение качества работы сайта и аналитика его использования.</li>
                </ul>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>5. Правовые основания обработки персональных данных</h2>
                <p>Оператор обрабатывает данные только при наличии законных оснований:</p>
                <ul class="pages__list">
                    <li>Добвольное согласие Пользователя через формы на сайте <strong><?= $domainTitle ?></strong>.</li>
                    <li>Согласие на использование файлов «cookie», установленное в браузере.</li>
                </ul>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>6. Порядок сбора, хранения и безопасности данных</h2>
                <ul class="pages__list">
                    <li>Применяются все необходимые меры технической защиты в соответствии с нормами <strong>GDPR</strong>.</li>
                    <li>Данные никогда не передаются третьим лицам без законных на то оснований.</li>
                    <li>Срок обработки неограничен, но согласие может быть отозвано через email <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.</li>
                </ul>
            </div>

            <div class="contact-box" data-aos="fade-up">
                <h2>7. Заключительные положения</h2>
                <p>По всем вопросам обработки данных вы можете обратиться напрямую к Оператору:</p>
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