<?php include_once '/templates/layout/header2.php'; ?>
<div class="bread_cramps">
    <div class="container">
        <ul class="cramps_list">
            <li><a href="/" title="главная">Главная</a></li>
        </ul>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="contact-cart">
            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af8bda7f8b514f919dba7226b9c4ef8f77c4e6c0a1b97f3c1a4f547849a1513c7&amp;width=100%25&amp;height=412&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="contact_content">
            <div id="form_1" class="form_group animated fadeInDown" style="display: inline-block;">
                <form name="sendMail" action="send_mail/" method="post">
                    <div class="form_wrapper">
                        <div class="input_left">
                            <input class="input_text" id="before_name" required type="text" name="name"
                                   placeholder="Ваше имя*">
                            <label for="before_name"></label>
                            <input id="before_job" required class="input_text" type="text" name="job"
                                   placeholder="Профессия*">
                            <label for="before_job"></label>
                            <input id="before_mail" required class="input_text" type="email" name="mail"
                                   placeholder="Почта*">
                            <label for="before_mail"></label>
                            <input id="before_phone" required class="input_text" type="tel" minlength="7" name="phone"
                                   title="шаблон ввода 8 029 874 93 15"
                                   placeholder="Телефон">
                            <label for="before_phone"></label>
                        </div>
                        <div class="input_right ">
                            <textarea placeholder="Напишите нам" name="discription"></textarea>
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
                        Минск, Боровляны 40 лет победы.
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        15.zhirnosti@mail.ru
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        + 375 29 777 80 96
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include_once '/templates/layout/footer.php'; ?>
