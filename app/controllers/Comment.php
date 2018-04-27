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

        $about = AboutModel::getContent();
        require_once(ROOT . '\templates\comment.php');
    }

    public function postCommit()
    {
        $name = htmlspecialchars(strip_tags($_POST['name']));
        $job = htmlspecialchars(strip_tags($_POST['job']));
        $phone = htmlspecialchars(strip_tags($_POST['phone']));
        $image_user = htmlspecialchars(strip_tags($_FILES['image_user']['name']));
        $discription = htmlspecialchars(strip_tags($_POST['discription']));

        if(empty($image_user)){
            $image_user = 'no-image2.jpg';
        }else{
            if (is_uploaded_file($_FILES["image_user"]["tmp_name"])) {
                move_uploaded_file($_FILES["image_user"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/dist/img/comments/$image_user");
            }
        }


        CommentModels::insertICommit($name, $discription, $job, $phone, $image_user);
        header("location:" . $_SERVER['HTTP_REFERER']);

    }

    public function get_comments()
    {
        $start = $_POST['start'];
        $comments = CommentModels::getComments($start);
        echo json_encode($comments);

    }
}