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
        $about = AboutModel::getContent();
        $lastProjects = ServicesModel::getLastProjects();
        $servicesBox = ServicesModel::redactServices();
        require_once(ROOT . '\templates\services.php');
    }

}