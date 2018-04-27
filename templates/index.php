<?php include_once '/templates/layout/header.php'; ?>
<div class="icon_box_section grid">
    <div class="icon_box_content">
        <div class="icon_bar"><i class="fa flaticon-home-1 "></i></div>
        <div class="icon_title">Безупречное качество</div>
        <div class="icon_text">90% клиентов приходит к нам по рекомендациям от бывших заказчиков.
            Поэтому мы выполняем свою работу на 100%
        </div>
    </div>
    <div class="icon_box_content">
        <div class="icon_bar"><i class="fa flaticon-fan "></i></div>
        <div class="icon_title">поддержка 24/24</div>
        <div class="icon_text">
            Наш сайт доступен для Вас 24 часа в сутки.
            Напишите нам сообщение и мы в ближайшее время свяжемся с вами.
        </div>
    </div>
    <div class="icon_box_content">
        <div class="icon_bar"><i class="fa flaticon-hammer "></i></div>
        <div class="icon_title">Современный стиль</div>
        <div class="icon_text">
            Наш дизайнер будет рад помочь вам разработать уникальный стиль в соответствии с вашими требованиями и
            бюджетом.
        </div>
    </div>
    <div class="icon_box_content">
        <div class="icon_bar"><i class="fa flaticon-fence"></i></div>
        <div class="icon_title">Гарантия</div>
        <div class="icon_text">
            Официальный договор и 2 года гарантии на выполненные нами работы.
        </div>
    </div>
</div>

<div class="our_progect">
    <div class="container">
        <h2 class="our_header">
            <span>
                <span class="our_yellow">Наши</span>
                 проекты
            </span>
        </h2>
        <nav class="our_box">
            <ul id="slider_cat" class="our_list">
                <li id="all" class="our_item our_item_active">Все</li>
                <li id="kv" class="our_item">Квартиры</li>
                <li id="loggias" class="our_item">Лоджии</li>
                <li id="cottage" class="our_item">Коттеджи</li>
                <li id="bathroom" class="our_item">Санузлы</li>
            </ul>
        </nav>
        <div id="btn_slider">
            <button class="next">&lt;</button>
            <button class="back">&gt;</button>
        </div>
        <div class="our_progect_content"></div>
    </div>
</div>
<div class="counter">
    <div class="container">
        <div class="cnnt">
            <ul class="content_cnt">
                <li class="number_count counter_pr">140</li>
                <li class="title_count">проектов</li>
            </ul>
        </div>
        <div class="cnnt">
            <ul class="content_cnt">
                <li class="number_count counter_cl">75</li>
                <li class="title_count_hp">счастливых клиентов</li>
            </ul>
        </div>
        <div class="cnnt">
            <ul class="content_cnt">
                <li class="number_count counter_pr">140</li>
                <li class="title_count">проектов</li>
            </ul>
        </div>
        <div class="cnnt">
            <ul class="content_cnt">
                <li class="number_count counter_cl">75</li>
                <li class="title_count_hp">счастливых клиентов</li>
            </ul>
        </div>

    </div>
</div>
<div class="what_we_do">
    <div class="container">
        <div class="our_progect">
            <h2 class="our_header"><span><span class="our_yellow">Что МЫ</span>делаем</span></h2>
        </div>
        <div class="what_we_do_box">
            <div class="we_do_left">
                <div class="what_we_do_text">
                    <?php echo $what_we_do[0]['text']; ?>
                </div>
                <div class="count_project">
                    <span class="num_project">140</span><span class="pr">проектов</span>
                    <span class="see_all_project"><a href="#">Перейти <i class="fa fa-arrow-right "
                                                                         aria-hidden="true"></i></a> </span>
                </div>
            </div>
            <div class="we_do_right">
                <img src="../dist/img/<?php echo $what_we_do[0]['img']; ?>">
            </div>
        </div>
    </div>
</div>
<div class="our_time">
    <div class="bacground_overlay"></div>
    <div class="container">
        <div class="our_time_content">
            <h2 class="obout_himself">
            <span>
                <span class="our_yellow">О</span>
                 нас
            </span>
            </h2>
            <p>Команда профессионалов с большим опытом работы!</p>
            <p>Множество довольных клиентов!</p>
            <p>Безупречное качество работы!</p>
            <a href="/about/" class="btn_about">Перейти</a>
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
            <?php foreach ($comments as $comment){?>


            <div class="comments_list">
                <div class="reviews_content">
                    <div class="avatar_box">
                        <img class="avarat_img" src="/dist/img/comments/<?php echo $comment['img']?>" title="аватар автора" alt="фото автора">
                    </div>
                    <div class="reviews_text">
                        <blockquote>
                            <p>
                                <?php echo $comment['discription']?>
                            </p>
                            <cite>
                                <strong><?php echo $comment['date']?></strong>
                                <strong><?php echo $comment['user_name']?></strong>
                                <?php echo $comment['job']?>
                            </cite>
                        </blockquote>
                    </div>
                </div>
            </div>
            <?php }?>

        </div>

    </div>
</div>
<script>
    window.onload = function () {
        let counter = new Counter();
    }
</script>
<?php include_once '/templates/layout/footer.php'; ?>
