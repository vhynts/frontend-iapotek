<?php

namespace App\Controllers;

class PosController extends BaseController
{
    public function index(): string
    {
        return view('pos');
    }
}
