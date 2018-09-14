<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.04.2018
 * Time: 22:06
 */

class CommentModels
{
    static function insertICommit($name, $discription, $phone, $image_user)
    {
        $db = Db::getConnection();
        $sql = "INSERT INTO comments (user_name,discription,img,phone) VALUES
 (:user_name,:discription,:img,:phone)";
        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $name, PDO::PARAM_STR);
        $result->bindParam(':discription', $discription, PDO::PARAM_STR);
        $result->bindParam(':img', $image_user, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_INT);
        return $result->execute();
    }

    static function getComments($start)
    {
        $db = DB::getConnection();
        $comments = array();
        $result = $db->query("SELECT * FROM comments where status = 'ок' ORDER BY id DESC LIMIT $start,10");
        $i = 0;
        while ($row = $result->fetch()) {
            $comments[$i]['id'] = $row['id'];
            $comments[$i]['user_name'] = $row['user_name'];
            $comments[$i]['discription'] = $row['discription'];
            $comments[$i]['date'] = $row['date'];
            $comments[$i]['img'] = $row['img'];
            $comments[$i]['job'] = $row['job'];
            $i++;
        }
        return $comments;
    }

    static function publishComments($id)
    {
        $status = 'ок';
        $db = Db::getConnection();
        $sql = "UPDATE comments SET status = :status WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':status', $status, PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

    }

    static function delete($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM comments WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
    }
}