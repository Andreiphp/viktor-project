<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.04.2018
 * Time: 17:42
 */

class Comment
{

    public function index()
    {

        $meta_key = 'Ремонт квартир в Минске, ремонт дома, строительные работы, ремонт квартир, ремонт под ключ';
        $meta_desc = 'Ваш Уютный Дом - отзывы';
        $about = AboutModel::getContent();
        require_once(ROOT . '\templates\comment.php');
    }

    public function postCommit()
    {
        $name = htmlspecialchars(strip_tags($_POST['name']));
        $phone = htmlspecialchars(strip_tags($_POST['phone']));
        $image_user = htmlspecialchars(strip_tags($_FILES['file']['name']));
        $discription = htmlspecialchars(strip_tags($_POST['discription']));

        if (empty($image_user)) {
            $image_user = 'no-image.png';
        } else {
            if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
                move_uploaded_file($_FILES["file"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/dist/img/comments/$image_user");
            }
        }
        print_r($_FILES);
        print_r($_POST);

        CommentModels::insertICommit($name, $discription, $phone, $image_user);
        //header("location:" . $_SERVER['HTTP_REFERER']);

    }

    public function get_comments()
    {
        $start = $_POST['start'];
        $comments = CommentModels::getComments($start);
        echo json_encode($comments);

    }

    public function checkComment()
    {

        $count = CommentModels::checkComment();
        echo $count;
    }
}