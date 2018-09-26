<?php include_once '/templates/layout/header2.php'; ?>
<section class="main-block2">
    <div class="bac_overlay"></div>

    <div class="bread_cramps">
        <div class="container">
            <h1 class="bread_cramps_about">О нас</h1>
            <ul class="cramps_list">
                <li><a href="/" title="главная">Главная</a></li>
                <li><a title="О нас" href="javascript:void(0);">О нас</a></li>
            </ul>
        </div>
    </div>
</section>


<div class="about_who_we_are">
    <div class="container">
        <div class="who_we_are_content">
            <div class="about_left_content">

                <?php echo $about[0]['text'] ?>
            </div>
            <div class="about_right_content">
                <img alt="Главное фото 'О нас'" src="/dist/img/<?php echo $about[0]['img'] ?>">
            </div>
        </div>
    </div>
</div>
<!--<div class="about_our_team">-->
<!--    <div class="container">-->
<!--        <h2>-->
<!--            <span class="yellow">Наша<span>Команда</span></span>-->
<!--        </h2>-->
<!--        <div class="center">-->
<!--            <div class="our_time_slide_item">-->
<!--                <img src="/dist/img/our_team.jpg">-->
<!--                <div class="our_team_slide_title">-->
<!--                    <h3>Jon Calkin</h3>-->
<!--                    <p>Master</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="our_time_slide_item"><img src="/dist/img/our_team2.jpg">-->
<!--                <div class="our_team_slide_title">-->
<!--                    <h3>Jon Calkin</h3>-->
<!--                    <p>Master</p>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="our_time_slide_item"><img src="/dist/img/our_team3.jpg">-->
<!--                <div class="our_team_slide_title">-->
<!--                    <h3>Jon Calkin</h3>-->
<!--                    <p>Master</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="our_time_slide_item"><img src="/dist/img/our_team2.jpg">-->
<!--                <div class="our_team_slide_title">-->
<!--                    <h3>Jon Calkin</h3>-->
<!--                    <p>Master</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="our_time_about">
    <div class="our_time">
        <div class="bacground_overlay"></div>
        <div class="container">
            <div class="our_time_content">
                <div class="">
                    <p>Более 10 лет мы дарим тепло и уют Вашим домам</p>
                    <p>Соответствие современным стандартам.</p>
                    <p>Более 500 довольных клиентов</p>
                    <p>Разумный ценовой диапазон</p>
                </div>

                <div class="contact-link"><a title="Контакты" href="/contacts">Контакты</a></div>
            </div>
        </div>
    </div>
</div>


<div class="consrtuct_about_section">
    <div class="container">
        <div class="consrtuct_about">
            <div class="consrtuct_about_promo">
                <div class="about_promo_icon">
                    <i class="fa fa-thumbs-o-up"></i>
                </div>
                <div class="about_promo_content">
                    <h2>Лучшие в своем деле</h2>
                    <p>
                        Большой опыт работы и качество выполненных проектов, позволяет нам с уверенностью сказать,
                        что мы МАСТЕРА в своем деле.
                    </p>
                </div>
            </div>
            <div class="consrtuct_about_promo">
                <div class="about_promo_icon">
                    <i class="fa fa-ellipsis-h"></i>
                </div>
                <div class="about_promo_content">
                    <h2>Широкий спектр работ</h2>
                    <p>
                        Выполняем практически все работы касательно ремонта! Если в наш профиль не входит какой либо вид
                        работ,
                        то мы с радостью посоветуем Вам профессионалов в этом деле!
                    </p>
                </div>
            </div>
            <div class="consrtuct_about_promo">
                <div class="about_promo_icon">
                    <i class="fa fa-clock-o"></i>
                </div>
                <div class="about_promo_content">
                    <h2> Cоблюдение сроков</h2>
                    <p>
                        Все работы выполняются точно в срок!
                        В случае не выполнения обязательств, мы выплатим вам компенсацию!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="last_project_section">
        <div class="container">
            <h1>Последние проекты</h1>
            <div class="last_project_container">
                <?php foreach ($lastProjects as $project) { ?>
                    <div class="last_project_list">
                        <div class="last_project_list_wr">
                            <img alt="<?php echo $project['title'] ?>" src="/dist/img/projects/<?php echo $project['img']; ?>">
                        </div>
                        <div class="last_project_list_bottom">
                            <h3>
                                <a  title="<?php echo $project['title'] ?>" href="/portfolio/projects/<?php echo $project['id'] ?>"><?php echo $project['title'] ?></a>
                            </h3>
                            <span class="view-projects">
                                   <a title="<?php echo $project['title'] ?>" href="/portfolio/projects/<?php echo $project['id'] ?>"><i
                                               class=" fa fa-angle-right"></i></a>

                            </span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="reviews">
        <div class="container">
            <h2 class="header_title">
            <span class="yelloy_border">
                <span class="yellow">Последние</span>
                 отзывы
            </span>
            </h2>
            <div id="comments" class="comments responsive2">
                <?php foreach ($comments as $comment) { ?>
                    <div class="comments_list">
                        <div class="reviews_content">
                            <div class="avatar_box">
                                <img class="avarat_img" src="/dist/img/comments/<?php echo $comment['img'] ?>"
                                     title="аватар автора" alt="фото автора комментария">
                            </div>
                            <div class="reviews_text">

                                <?php echo $comment['discription']; ?>
                            </div>
                            <div class="info">


                                <strong class="info-date"><?php echo $comment['date'] ?></strong>
                                <strong class="info-name"><?php echo $comment['user_name'] ?></strong>
                                <?php echo $comment['job'] ?>


                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="pabout">
        <div class="collback-section">
            <div class="outer-box">
                <div class="container">
                    <div class="row">
                        <div class="content-flex">
                            <div class="inner-column">
                                <h3>
                                    Отравьте форму<br>
                                    и в течение 10 минут мы вам перезвоним
                                </h3>
                                <div class="text">
                                    Все поля являются обязательными для заполнения*
                                </div>
                            </div>
                            <div class="inner-form">
                                <div class="inner-column-f">
                                    <div class="appointment-form">
                                        <h3>Заказать Обратный Звонок</h3>
                                        <form name="sendMail" action="send_mail/" method="post">
                                            <div class="form-group">
                                                <input class="input_text" id="before_name" required type="text" name="name"
                                                       title="Только русские буквы" placeholder="Ваше имя*"
                                                       pattern="^[а-яА-Я]+\s*[а-яА-Я]*$">
                                            </div>
                                            <div class="form-group">
                                                <input id="before_mail" required class="input_text" type="email" name="mail"
                                                       placeholder="Почта*">
                                            </div>
                                            <div class="form-group">
                                                <input id="before_phone" class="input_text " type="tel" minlength="7"
                                                       name="phone"
                                                       title="шаблон ввода 80298749315 БЕЗ пробелов" required
                                                       pattern="^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$"
                                                       placeholder="Введите телефон">
                                            </div>
                                            <div class="form-group">
                                              <textarea placeholder="Напишите нам" required minlength="30" maxlength="200"
                                                        name="discription"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn-coll">
                                                    Отправить сейчас
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>


<?php include_once '/templates/layout/footer.php'; ?>
