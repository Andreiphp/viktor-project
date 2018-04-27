<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.04.2018
 * Time: 13:51
 */

class AboutModel
{
    static function editMainFon($mainImg)
    {
        $db = Db::getConnection();
        $sql = "UPDATE about SET mainImg = :mainImg   WHERE id = 1";
        $result = $db->prepare($sql);
        $result->bindParam(':mainImg', $mainImg, PDO::PARAM_STR);
        $result->execute();
    }


    static function editAboutElement($text, $img)
    {
        $db = Db::getConnection();
        if ($img) {
            $sql = "UPDATE about SET text = :text,img=:img   WHERE id = 1";
        } else {
            $sql = "UPDATE about SET text = :text  WHERE id = 1";
        }

        $result = $db->prepare($sql);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        if ($img) {
            $result->bindParam(':img', $img, PDO::PARAM_STR);
        }
        $result->execute();
    }

    static function getContent()
    {
        $db = DB::getConnection();
        $about = array();
        $result = $db->query("SELECT * FROM about where id = 1");
        $i = 0;
        while ($row = $result->fetch()) {
            $about[$i]['mainImg'] = $row['mainImg'];
            $about[$i]['img'] = $row['img'];
            $about[$i]['text'] = $row['text'];
            $i++;
        }
        return $about;
    }

}