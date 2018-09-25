<?php include_once '/templates/layout/header2.php'; ?>
<section class="main-block2">
    <div class="bac_overlay"></div>
    <div class="bread_cramps">
        <div class="container">
            <h1 class="bread_cramps_about">Отзывы</h1>
            <ul class="cramps_list">
                <li><a href="/" title="главная">Главная</a></li>
                <li><a title="Отзывы" href="javascript:void(0);">Отзывы</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="main-comment">
    <div class="container">
        <div id="show_form" class="show_form"><span>Добавить отзыв</span></div>
        <div id="form_1" class="form_group animated fadeInDown">
            <form id="com_save" method="post" enctype="multipart/form-data">
                <div class="form_wrapper">
                    <div class="input_left">
                        <input name="md5" type="hidden">
                        <div class="form-group">
                            <input class="input_text" id="before_name" type="text" name="name" required
                                   placeholder="Ваше имя*">
                            <span id="error-name" class="error-name">только буквы*(обязательное поле)</span>
                            <label for="before_name" style="position: relative"></label>
                        </div>


                        <div class="form-group"><input id="before_phone" class="input_text" type="tel" minlength="7" name="phone"
                                             title="шаблон ввода 80298749315 БЕЗ пробелов" required
                                             pattern="^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$"
                                             placeholder="Телефон">
                            <label for="before_phone"></label></div>
                      <div class="form-group">
                          <input id="load_avtar" name="image_user" accept="image/jpeg,image/png" type="file">
                          <label id="avatar" for="load_avtar"><span>Загрузить фото</span></label>
                          <span id="error-size" class="error-file">размер файла не больше 1 мб, тип файла jpg, png.</span>
                          <span id="new-avatar" class="error-file" style="display: block;"></span>
                      </div>
                    </div>
                    <div class="input_right">
                        <textarea placeholder="Оставьте комментарий" required name="discription"></textarea>
                        <span id="error-comment" class="error-file">Заполните это поле (не менее 40 сим...)</span>
                    </div>
                </div>
                <div class="captcha">
                    <span id="aspm">trgr</span>
                    <input name="user_value" required type="text" value="">
                    <div>
                        <span id="error-captcha"></span>
                    </div>
                </div>
                <button id="send_com" class="send_commit" type="submit">
                    <span>
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                    </span> Оставить отзыв
                </button>
            </form>
        </div>

        <div id="comments" class="comments toComments"></div>
    </div>
</section>

<div id="wt-comment" class="wt">
    <div class="wt-wrapper">
        <span class="wt-text">
            Спасибо за оставленный комментарий! После модерации Ваш комментарий будет опубликован!
        </span>
    </div>
</div>

<button type="button" id="load_commit" class="load_commit">Показать еще</button>


<?php include_once '/templates/layout/footer.php'; ?>
