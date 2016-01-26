<?php

class AdminController
{
    public function control()
    {
        $view = new View();
        $view->display('view/control/control.php');
    }

    public function login()
    {
        session_start();
        if(!empty($_POST['login']) && !empty($_POST['password'])) {
            if (User::login(trim($_POST['login']), trim($_POST['password'])) == true) {
                $_SESSION['auth'] = 1;
                header('Location: /index.php/admin/');
                exit;
            } else {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }
        else
        {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function admin()
    {
        $identity = Auth::getIdentity();
        if(!$identity['auth'])
        {
            Auth::goAway();
        }

    }
}