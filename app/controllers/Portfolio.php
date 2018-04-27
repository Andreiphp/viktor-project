<?php

class Portfolio
{

    public function __construct($query)
    {
        $this->id = $query[1];
    }

    public function index()
    {
        $about = AboutModel::getContent();
        require_once(ROOT . '\templates\portfolio.php');
    }

    public function getProjects()
    {
        $start = $_POST['start'];
        $categories = $_POST['cat'];
        $progects = ProtfolioModel::getProjectsAjax($start, $categories);
        echo json_encode($progects);
    }

    public function checkProjects()
    {
        $cat = $_POST['cat'];
        $count = ProtfolioModel::checkProjects($cat);
        echo $count;
    }

    public function singleProjects()
    {
        $about = AboutModel::getContent();
        $single_project = ProtfolioModel::singleProject($this->id);

        require_once(ROOT . '\templates\single_project.php');
    }


}