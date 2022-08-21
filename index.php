<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
    <div class="popup-container">
        <div class="popup">
            <form action="mail.php" class="form" method="POST">
                <label for="name">
                    <span>Имя*</span>
                    <input type="text" name="name" placeholder="Имя" id="name">
                </label>
                <label for="phone">
                    <span>Телефон*</span>
                    <input type="tel" name="phone" placeholder="+7 (999) 999-99-99" id="phone">
                </label><br>
                <label for="check">
                    <input type="checkbox" id="check" name="check">
                    <span>Принимаю условия</span>
                </label>
                    <input type="submit" class="form-button">
            </form>
        </div>
    </div>
    <header id="section1">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="img/logo.jpg" alt="Логотип" class="logo-image">
                </a>
            </div>
            <div class="phone-link">
                <a href="tel:79780511050"><span class="phone-link-green">+7 (978)</span> 051-10-50</a>
            </div>
            <nav class="nav-menu">
                <ul class="menu-list">
                    <li class="menu-item"><a href="#section1">Главная</a></li>
                    <li class="menu-item"><a href="#section2">Преимущества</a></li>
                    <li class="menu-item"><a href="#section3">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="slider-section">
            <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-1">
                            <div class="container">
                                <div class="main-heading">
                                    <h1>Купить электросамокат</h1>
                                    <p>Самые выгодные цены у нас</p>
                                </div>
                                <div class="form-block">
                                    <form action="mail.php" class="form" method="POST">
                                        <label for="name">
                                            <span>Имя*</span>
                                            <input type="text" name="name" placeholder="Имя" id="name">
                                        </label>
                                        <label for="phone">
                                            <span>Телефон*</span>
                                            <input type="tel" name="phone" placeholder="+7 (999) 999-99-99" id="phone">
                                        </label>
                                        <label for="check">
                                            <input type="checkbox" id="check" name="check">
                                            <span>Принимаю условия</span>
                                        </label>
                                        <input type="submit" class="form-button">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide slide-2">
                            <div class="container">
                                <div class="main-heading">
                                    <h1>Купить электросамокат</h1>
                                    <p>с доставкой по Севастополю</p>
                                    <button class="button-order-slide">Заказать</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="swiper-pagination"></div>
            </div>
    </section>
    <section class="advantages-section" id="section2">
        <div class="container">
            <h2 class="advantages-heading">Преимущества</h2>
            <div class="advantages-block">
                <div class="advantages-item">
                    <img src="img/advantage-1.jpg" alt="" class="advantage-image">
                    <div class="item-text">
                        <h3>Крепкие колеса</h3>
                        <p>Колеса сделаны из прочного материала, устойчивы к любым повреждениям на любой поверности.</p>
                    </div>
                </div>
                <div class="advantages-item">
                    <img src="img/advantage-2.png" alt="" class="advantage-image">
                    <div class="item-text">
                        <h3>Быстрая зарядка аккумулятора</h3>
                        <p>Аккумуляторы самокатов полностью заряжаются в течение часа.</p>
                    </div>
                </div>
                <div class="advantages-item">
                    <img src="img/advantage-3.png" alt="" class="advantage-image">
                    <div class="item-text">
                        <h3>Доставка курьером</h3>
                        <p>Когда курьер привезет товар, вы сможете проверить его работоспособность перед оплатой.</p>
                    </div>
                </div>
                <div class="advantages-item">
                    <img src="img/advantage-4.png" alt="" class="advantage-image">
                    <div class="item-text">
                        <h3>Гарантия 2 года</h3>
                        <p>В течение 2-х лет вы можете обращаться в наш сервисный центр для получения запчастей и ремонта.</p>
                    </div>
                </div>
            </div>
            <div class="button-order-block">
                <button class="button-order">
                    <a href="#section1">Заказать</a>
                </button>
            </div>
        </div>
    </section>
    <section class="contacts-section" id="section3">
        <div class="container">
            <h2 class="contacts-heading">Контакты</h2>
            <div class="contacts-block">
                <div class="map-block">
                    <div id="map">

                    </div>
                </div>
                <div class="data-block">
                    <address>г. Севастополь, ПОР 42Б,<br> +7 (978) 051-10-50,<br> <a href="mailto:info@marketing1.su"><b>info@marketing1.su</b></a></address>
                    <div class="messanger-block">
                        <p>Мессенджеры</p>
                            <div class="messanger-item">
                                <a href="viber://add?number=79780511050">
                                    <img src="img/viber-icon.png" alt="">
                                    <p>Viber</p>
                                </a>
                            </div>
                            <div class="messanger-item">
                                <a href="whatsapp://send?phone=+79780511050">
                                    <img src="img/whatsapp-icon.png" alt="">
                                    <p>WhatsApp</p>
                                </a>
                            </div>
                    </div>
                    <div class="phone-block">
                        <p>Номер телефона для<br> мессенджера +7 (978) 051-10-50</p>
                    </div>
                    

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?&lang=ru_RU" type="text/javascript"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery.inputmask.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>