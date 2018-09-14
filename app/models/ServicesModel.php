<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.04.2018
 * Time: 21:36
 */

class ServicesModel
{

    static function getLastProjects()
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM progects  ORDER BY id ASC LIMIT 3");
        $projects = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['img'] = $row['img'];
            $projects[$i]['title'] = $row['title'];
            $i++;
        }
        return $projects;
    }

    static function redactServices()
    {

        $db = DB::getConnection();
        $services = array();
        $result = $db->query("SELECT * FROM services where id = 1");
        $i = 0;
        while ($row = $result->fetch()) {
            $services[$i]['img'] = $row['img'];
            $services[$i]['text'] = $row['text'];
            $i++;
        }
        return $services;
    }

    static function saveServices($text, $img)
    {
        $db = Db::getConnection();
        if ($img) {
            $sql = "UPDATE services SET text = :text,img=:img   WHERE id = 1";
        } else {
            $sql = "UPDATE services SET text = :text  WHERE id = 1";
        }

        $result = $db->prepare($sql);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        if ($img) {
            $result->bindParam(':img', $img, PDO::PARAM_STR);
        }
        $result->execute();

    }

}