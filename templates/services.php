<?php include_once '/templates/layout/header2.php'; ?>

<section class="main-block2">
    <div class="bac_overlay"></div>

    <div class="bread_cramps">
        <div class="container">
            <h1 class="bread_cramps_about">Услуги</h1>
            <ul class="cramps_list">
                <li><a href="/" title="главная">Главная</a></li>
                <li><a title="главная" href="javascript:void(0);">Услуги</a></li>
            </ul>
        </div>
    </div>
</section>
<div class="services">
    <div class="container">
        <div class="services_wrepper">
            <div class="services_left">
                <?php echo $servicesBox[0]['text'] ?>
            </div>
            <div class="services_right">
                <img alt="главное фото Услуги" src="/dist/img/<?php echo $servicesBox[0]['img'] ?>">
            </div>
        </div>
    </div>
</div>

<div class="services_q">
    <div class="container">
        <div class="services_q_flex">
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-doors"></i>
                </div>
                <div class="services_list_text">
                    <h3>Устройство проемов</h3>
                    <span>
                    Установим новые или же рассширим старые проемы. Сделаем : арки, ниши, проемы.
                </span>
                </div>
            </div>

            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-trowel"></i>
                </div>
                <div class="services_list_text">
                    <h3>Отделочные работы</h3>
                    <span>
                   Ремонт ванных комнат и санузлов. Малярные работы. Штукатурные работы
                </span>
                </div>
            </div>

            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-wrecking-ball"></i>
                </div>
                <div class="services_list_text">
                    <h3>Демонтажные работы</h3>
                    <span>Удаление элементов прежнего ремонта – снятие обоев и плитки, штукатурки, разбор бетонного и др. видов пола, разбор мебели, снятие окон и дверей, демонтаж стен.</span>
                </div>
            </div>
            <!--            <div class="services_list">-->
            <!--                <div class="services_list_icon">-->
            <!--                    <i class="flaticon-brick-wall"></i>-->
            <!--                </div>-->
            <!--                <div class="services_list_text">-->
            <!--                    <h3>Устройство стен</h3>-->
            <!--                    <span></span>-->
            <!--                </div>-->
            <!--            </div>-->
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-plug"></i>
                </div>
                <div class="services_list_text">
                    <h3>Электромонтажные работы</h3>
                    <span>Выполняем все виды электромонтажных работ, производим установку новой и замену старой проводки.</span>
                </div>
            </div>
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-shower"></i>
                </div>
                <div class="services_list_text">
                    <h3>Сантехнические услуги</h3>
                    <span>Установка водонагревателей, душевых кабин, унитазов, ванн, умывальников и др... </span>
                </div>
            </div>
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-brick"></i>
                </div>
                <div class="services_list_text">
                    <h3>Настил полов</h3>
                    <span>Стяжка пола, ламинат, линолиум, паркет.</span>
                </div>
            </div>
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-lamp"></i>
                </div>
                <div class="services_list_text">
                    <h3>Устройство потолков</h3>
                    <span>Монтаж подвесного потолка, потолки из гипсакартона</span>
                </div>
            </div>
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-home"></i>
                </div>
                <div class="services_list_text">
                    <h3>Ремонт коттеджей</h3>
                    <span></span>
                </div>
            </div>
            <!--            <div class="services_list">-->
            <!--                <div class="services_list_icon">-->
            <!--                    <i class="flaticon-sink"></i>-->
            <!--                </div>-->
            <!--                <div class="services_list_text">-->
            <!--                    <h3>Ремонт санузла</h3>-->
            <!--                    <span></span>-->
            <!--                </div>-->
            <!--            </div>-->
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-sink"></i>
                </div>
                <div class="services_list_text">
                    <h3>Утепление фасадов</h3>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="choose_us"
     style="background-image: url('/dist/img/image-2.jpg');background-position: center;background-size: cover;">
    <div class="title">
        <h2>Почему выбирают нас</h2>
    </div>
    <div class="container">
        <div class="choose_us_flex">
            <div class="choose_us_list wow animated fadeInUp " data-wow-delay='0.3s'>
                <div class="choose_us_icon">
                    <i class="flaticon-flags"></i>
                </div>
                <div class="choose_us_info ">
                    <h3 class="choose_us_title">Работаем без выходных</h3>
                    <div class="simple-text">
                        <p>Кратчайшие сроки выполнения работ.</p>
                    </div>
                </div>
            </div>
            <div class="choose_us_list wow animated fadeInUp" data-wow-delay='0.3s'>
                <div class="choose_us_icon">
                    <i class="flaticon-worker"></i>
                </div>
                <div class="choose_us_info">
                    <h3 class="choose_us_title">Команда профессионалов</h3>
                    <div class="simple-text">
                        <p>Минимальный опыт наших сотрудников 7лет.</p>
                    </div>

                </div>

            </div>
            <div class="choose_us_list wow animated fadeInUp" data-wow-delay='0.3s'>
                <div class="choose_us_icon">
                    <i class="flaticon-danger-1"></i>
                </div>
                <div class="choose_us_info">
                    <h3 class="choose_us_title">Заключение договора</h3>
                    <div class="simple-text">
                        <p>Полная прозрачность сделки.</p>
                    </div>

                </div>

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
                        <img src="/dist/img/projects/<?php echo $project['img']; ?>">
                    </div>
                    <div class="last_project_list_bottom">
                        <h3>
                            <a href="/portfolio/projects/<?php echo $project['id'] ?>"><?php echo $project['title'] ?></a>
                        </h3>
                        <span class="view-projects">
                                   <a href="/portfolio/projects/<?php echo $project['id'] ?>"><i
                                               class=" fa fa-angle-right"></i></a>

                            </span>
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

<?php include_once '/templates/layout/footer.php'; ?>
