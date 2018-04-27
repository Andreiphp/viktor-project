<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.04.2018
 * Time: 14:19
 */

class PaginationModel
{

    static function getComments($art)
    {

        $db = DB::getConnection();
        $comments = array();
        $result = $db->query("SELECT * FROM comments ORDER BY id DESC LIMIT $art,20");
        $i = 0;
        while ($row = $result->fetch()) {
            $comments[$i]['id'] = $row['id'];
            $comments[$i]['user_name'] = $row['user_name'];
            $comments[$i]['discription'] = $row['discription'];
            $comments[$i]['date'] = $row['date'];
            $comments[$i]['img'] = $row['img'];
            $comments[$i]['status'] = $row['status'];
            $i++;
        }
        return $comments;
    }

    static function pagNav()
    {
        $db = DB::getConnection();
        $query = $db->query("SELECT COUNT(*) as id FROM comments");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $row = $query->fetch();
        $count = $row['id'];
        $str_pag = ceil($count / 20);
        return $str_pag;
    }
}