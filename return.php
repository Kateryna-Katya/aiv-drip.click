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
            <h1 data-aos="fade-up">Политика возврата средств</h1>
            
            <div class="policy-section" data-aos="fade-up" data-aos-delay="100">
                <h2>Условия для оформления возврата</h2>
                <p>
                    Вы можете претендовать на полный или частичный возврат средств в
                    следующих ситуациях:
                </p>
                <ul class="pages__list">
                    <li>
                        <strong>Несоответствие программы описанию:</strong> Если содержание
                        предоставленной консультации или экспертного материала существенно отличается от программы,
                        заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                    </li>
                    <li>
                        <strong>Технические неисправности с нашей стороны:</strong> При
                        возникновении критических технических проблем на платформе
                        <strong><?= $fullDomain ?></strong>, которые делают доступ к материалам или сессиям невозможным и не были
                        устранены нашей командой в разумные сроки.
                    </li>
                    <li>
                        <strong>Отказ в течение «периода охлаждения»:</strong> Если вы
                        решили отказаться от участия в программе в течение 14 (четырнадцати) календарных
                        дней с момента оплаты, при условии, что вы еще не получили доступ
                        к значительному объему материалов (см. раздел «Исключения»).
                    </li>
                </ul>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>Процедура запроса на возврат</h2>
                <p>
                    Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните
                    следующие шаги:
                </p>
                <ol class="pages__list pages__list--numbered">
                    <li>
                        Составьте письмо и отправьте его на наш официальный email:
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>.
                    </li>
                    <li>
                        В теме письма обязательно укажите: «Запрос на возврат средств».
                    </li>
                    <li>
                        В теле письма предоставьте полную информацию: ваше имя и фамилию,
                        email, который использовался при регистрации, и точное название выбранной программы.
                    </li>
                    <li>
                        Четко и подробно опишите причину, по которой вы запрашиваете
                        возврат, со ссылкой на один из пунктов наших условий.
                    </li>
                    <li>
                        После получения письма наша служба поддержки рассмотрит ваш запрос
                        и свяжется с вами для предоставления дальнейших инструкций в течение 3-х рабочих дней.
                    </li>
                </ol>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>Сроки и способ возврата</h2>
                <p>
                    После одобрения вашего запроса, возврат денежных средств будет
                    произведен в течение 7–14 рабочих дней. Средства будут возвращены
                    тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                    может зависеть от регламента работы вашего банка или платежной системы в <strong>Германии</strong> или стране вашего пребывания.
                </p>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>Исключения и ограничения</h2>
                <p>Возврат средств не может быть осуществлен, если:</p>
                <ul class="pages__list">
                    <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                    <li>Вы уже изучили, просмотрели или скачали более 50% материалов программы, независимо от времени, прошедшего с момента покупки.</li>
                    <li>Причиной невозможности пройти обучение являются технические проблемы на стороне пользователя (например, проблемы с интернет-соединением).</li>
                    <li>Были нарушены другие условия Пользовательского соглашения <strong><?= $domainTitle ?></strong> с вашей стороны.</li>
                </ul>
            </div>

            <div class="policy-section" data-aos="fade-up">
                <h2>Изменения в политике</h2>
                <p>
                    <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в настоящую
                    Политику возврата. Актуальная версия всегда доступна на этой
                    странице <strong><?= $fullDomain ?></strong>.
                </p>
            </div>

            <div class="contact-box" data-aos="fade-up">
                <h2>Свяжитесь с нами</h2>
                <p>
                    По всем вопросам, связанным с возвратом средств или условиями
                    консультаций, пожалуйста, обращайтесь в нашу службу поддержки:
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