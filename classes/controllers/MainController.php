<?php

class MainController extends Controller
{

    public function main()
    {
        $al = new Album();
    }

    public function index()
    {
        $view = new View();
        $view->display('view/brand.php');
    }

    public function about()
    {

    }

    public function portfolio()
    {
        $view = new View();
        $view->assign('test', 'view');
        $view->display('view/portfolio/index.php');
    }

    public function contact()
    {

    }
}