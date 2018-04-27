<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.04.2018
 * Time: 16:58
 */

class Admin
{
    public function __construct($find)
    {
        $this->param = $find;
    }

    public function index()
    {
        if ($this->checkAdmin()) {
            require_once(ROOT . '\templates\admin\index.php');
        } else {
            require 'Error.php';
            $error = new Error();
        }
    }

    public function galery()
    {
        if ($this->checkAdmin()) {

            $projects = Projects::getProjects();
            require_once(ROOT . '\templates\admin\projects.php');
        } else {
            require 'Error.php';
            $error = new Error();
        }
    }

    public function editGalery()
    {
        if ($this->checkAdmin()) {
            $discription = Projects::getDiscription($this->param[1]);
            $images = Projects::getImagesForProjects($this->param[1]);
            $id = $this->param;
            require_once(ROOT . '\templates\admin\editGalery.php');
        } else {
            require 'Error.php';
            $error = new Error();
        }
    }

    public function uploadImage()
    {
        if ($this->checkAdmin()) {
            $mainImage = $_FILES['image2']['name'];
            if ($mainImage) {
                Projects::updateMainImage($mainImage, $this->param[1]);
            }
            $image = $_FILES['image']['name'];
            $discription = $_POST['txt'];
            Projects::insertImageForProjects($image, $this->param[1]);
            Projects::updateDiscriptionProgects($discription, $this->param[1]);
            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/dist/img/projects/$image");
            }
            header("location:" . $_SERVER['HTTP_REFERER']);


        } else {
            require 'Error.php';
            $error = new Error();
        }
    }

    public function deliteImage()
    {
        if ($this->checkAdmin()) {
            Projects::deliteImages($this->param[1]);
            header("location:" . $_SERVER['HTTP_REFERER']);
        } else {
            require 'Error.php';
            $error = new Error();
        }
    }


    public function newProject()
    {
        if ($this->checkAdmin()) {
            $cat = Projects::getCategories();
            require_once(ROOT . '\templates\admin\newProject.php');

        } else {
            require 'Error.php';
            $error = new Error();
        }
    }

    public function addProject()
    {
        if ($this->checkAdmin()) {
            require_once(ROOT . '\templates\admin\index.php');
        } else {
            require 'Error.php';
            $error = new Error();
        }
        $name = $_POST['name'];
        $discript = $_POST['txt'];
        $image = $_FILES['image']['name'];
        $cat = $_POST['cat'];
        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
            move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/dist/img/projects/$image");
        }
        Projects::createNewProject($image, $discript, $name, $cat);
        header("location:/admin/projects/");
    }

    public function deleteProject()
    {
        if ($this->checkAdmin()) {

            Projects::deleteProject($this->param[1]);
            header("location:" . $_SERVER['HTTP_REFERER']);
        } else {
            require 'Error.php';
            $error = new Error();
        }

    }


    public function checkAdmin()
    {
        if ($_SESSION['admin'] && $_SESSION['admin'] === 'viktor') {
            return true;
        } else {
            return false;
        }
    }

    public function login()
    {
        require_once(ROOT . '\templates\login.php');
    }

    public function saveUser()
    {

        $login = htmlspecialchars(strip_tags($_POST['name']));
        $password = md5(htmlspecialchars(strip_tags($_POST['password'])));
        $user = new Auth();
        $user_name = $user->getAdmin($login, $password);
        if ($user_name && $user_name['login'] === 'viktor') {
            $_SESSION['admin'] = 'viktor';
            header('location:/admin/');
        } else {
            header('location:/login/');
        }

    }

    public function redactWhatWeDo()
    {

        if ($this->checkAdmin()) {
            $what_we_do = Projects::what_weDO();
            require_once(ROOT . '\templates\admin\WhatWeDo.php');
        } else {
            require 'Error.php';
            $error = new Error();
        }
    }

    public function edit_element()
    {
        if ($this->checkAdmin()) {
            $text = $_POST['txt'];
            $file = $_FILES['image']['name'];
            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/dist/img/$file");
            }
            Projects::editMainElement($text, $file);
            header("location:/admin/");
        } else {
            require 'Error.php';
            $error = new Error();
        }

    }

    public function publishComments()
    {

        if ($this->checkAdmin()) {
            CommentModels::publishComments($this->param[1]);
            header("location:" . $_SERVER['HTTP_REFERER']);
        } else {
            require 'Error.php';
            $error = new Error();
        }


    }

    public function deleteComment()
    {
        if ($this->checkAdmin()) {
            CommentModels::delete($this->param[1]);
            header("location:" . $_SERVER['HTTP_REFERER']);
        } else {
            require 'Error.php';
            $error = new Error();
        }
    }

    public function editServices()
    {

        $services = ServicesModel::redactServices();
        require_once(ROOT . '\templates\admin\redactServices.php');
    }

    public function save_services()
    {
        if ($this->checkAdmin()) {
            $text = $_POST['txt'];
            $file = $_FILES['image']['name'];
            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/dist/img/$file");
            }
            ServicesModel::saveServices($text, $file);
            header("location:/admin/");
        } else {
            require 'Error.php';
            $error = new Error();
        }
    }

    public function redact_price()
    {
        if ($this->checkAdmin()) {
            $file = $_FILES['file']['name'];
            if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
                move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/price/$file");
            }
            header("location:" . $_SERVER['HTTP_REFERER']);
        } else {
            require 'Error.php';
            $error = new Error();
        }
    }

    public function logout()
    {
        unset($_SESSION['admin']);
        session_destroy();
        header('location:/');
    }


}