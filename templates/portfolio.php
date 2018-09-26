<?php include_once '/templates/layout/header2.php'; ?>

<section class="main-block2">
    <div class="bac_overlay"></div>

    <div class="bread_cramps">
        <div class="container">
            <h1 class="bread_cramps_about">Портфолио</h1>
            <ul class="cramps_list">
                <li><a href="/" title="главная">Главная</a></li>
                <li><a title="Портфолио" href="javascript:void(0);">Портфолио</a></li>
            </ul>
        </div>
    </div>
</section>

<div class="projects_section">
    <div class="container">
        <div id="tabs" class="c-tabs no-js">
            <div class="c-tabs-nav">
                <span id="flat" class="c-tabs-nav__link is_active">
                    Квартиры
                </span>
                <span id="balcony" class="c-tabs-nav__link">
                    Лоджии
                </span>
                <span id="cottages" class="c-tabs-nav__link">
                    Коттеджи
                </span>
                <span id="Bathroom" class="c-tabs-nav__link">
                    Санузлы
                </span>
                <span id="facades" class="c-tabs-nav__link">
                    Фасады
                </span>
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
    <div style="width: 268px;margin: 0 auto;text-align: center;">
        <button class="load_more mr_top" data-load='flat' id="load_more" type="button">Показать еще</button>
    </div>
</div>
</div>
<script>
    window.onload = function () {
        // var
        let myTabs = tabs({
            el: '#tabs',
            tabNavigationLinks: '.c-tabs-nav__link',
            tabContentContainers: '.c-tab'
        });
        myTabs.init();
    }
</script>
<?php include_once '/templates/layout/footer.php'; ?>

