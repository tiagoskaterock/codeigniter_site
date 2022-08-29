<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/pages/index/index');
    }

    public function login()
    {
        return view('admin/pages/login/index');
    }

}
