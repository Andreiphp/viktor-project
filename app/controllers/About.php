<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.04.2018
 * Time: 13:49
 */

class About
{
    public function index()
    {
        $meta_key = 'Ремонт квартир в Минске, ремонт дома, строительные работы, ремонт квартир, ремонт под ключ, фасады';
        $meta_desc = 'Компания "Ваш Уютный Дом - выполняет полный перечень работ по ремонту : квартир , коттеджей , фасадов , а также выполняет ремонт квартир под заказ"';
        $about = AboutModel::getContent();
        $lastProjects = ServicesModel::getLastProjects();
        $comments = CommentModels::getComments(0);
        require_once(ROOT . '\templates\about.php');
    }

    public function pageRedactAbout()
    {

        $about = AboutModel::getContent();
        require_once(ROOT . '\templates\admin\aboutEdit.php');

    }

    public function uploadAboutFon()
    {
        $file = $_FILES['image2']['name'];

        if (is_uploaded_file($_FILES["image2"]["tmp_name"])) {
            move_uploaded_file($_FILES["image2"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/dist/img/$file");
        }
        AboutModel::editMainFon($file);
        header("location:" . $_SERVER['HTTP_REFERER']);


    }

    public function editAbout()
    {
        $file = $_FILES['image']['name'];
        $text = $_POST['txt'];
        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
            move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/dist/img/$file");
        }

        AboutModel::editAboutElement($text, $file);
        header("location:" . $_SERVER['HTTP_REFERER']);

    }


}