<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title> Admin </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="bs-css" href="../../../dist/admin/admin/css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="../../../dist/admin/admin/css/charisma-app.css" rel="stylesheet">
    <link href='../../../dist/admin/admin/css/jquery.noty.css' rel='stylesheet'>
    <link href='../../../dist/admin/admin/css/noty_theme_default.css' rel='stylesheet'>
    <link href='../../../dist/admin/admin/css/elfinder.min.css' rel='stylesheet'>
    <link href='../../../dist/admin/admin/css/elfinder.theme.css' rel='stylesheet'>
    <link href='../../../dist/admin/admin/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='../../../dist/admin/admin/css/uploadify.css' rel='stylesheet'>
    <link href='../../../dist/admin/admin/css/animate.min.css' rel='stylesheet'>
    <script type="text/javascript" src="/libs/ckeditor/ckeditor.js"></script>


    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>

    <!-- topbar starts -->
    <ul class="" style="list-style-type: none;padding: 5px">
        <li><a href="/admin/logout/">Logout</a></li>
    </ul>
    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">

        </div>
    </div>
    <!-- topbar ends -->

<div class="ch-container">
    <div class="row">


        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="/admin/"><i
                                        class="glyphicon glyphicon-home"></i><span> Главная</span></a>
                        </li>
                        <li><a class="ajax-link" href="/admin/projects/"><i
                                        class="glyphicon glyphicon-eye-open"></i><span> Проекты</span></a>
                        </li>
                        <li><a class="ajax-link" href="/admin/new-project/"><i
                                        class="glyphicon glyphicon-pencil"></i><span>Добавить проект</span></a>
                        </li>
                        <li><a class="ajax-link" href="/admin/redact-main/"><i
                                        class="glyphicon glyphicon-pencil"></i><span>Редак. главная</span></a>
                        </li>
                        <li><a class="ajax-link" href="/admin/redact-about/"><i
                                        class="glyphicon glyphicon-pencil"></i><span>Редак. о нас</span></a>
                        </li>
                        <li><a class="ajax-link" href="/admin/redact-service/"><i
                                        class="glyphicon glyphicon-pencil"></i><span>Редак. сервис</span></a>
                        </li>

                        <li><a class="ajax-link" href="/admin/comments/1"><i
                                        class="glyphicon glyphicon-align-justify"></i><span>Коментарии</span></a></li>

                    </ul>
                </div>
            </div>
        </div>

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">


