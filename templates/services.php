<?php include_once '/templates/layout/header2.php'; ?>

<div class="bread_cramps">
    <div class="container">
        <ul class="cramps_list">
            <li><a href="/" title="главная">Главная</a></li>
            <li class=""><a class="active" href="/services/" title="о нас">Услуги</a></li>
        </ul>
    </div>
</div>
<div class="services">
    <div class="container">
        <div class="services_wrepper">
            <div class="services_left">
              <?php echo $servicesBox[0]['text']?>
            </div>
            <div class="services_right">
                <img src="/dist/img/<?php echo $servicesBox[0]['img']?>">
            </div>
        </div>
    </div>
</div>
<!--<div class="work_process">-->
<!--    <div class="container">-->
<!--        <div class="work_step">-->
<!--            <div class="work_img">-->
<!--                <img src="img/pokraska.jpg">-->
<!--            </div>-->
<!--            <div class="work_count">-->
<!--                <span>1</span>-->
<!--            </div>-->
<!--            <div class="work_text">-->
<!--                <h3>Покраска</h3>-->
<!--                <p>-->
<!--                    Большинство людей, считают что покраска стен способна решить ряд-->
<!--                    проблем связанных с долгой эксплуатацией. Многие считают что-->
<!--                    крашенные стены отлично моются. Так ли это на самом деле или-->
<!--                    придётся подготовиться к некоторым трудностям?-->
<!--                    Преимущества и недостатки покраски стен приведены в нашей таблице.-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="work_step">-->
<!--            <div class="work_text">-->
<!--                <h3>Монтаж-Гипсокартона</h3>-->
<!--                <p>-->
<!--                    Гипсокартон – обязательный «участник» любого ремонта.-->
<!--                    С его помощью строят легкие декоративные конструкции, выравнивают стены, создают функциональные-->
<!--                    интерьерные элементы. Но чтобы результат оправдал ожидания,-->
<!--                    монтаж гипсокартона следует поручить специалистам.-->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="work_count">-->
<!--                <span>2</span>-->
<!--            </div>-->
<!---->
<!--            <div class="work_img">-->
<!--                <img src="img/montaj_gipsokartona.jpg">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="work_step">-->
<!--            <div class="work_img">-->
<!--                <img src="img/rabota_s_polom.jpg">-->
<!--            </div>-->
<!--            <div class="work_count">-->
<!--                <span>3</span>-->
<!--            </div>-->
<!--            <div class="work_text">-->
<!--                <h3>Работы с полом</h3>-->
<!--                <p>-->
<!--                    Работы с полом – важная часть любого ремонта,-->
<!--                    ведь от того, насколько аккуратно и грамотно они будут выполнены, зависит не только общий вид-->
<!--                    помещения,-->
<!--                    но и срок эксплуатации напольного покрытия.-->
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</div>-->


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
                   Ремонт ванных комнат и санузлов.Малярные работы.Штукатурные работы
                </span>
                </div>
            </div>

            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-wrecking-ball"></i>
                </div>
                <div class="services_list_text">
                    <h3>Демонтажные работы</h3>
                    <span></span>
                </div>
            </div>
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-brick-wall"></i>
                </div>
                <div class="services_list_text">
                    <h3>Устройство стен</h3>
                    <span></span>
                </div>
            </div>
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-plug"></i>
                </div>
                <div class="services_list_text">
                    <h3>Электромонтажные работы</h3>
                    <span></span>
                </div>
            </div>
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-shower"></i>
                </div>
                <div class="services_list_text">
                    <h3>Сантехнические услуги</h3>
                    <span></span>
                </div>
            </div>
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-brick"></i>
                </div>
                <div class="services_list_text">
                    <h3>Настил полов</h3>
                    <span></span>
                </div>
            </div>
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-lamp"></i>
                </div>
                <div class="services_list_text">
                    <h3>Устройство потолков</h3>
                    <span></span>
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
            <div class="services_list">
                <div class="services_list_icon">
                    <i class="flaticon-sink"></i>
                </div>
                <div class="services_list_text">
                    <h3>Ремонт санузла</h3>
                    <span></span>
                </div>
            </div>
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

<div class="choose_us" style="background-image: url('/dist/img/background-13.jpg');background-position: center;background-size: cover;">
    <div class="title">
        <h3>Почему выбирают нас</h3>
    </div>
    <div class="container">
        <div class="choose_us_flex">
            <div class="choose_us_list wow animated fadeInUp "data-wow-delay='0.3s'>
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
                <div class="last_project_list"
                     style="   background: url(/dist/img/projects/<?php echo $project['img']; ?>);
                             height: 300px;
                             background-size: cover;
                             background-position: center;">
                    <!--                    <img src="/dist/img/projects/--><?php //echo $project['img']?><!--">-->
                    <div class="last_project_hover"></div>
                    <a href="/portfolio/projects/<?php echo $project['id'] ?>">смотреть</a>
                </div>
            <?php }; ?>

        </div>
    </div>

</div>


<?php include_once '/templates/layout/footer.php'; ?>
