<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.04.2018
 * Time: 19:08
 */

class Contact
{
    public function index()
    {


        $about = AboutModel::getContent();
        require_once (ROOT . '/templates/contact.php');
    }

}