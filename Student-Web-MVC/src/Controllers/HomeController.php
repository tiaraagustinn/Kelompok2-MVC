<?php

namespace App\Controllers;

use App\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $this->render('index');
    }
    public function findResult()
    {
        $this->render('find-result');
    }
    
    public function admin()
    {
        $this->render('admin-login');
    }

    public function logout()
{
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: /"); // Redirect to your desired page after logout
    exit();
}

}