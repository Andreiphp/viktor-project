<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.04.2018
 * Time: 23:57
 */

class Projects
{
    static function what_weDO()
    {
        $db = DB::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM what_we_do WHERE id = 1");
        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['text'] = $row['text'];
            $projects[$i]['img'] = $row['img'];
            $i++;
        }
        return $projects;
    }

    static function getProjects()
    {
        $db = DB::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM progects ORDER BY id ASC LIMIT 20");
        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['title'] = $row['title'];
            $projects[$i]['img'] = $row['img'];
            $i++;
        }
        return $projects;
    }

    static function getProjectsCatJS($id)
    {
        $db = DB::getConnection();
        $projects = array();
        $result = $db->query("SELECT * FROM progects WHERE cat_id = $id ORDER BY id ASC LIMIT 20");
        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['id'] = $row['id'];
            $projects[$i]['title'] = $row['title'];
            $projects[$i]['img'] = $row['img'];
            $i++;
        }
        return $projects;
    }

    static function getImagesForProjects($id)
    {
        $db = Db::getConnection();
        $image = array();
        $reult = $db->query("SELECT  * FROM images WHERE progects_id = $id");
        $i = 0;
        while ($row = $reult->fetch()) {

            $image[$i]['id'] = $row['id'];
            $image[$i]['img'] = $row['img'];
            $image[$i]['progects_id'] = $row['progects_id'];
            $i++;
        }
        return $image;
    }

    static function insertImageForProjects($img, $projects_id)
    {
        $db = Db::getConnection();
        $sql = "INSERT INTO images (img,progects_id) VALUES
 (:img,:progects_id)";
        $result = $db->prepare($sql);
        $result->bindParam(':img', $img, PDO::PARAM_STR);
        $result->bindParam(':progects_id', $projects_id, PDO::PARAM_STR);

        return $result->execute();
    }

    static function updateDiscriptionProgects($discription, $id)
    {
        $db = Db::getConnection();
        $sql = "UPDATE progects SET discription = :discription WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':discription', $discription, PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
    }

    static function editMainElement($text, $img)
    {
        $db = Db::getConnection();
        if ($img) {
            $sql = "UPDATE what_we_do SET text = :text,img=:img   WHERE id = 1";
        } else {
            $sql = "UPDATE what_we_do SET text = :text  WHERE id = 1";
        }

        $result = $db->prepare($sql);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        if ($img) {
            $result->bindParam(':img', $img, PDO::PARAM_STR);
        }

        $result->execute();
    }


    static function getDiscription($id)
    {
        $db = DB::getConnection();
        $projects = array();
        $result = $db->query("SELECT discription FROM progects where id = $id");
        $i = 0;
        while ($row = $result->fetch()) {
            $projects[$i]['discription'] = $row['discription'];
            $i++;
        }
        return $projects;
    }

    static function deliteImages($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM images WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
    }

    static function deleteProject($id)
    {
        $db = Db::getConnection();
        $sql = "DELETE FROM progects WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
    }

    static function getCategories()
    {
        $db = DB::getConnection();
        $cat = array();
        $result = $db->query("SELECT * FROM categories ");
        $i = 0;
        while ($row = $result->fetch()) {
            $cat[$i]['name'] = $row['name'];
            $cat[$i]['id'] = $row['id'];
            $i++;
        }
        return $cat;
    }

    static function createNewProject($img, $discription, $title, $cat_id)
    {
        $db = Db::getConnection();
        $sql = "INSERT INTO progects (img,discription,title,cat_id) VALUES
 (:img,:discription,:title,:cat_id)";
        $result = $db->prepare($sql);
        $result->bindParam(':img', $img, PDO::PARAM_STR);
        $result->bindParam(':discription', $discription, PDO::PARAM_STR);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);

        return $result->execute();
    }

    static function updateMainImage($img, $id)
    {
        $db = Db::getConnection();
        $sql = "UPDATE progects SET img = :img WHERE id = :id";
        $result = $db->prepare($sql);
        $result->bindParam(':img', $img, PDO::PARAM_STR);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
    }


}