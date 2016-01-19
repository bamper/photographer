<?php

class MainController extends Controller
{

    public function main()
    {

    }

    public function index()
    {
        $view = new View();
        $view->assign('test', 'view');
        $view->display('view/main/index.php');
    }

    public function about()
    {

    }

    public function portfolio()
    {

    }
}