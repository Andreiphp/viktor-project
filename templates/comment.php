<?php include_once '/templates/layout/header2.php'; ?>
<div class="bread_cramps">
    <div class="container">
        <ul class="cramps_list">
            <li><a href="/" title="главная">Главная</a></li>
            <li class=""><a class="active" href="/comment/" title="о нас">Комментарии</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div id="show_form" class="show_form"><span>Добавить отзыв</span></div>
    <div id="form_1" class="form_group">
        <form action="/create/commit/" method="post"  enctype="multipart/form-data">
            <div class="form_wrapper">
                <div class="input_left">
                    <input class="input_text" id="before_name" required type="text" name="name" placeholder="Ваше имя*">
                    <label for="before_name"></label>
                    <input id="before_job" required class="input_text" type="text" name="job" placeholder="Профессия*">
                    <label for="before_job"></label>
                    <input id="before_phone" class="input_text" type="tel" minlength="7" name="phone"
                           title="шаблон ввода 8 029 874 93 15"
                            placeholder="Телефон">
                    <label for="before_phone"></label>
                    <input id="load_avtar" name="image_user"  type="file">
                    <label id="avatar" for="load_avtar"><span>Загрузить фото</span></label>
                </div>
                <div class="input_right">
                    <textarea placeholder="Оставьте комментарий" name="discription"></textarea>
                </div>
            </div>
            <button class="send_commit" type="submit">
                    <span>
                        <i class="fa fa-commenting-o" aria-hidden="true"></i>
                    </span> Оставить отзыв
            </button>
        </form>
    </div>


    <div class="container">
        <div id="comments" class="comments toComments">

        </div>
    </div>
</div>
<button type="button" id="load_commit" class="load_commit">Показать еще</button>
<?php include_once '/templates/layout/footer.php'; ?>
