<?php include_once '/templates/layout/header2.php'; ?>
<section class="main-block2">
    <div class="bac_overlay"></div>
    <div class="bread_cramps">
        <div class="container">
            <h1 class="bread_cramps_about">О нас</h1>
            <ul class="cramps_list">
                <li><a href="/" title="главная">Главная</a></li>
                <li><a title="главная" href="javascript:void(0);">О нас</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="main-comment">
    <div class="container">
        <div id="show_form" class="show_form"><span>Добавить отзыв</span></div>
        <div id="form_1" class="form_group">
            <form id="com-save"  method="post" enctype="multipart/form-data">
                <div class="form_wrapper">
                    <div class="input_left">
                        <input class="input_text" id="before_name" type="text" name="name"
                               placeholder="Ваше имя*" >

                        <label for="before_name" style="position: relative">
                            <span id="error-name" class="error-name">Только буквы!</span>
                        </label>

                        <label for="before_job"></label>
                        <input id="before_phone" class="input_text"  type="tel" minlength="7" name="phone"
                               title="шаблон ввода 8 029 874 93 15 БЕЗ пробелов"
                               pattern="^(\+375|80)(29|25|44|33)(\d{3})(\d{2})(\d{2})$"
                               placeholder="Телефон">
                        <label for="before_phone"></label>
                        <input id="load_avtar" name="image_user" accept="image/jpeg,image/png" type="file">
                        <label id="avatar" for="load_avtar"><span>Загрузить фото</span></label>
                        <span id="error-size"
                              class="error-file">размер файла не больше 1,5мб, тип файла jpg, png.</span>
                    </div>
                    <div class="input_right">
                        <textarea placeholder="Оставьте комментарий" name="discription"></textarea>
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

<button type="button" id="load_commit" class="load_commit">Показать еще</button>


<?php include_once '/templates/layout/footer.php'; ?>
