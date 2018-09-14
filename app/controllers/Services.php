<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.04.2018
 * Time: 21:36
 */

class Services
{
    public function index()
    {
        $meta_key = 'Ремонт коттеджей, ремонт квартир, отделка коттеджей, квартиры, Минск';
        $meta_desc = 'Ваш Уютный Дом - предоставляем полный спектр услуг по ремонту, монтаж, демонтаж, покраска, клейка обоев, и все остальное';
        $about = AboutModel::getContent();
        $lastProjects = ServicesModel::getLastProjects();
        $servicesBox = ServicesModel::redactServices();
        require_once(ROOT . '\templates\services.php');
    }

}