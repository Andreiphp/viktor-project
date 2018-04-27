<?php include_once '/templates/layout/header2.php'; ?>

<div class="bread_cramps">
    <div class="container">
        <ul class="cramps_list">
            <li><a href="/" title="главная">Главная</a></li>
            <li class=""><a class="active" href="/about/" title="о нас">О нас</a></li>
        </ul>
    </div>
</div>

<div class="about_who_we_are">
    <div class="container">
        <div class="who_we_are_content">
            <div class="about_left_content">
                <h2>
                    <span class="yellow">Кто<span>Мы</span></span>
                </h2>
                <!--                <h3 class="about_title">Мы те кто делает Ваш дом уютным</h3>-->
                <!--                <div class="about_text">-->
                <!--                    Lorem Khaled Ipsum is a major key to success. Put it this way,-->
                <!--                    Lorem Khaled Ipsum is a major key to success.-->
                <!--                    Put it this way, it took me twenty five years to getthese plants,-->
                <!--                    twenty five years of blood sweat and tears, and I’m never giving up,-->
                <!--                    I’m just getting started. It’s on you how you want to live your life.-->
                <!--                    Everyone has a choice. I pick my choice, squeaky clean. Let’s see what Chef Dee.-->
                <!--                </div>-->

                <?php echo $about[0]['text'] ?>
            </div>
            <div class="about_right_content">
                <img src="/dist/img/<?php echo $about[0]['img'] ?>">
            </div>
        </div>
    </div>
</div>
<div class="about_our_team">
    <div class="container">
        <h2>
            <span class="yellow">Наша<span>Команда</span></span>
        </h2>
        <div class="center">
            <div class="our_time_slide_item">
                <img src="/dist/img/our_team.jpg">
                <div class="our_team_slide_title">
                    <h3>Jon Calkin</h3>
                    <p>Master</p>
                </div>
            </div>
            <div class="our_time_slide_item"><img src="/dist/img/our_team2.jpg">
                <div class="our_team_slide_title">
                    <h3>Jon Calkin</h3>
                    <p>Master</p>
                </div>
            </div>

            <div class="our_time_slide_item"><img src="/dist/img/our_team3.jpg">
                <div class="our_team_slide_title">
                    <h3>Jon Calkin</h3>
                    <p>Master</p>
                </div>
            </div>
            <div class="our_time_slide_item"><img src="/dist/img/our_team2.jpg">
                <div class="our_team_slide_title">
                    <h3>Jon Calkin</h3>
                    <p>Master</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our_priorities" style="background: url(/dist/img/projects.jpg) no-repeat">
    <div class="container">
        <div class="our_priorities_section">
            <div class="our_priorities_section_one"><h3>О нас и наших приоритетах</h3>
                <p>Мы всегда стремимся к лучшему, чтобы радовать Вас
                    высоким качеством сервиса, обслуживания. Мы работаем более 7 лет и уже завоевали любовь многих
                    клиентов.
                </p>
            </div>
            <div class="our_priorities_icons">
                <div class="our_priorities_wr">
                    <div class="our_priorities_list">
                        <div class="our_priorities_single">
                            <div class="our_priorities_icon">
                                <i class="flaticon-wrench"></i>
                            </div>
                            <div class="our_priorities_text">
                                <h4>Ремонт</h4>
                                <p>
                                    140+ проектов
                                </p>
                            </div>
                        </div>
                        <div class="our_priorities_single">
                            <div class="our_priorities_icon">
                                <i class="flaticon-danger-1"></i>
                            </div>
                            <div class="our_priorities_text">
                                <h4>Консультации</h4>
                                <p>
                                    более 20 консультаций в день
                                </p>
                            </div>
                        </div>
                        <div class="our_priorities_single">
                            <div class="our_priorities_icon">
                                <i class="flaticon-flags"></i>
                            </div>
                            <div class="our_priorities_text">
                                <h4>Сроки</h4>
                                <p>
                                    выполнение всех проектов точно в срок
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="our_priorities_wr">
                    <div class="our_priorities_list">
                        <div class="our_priorities_single">
                            <div class="our_priorities_icon">
                                <i class="flaticon-bricks-1"></i>
                            </div>
                            <div class="our_priorities_text">
                                <h4>Материалы</h4>
                                <p>
                                    используем только качественные материалы
                                </p>
                            </div>
                        </div>
                        <div class="our_priorities_single">
                            <div class="our_priorities_icon">
                                <i class="flaticon-worker-1"></i>
                            </div>
                            <div class="our_priorities_text">
                                <h4>Подход</h4>
                                <p>
                                    индивидуальный подход к каждому клиенту
                                </p>
                            </div>
                        </div>
                        <div class="our_priorities_single">
                            <div class="our_priorities_icon">
                                <i class="flaticon-pendulum"></i>
                            </div>
                            <div class="our_priorities_text">
                                <h4>Скидки</h4>
                                <p>приятно радуем постоянных клиентов скидками
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="maska"></div>
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
                     Выполняем практически все работы касательно ремонта! Если в наш профиль не входит какой либо вид работ,
                        то мы с радостью посоветуем Вам профессионалов в этом деле!
                    </p>
                </div>
            </div>
            <div class="consrtuct_about_promo">
                <div class="about_promo_icon">
                    <i class="fa fa-user"></i>
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
        <div class="last_project_section">
            <div class="container">
                <h1>Последние проекты</h1>
                <div class="last_project_container">
                    <?php foreach ($lastProjects as $project){?>
                        <div class="last_project_list"  style="   background: url(/dist/img/projects/<?php echo $project['img'];?>);
                                height: 300px;
                                background-size: cover;
                                background-position: center;">
                            <!--                    <img src="/dist/img/projects/--><?php //echo $project['img']?><!--">-->
                            <div class="last_project_hover"></div>
                            <a href="/portfolio/projects/<?php echo $project['id']?>">смотреть</a>
                        </div>
                    <?php };?>

                </div>
            </div>

        </div>
    </div>
</div>


<?php include_once '/templates/layout/footer.php'; ?>
