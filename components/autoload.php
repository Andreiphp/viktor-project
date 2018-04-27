<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 30.12.2016
 * Time: 13:18
 */

function __autoload($className)
{

    $puth = array(

        '/app/models/',
        '/components/'


    );

    foreach ($puth as $item) {

        $item = ROOT . $item . $className . '.php';
        if (is_file($item)) {
            include_once $item;
        }

    }


}