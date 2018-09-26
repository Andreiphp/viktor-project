<?php include_once '/templates/layout/header2.php'; ?>
<section class="main-block2">
    <div class="bac_overlay"></div>
    <div class="bread_cramps">
        <div class="container">
            <h1 class="bread_cramps_about">Контакты</h1>
            <ul class="cramps_list">
                <li><a href="/" title="главная">Главная</a></li>
                <li><a title="Контакты" href="javascript:void(0);">Контакты</a></li>
            </ul>
        </div>
    </div>
</section>
<div class="contact">
    <div class="container">
        <!--        <div class="contact-cart">-->
        <!--            <script type="text/javascript" charset="utf-8" async-->
        <!--                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af8bda7f8b514f919dba7226b9c4ef8f77c4e6c0a1b97f3c1a4f547849a1513c7&amp;width=100%25&amp;height=412&amp;lang=ru_RU&amp;scroll=true"></script>-->
        <!--        </div>-->
        <div class="contact_content">
            <div id="form_1" class="form_group animated fadeInDown" style="display: inline-block;">
                <h2 class="send_us">Написать нам</h2>
                <form name="sendMail" action="send_mail/" method="post">
                    <div class="form_wrapper">
                        <div class="input_left">
                            <label for="before_name" class="lab_name lab_name_name">
                                <input class="input_text" id="before_name" required type="text" name="name"
                                       title="Только русские буквы" placeholder="Ваше имя*"
                                       pattern="^[а-яА-Я]+\s*[а-яА-Я]*$">
                            </label>
                            <label class="lab_name lab_name_mail" for="before_mail">
                                <input id="before_mail" required class="input_text" type="email" name="mail"
                                       placeholder="Почта*">
                            </label>
                            <label for="before_phone" class="lab_name lab_name_phone">
                                <input id="before_phone" class="input_text " type="tel" minlength="7"
                                       name="phone"
                                       title="шаблон ввода 80298749315 БЕЗ пробелов" required
                                       pattern="^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$"
                                       placeholder="Телефон">
                            </label>
                        </div>


                        <div class="input_right ">
                            <textarea placeholder="Напишите нам" required minlength="30" maxlength="200"
                                      name="discription"></textarea>
                        </div>
                    </div>
                    <button class="send_commit" type="submit">
                    <span>
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                    </span> Написать нам
                    </button>
                </form>
            </div>
            <div class="contact_info animated fadeInDown">
                <h3 class="contact_info_title">Контакты</h3>
                <ul class="contact_list">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <span> Минск, Боровляны 40 лет победы.</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <span> 15.zhirnosti@mail.ru</span>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <span>   + 375 29 777 80 96</span>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <span>  + 375 44 784 32 90</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include_once '/templates/layout/footer.php'; ?>
