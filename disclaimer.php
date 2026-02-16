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
            <h1 data-aos="fade-up">Отказ от ответственности (Дисклеймер)</h1>

            <div class="disclaimer-content">
                <p data-aos="fade-up" data-aos-delay="100">
                    <strong>Общая информация:</strong> Все материалы, статьи и сведения,
                    опубликованные на сайте <strong><?= $domainTitle ?></strong>, носят исключительно
                    информационно-ознакомительный характер. Они не являются и не должны
                    рассматриваться как персональная инвестиционная рекомендация,
                    профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                    каких-либо финансовых операций.
                </p>

                <p data-aos="fade-up">
                    <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                    относительно точности, полноты или актуальности представленной в блоге
                    информации. Любые упоминания потенциального карьерного роста, программ пассивного дохода или прошлых
                    результатов наших клиентов не гарантируют аналогичных результатов в будущем. 
                    Индивидуальные итоги вашей деятельности зависят от множества факторов, включая рыночные условия в Германии и ЕС, и могут существенно
                    отличаться от приведенных примеров.
                </p>

                <p data-aos="fade-up">
                    <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                    его владельцы и аффилированные лица не несут ответственности за
                    любые прямые или косвенные убытки, решения или действия,
                    предпринятые вами на основе информации с этого ресурса. Вся
                    ответственность за использование предложенных методологий и возможные последствия
                    лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> собирается из
                    источников, которые считаются надежными и общедоступными на момент публикации.
                </p>

                <p data-aos="fade-up">
                    <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                    изменение финансового статуса или инвестиции в новые проекты, сопряжена с
                    определенным уровнем риска. Перед принятием
                    любых важных стратегических решений мы настоятельно рекомендуем провести
                    собственное исследование и проконсультироваться с квалифицированным
                    независимым специалистом в соответствующей области.
                </p>

                <p data-aos="fade-up">
                    <strong>Подтверждение пользователя:</strong> Продолжая использовать
                    сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                    действуете по собственной воле, полностью осознаете и принимаете все
                    упомянутые риски и условия данного отказа от ответственности.
                </p>
            </div>

            <div class="pages-footer" data-aos="fade-in">
                <p>Последнее обновление: Февраль 2026</p>
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