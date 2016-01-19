<?php

class MainController extends Controller
{

    public function main()
    {
        $view = new View();
        $view->assign('test', 'view');
        $view->display('view/main/index.php');
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

    }

    public function contact()
    {

    }
}