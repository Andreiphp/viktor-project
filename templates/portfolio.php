<?php include_once '/templates/layout/header2.php'; ?>

<div class="bread_cramps">
    <div class="container">
        <ul class="cramps_list">
            <li><a href="/" title="главная">Главная</a></li>
            <li class=""><a class="active" href="/portfolio/" title="о нас">Портфолио</a></li>
        </ul>
    </div>
</div>

<div class="projects_section">
    <div class="container">
        <div id="tabs" class="c-tabs no-js">
            <div class="c-tabs-nav">
                <a href="#" id="flat" class="c-tabs-nav__link is_active">
                    Квартиры
                </a>
                <a href="#" id="balcony" class="c-tabs-nav__link">
                    Лоджии
                </a>
                <a href="#" id="cottages" class="c-tabs-nav__link">
                    Коттеджи
                </a>
                <a href="#" id="Bathroom" class="c-tabs-nav__link">
                    Санузлы
                </a>
                <a href="#" id="facades" class="c-tabs-nav__link">
                    Фасады
                </a>
            </div>
            <div class="c-tab is_active">
                <div id="flat_content" class="c-tab__content">

                </div>
            </div>
            <div class="c-tab">
                <div id="balcony_content" class="c-tab__content">

                </div>
            </div>
            <div class="c-tab">
                <div id="cottages_content" class="c-tab__content">

                </div>
            </div>

            <div class="c-tab">
                <div id="Bathroom_content" class="c-tab__content">

                </div>
            </div>
            <div class="c-tab">
                <div id="facades_content" class="c-tab__content">

                </div>
            </div>
        </div>
    </div>
    <button class="load_more mr_top" data-load = 'flat' id="load_more" type="button">Показать еще</button>
</div>
</div>
<script>

    window.onload = function () {
        var myTabs = tabs({
            el: '#tabs',
            tabNavigationLinks: '.c-tabs-nav__link',
            tabContentContainers: '.c-tab'
        });

        myTabs.init();
    }
</script>

<?php include_once '/templates/layout/footer.php'; ?>

