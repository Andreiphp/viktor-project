<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09.04.2018
 * Time: 19:14
 */

class Main
{
    public function __construct($find)
    {
        $this->param = $find;
    }

    public function index()
    {
        $meta_key = 'Ремонт квартир в Минске, ремонт дома, строительные работы, ремонт квартир, ремонт под ключ';
        $meta_desc = 'Ремонт квартир в Минске под ключ. Заказать ремонт квартиры, коттеджа или санузла.';
        $comments = CommentModels::getComments(0);
        $what_we_do = Projects::what_weDO();
        require_once(ROOT . '\templates\index.php');
    }

    public function SlideRequest()
    {
        $cat_id = $_GET['param'];
        if ($cat_id) {
            $projects = Projects::getProjectsCatJS($cat_id);
            echo json_encode($projects);
        } else {
            $projects = Projects::getProjects();
            echo json_encode($projects);
        }

    }


}