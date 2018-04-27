<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.04.2018
 * Time: 14:08
 */

class Pagination

{

    public function __construct($find)
    {

        $this->page = $find[1]; // текущая страница
        if (empty($this->page)) {
            $this->page = 1;
        }
        $this->total = PaginationModel::pagNav();
        if ($this->page > $this->total) {
            $this->page = $this->total;
        }
        $kol = 20;  //количество записей для вывода
        $this->art = ($this->page * $kol) - $kol; // определяем, с какой записи нам выводить


    }

    public function indexComment()
    {
        $page = $this->page;

        $comments = PaginationModel::getComments($this->art);
        $pagNav = PaginationModel::pagNav();
        require_once(ROOT . '\templates\admin\comments.php');
    }


}