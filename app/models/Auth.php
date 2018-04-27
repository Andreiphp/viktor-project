<?php

class Auth
{
    public function getAdmin($login,$password)
    {
        $db = DB::getConnection();

        $sql = "SELECT * FROM user WHERE login = :login AND password = :password ";
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $admin = $result->fetch();
        if ($admin) {
            return $admin;
        } else {
            return false;
        }
    }
}