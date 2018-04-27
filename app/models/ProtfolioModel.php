<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 18.04.2018
 * Time: 20:12
 */

class ProtfolioModel
{

    static function getProjectsAjax($start, $cat)
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM progects  WHERE cat_id = $cat LIMIT $start,6");
        $products = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['img'] = $row['img'];
            $products[$i]['title'] = $row['title'];
            $i++;
        }
        return $products;

    }

    static function checkProjects($cat)
    {
        $db = Db::getConnection();
        $count = $db->query("SELECT COUNT(*) as id FROM progects where cat_id = $cat")->fetchColumn();
        return $count;
    }

    static function singleProject($id)
    {
        $db = Db::getConnection();
        $result = $db->query("SELECT * FROM progects  WHERE id = $id");
        $project = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $project[$i]['title'] = $row['title'];
            $project[$i]['discription'] = $row['discription'];

            $i++;
        }


        $res = $db->query("SELECT * FROM images  WHERE progects_id = $id");
        $images = array();
        $j = 0;
        while ($row1 = $res->fetch()) {
            $images[$j]['img'] = $row1['img'];
            $j++;
        }

        $array[0] = $project;
        $array[1] = $images;

        return $array;

    }


}