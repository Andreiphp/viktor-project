<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.04.2018
 * Time: 14:20
 */

class Error
{

    public function __construct()
    {
        $this->error();
    }


    public function error()
    {
        $meta_key = 'ремонт, ремотн в минске, ремонт в квартире, фасады, санузлы';
        $meta_desc = 'Ваш Уютный Дом - страница не существует';

        require_once(ROOT . '/templates/Error.php');
    }
}