<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="device-width"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyMoscow - Главная</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style/style.css"> -->
    <?php wp_head() ?>

</head>
<body>
    <div class="wrapper-main">
        <div class="black">
            <div class="wrapper">
                <header>
                    <div class="nav">
                        <div class="logo">
                            <img src="<?php bloginfo('template_url'); ?>/icons/spasskaya-tower.png" alt="">
                        </div>
                        <div class="nav-item">
                            <a href="index.html">Главная</a>
                            <a href="trips.html">Наши услуги</a>
                            <a href="">О компании</a>
                            <a href="contacts.html">Контакты</a>
                            <a href="">Отзывы</a>
                            <a onclick="popUp('.login');" >Войти в аккаунт</a>
                        </div>
                        <div class="menu-btn">
                            <div class="menu-btn-stick"></div>
                            <div class="menu-btn-stick"></div>
                            <div class="menu-btn-stick"></div>
                        </div>
                        
                    </div>
                </header>
                <main>
                    <div class="main-block">
                        <div class="main-text">
                            <h1>Необычная Москва</h1>
                            <h2>MyMoscow - агенство интересных маршрутов</h2>
                            <div class="button-div">
                                <a href="#" class="button">Подробнее о нас</a><br>
                            </div> 
                            <div class="circles">
                                <div class="circle-box"></div>
                                <div class="circle-box"></div>
                                <div class="circle-box"></div>
                                <!-- <a href=""><div class="circle-box"></div></a>
                                <a href=""><div class="circle-box"></div></a> -->
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="services">
            <div class="services-text">
                <h3>Что мы предлагаем?</h3>
                <h4>Наша главная цель - рассказать о Москве так, чтобы это было интересно всем!</h4>
            </div>
            <div class="services-field">
                <div class="services-block">
                    <img class="service-icon" src="<?php bloginfo('template_url'); ?>/icons/map.png" alt="">
                    <div class="service-name">
                       <p class="service-title">Необычные маршруты</p>
                       <p class="service-desc">Мы обязательно порадуем тебя необычными маршрутами Москвы, которые прокладывают наши опытные гиды. Ты увидишь и узнаешь о Москве то, что никогда не знал!</p>
                    </div>
                </div>
                <div class="services-block">
                    <img class="service-icon" src="<?php bloginfo('template_url'); ?>/icons/souvenir.png" alt="">
                    <div class="service-name">
                       <p class="service-title">классные сувениры</p>
                       <p class="service-desc">Отличная новость! У нас появился магазин сувениров! И самое примечательное, что все эти сувениры мы делаем сами! Заходи к нам в гости!</p>
                    </div>
                </div>
                <div class="services-block">
                    <img class="service-icon" src="<?php bloginfo('template_url'); ?>/icons/compass.png" alt="">
                    <div class="service-name">
                       <p class="service-title">интересные экскурсии</p>
                       <p class="service-desc">За время экскурсий, которых у нас больше 20, ты узнаешь и увидишь все основные досопримечательности: Кремль, Храм Христа Спаителя, так и пройдешься по пешеходным улицам Москвы, узнаешь их историю и сделаешь самые классные фотографии.</p>
                    </div>
                </div>
                <div class="services-block">
                    <img class="service-icon" src="<?php bloginfo('template_url'); ?>/icons/picture.png" alt="">
                    <div class="service-name">
                       <p class="service-title">фотосессии в москве</p>
                       <p class="service-desc">Команда MyMoscow рада провести креативные фотосессии в любом уголке Москвы. Не важно, свадьба у Вас или просто захотелось добавить в альбом или инстаграм красивых фоток.  </p>
                    </div>
                </div>
                <div class="services-block">
                    <img class="service-icon" src="<?php bloginfo('template_url'); ?>/icons/discussion.png" alt="">
                    <div class="service-name">
                       <p class="service-title">новые знакомства</p>
                       <p class="service-desc">MyMoscow - это целый клуб, где после московских проулок ты сможешь продолжить общение с теми, кому интересна Москва , знакомиться с новыми людьми и делиться впечатлениями.</p>
                    </div>
                </div>
                <div class="services-block">
                    <img class="service-icon" src="<?php bloginfo('template_url'); ?>/icons/sun.png" alt="">
                    <div class="service-name">
                       <p class="service-title">яркие впечатления</p>
                       <p class="service-desc">Самое важное - это яркие эмоции, которые остануться с тобой на долгое время! Поэтому в нашей команде мы ждем именно тебя!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="information">
        <div class="information-block info-photo">
            <!-- <div class=""></div> -->
        </div>
        <div class="information-block">
            <div class="info-text">
                <p class="info-title">Кто мы такие</p>
                <p>Мы - команда тех, кто любит историю и любит Москву. </p>
                <p>Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники природы, заказники, парки, заповедники. Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из душного мегаполиса куда-нибудь в «дебри», навстречу приключениям. К счастью, не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты – первый человек, ступивший на эту землю.</p>
                <p>Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.</p>
                <input type="button" class="info-btn" value="Подробнее о нас">
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="wrapper-title"><h3 class="orange">Москва в фотографиях</h3></div> 
        <h4 class="photo-white">Проще всего рассказать обо всем в фотографиях. Смотрите наши фотоотчеты и присылайте нам свои фотографии.</h4>
        <div class="photo">
            <div class="photo-block one"></div>
            <div class="photo-block two"></div>
            <div class="photo-block three"></div>
            <div class="photo-block four"></div>
            <div class="photo-block five"></div>
            <div class="photo-block six"></div>
            <div class="photo-block seven"></div>
            <div class="photo-block eight"></div>
        </div>
    </div>
    
    <div class="wrapper">
        <div class="reviews">
            <div class="wrapper-title"><h3 class="orange">Отзывы</h3></div> 
            <h4 class="photo-white"></h4>
            <div class="review-field">
                <div class="review-block">
                    <div class="review-text">
                        <p>Были с дочкой и подругой на ночной экскурсии. Все таки как много зависит от экскурсовода! Мы все четыре часа ходили за Станиславом Симоновым, как кролики. Боялись пропустить хоть одно слово. При этом моей дочке - которая побывала во многих местах и с детства искушенная на интересные события - была сильно увлечена.</p>
                    </div>
                    <div class="review-user">
                        <!-- <div class="user-photo"><img src="img/background.jpg" alt=""> </div>  -->
                        <img src="img/test1.jpg" alt="">
                        <p>Екатерина Васильева</p>
                    </div>
                </div>
                <div class="review-block">
                    <div class="review-text">
                        <p>Ездили на экскурсию с семиклассниками и родителями. Всем очень понравилось! Экскурсовод Михаил Борисович очень интересно, необычно и с юмором рассказывал о Москве 16 века. Гибко подстраивал эксукурсию под интересы и потребности слушателей, ловко «управлял» подачей автобуса, не давая нам замёрзнуть.) Огромное спасибо!</p>
                    </div>
                    <div class="review-user">
                        <img src="img/test2.jpg" alt="">
                        <p>Анна Крушевская</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="wrapper space">
            <div class="footer-text">
                <div class="logo">
                    <img src="icons/spasskaya-tower.png" alt="">
                </div>
                <p class="footer-desc">Мы приглашаем тебя на самые разные экскурсии по Москве. Автобусные и пешеходные, на целый день или на несколько часов, на свежем воздухе или с заходом в здания - у нас в ассортименте более 20 авторских экскурсий по Москве, выбирай и узнавай Москву вместе с нами!</p>
            </div>
            <div class="footer-contact">
                <p class="footer-title">Контакты</p>
                <div class="footer-contacts">
                    <span><img src="img/maps-and-flags.png" width="20px" alt=""> Москва, Большая Спасская 12</span><br>
                    <span><img src="img/close-envelope.png" width="20px" alt=""> moscow@imoscow.ru</span><br>
                    <span><img src="img/telephone.png" width="20px" alt=""> 8(495)626-46-00</span>
                </div>
            </div>
            <div class="footer-text">
                <p class="footer-title">Последние новости</p>
                <span class="footer-desc">Curabitur felis nibh, lacinia non rhoncus vel, lobortis et lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                <p class="footer-date">5 марта 2018</p>
                <p class="footer-desc">Curabitur felis nibh, lacinia non rhoncus vel, lobortis et lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                <p class="footer-date">12 декабря 2017</p>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="wrapper space">
            <p>(C) 2018 Copyright. Все права защищены</p>        
            <p>Designed by Nordic IT School</p>
            <div class="social-link">
                <a href="#"><img src="icons/vk-social-network-logo.png" alt=""></a> 
                <a href="#"><img src="icons/facebook-logo.png" alt=""></a>
                <a href="#"><img src="icons/instagram.png" alt=""></a>
            </div>     
        </div>   
    </div>
    <div class="login">
        <div class="login-flex">
            <!-- <div class="closed-btn" onclick="closed('.login')">
                <div class="closed-round">
                    <div id="closed"></div>
                </div>
            </div> -->
            <div class="login-window">
                <div class="close" onclick="closed('.login')"> <a >Закрыть</a> </div>
                <form action="form.php" method="GET">
                    <label>
                        <input id="login" maxlength="16" minlength="4"  type="text" name="myName" autocomplete="off" required>
                        <span>Ваше имя</span>
                    </label> <br><br>
                    <label>
                        <input id="pass" omaxlength="32" minlength="6" type="password" name="myName" autocomplete="off" required>
                        <span>Пароль</span>
                    </label> <br><br>
                    <input type="submit" name="" id="" value="Войти">
                </form>
            </div>
        </div>
    </div>

    <div class="menu-mobile">
        <div class="menu-mobile-field">
            <a href="index.html">Главная</a>
            <a href="trips.html">Наши услуги</a>
            <a href="">О компании</a>
            <a href="contacts.html">Контакты</a>
            <a href="">Отзывы</a>
            <a onclick="popUp('.login');" >Войти в аккаунт</a>
        </div>
    </div>

    <!-- <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script> -->

    <?php wp_footer() ?>
</body>
</html>