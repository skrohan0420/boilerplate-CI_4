<?php

namespace App\Controllers;

class Main_Controller extends BaseController
{
    public function index(): void
    {
        echo ENVIRONMENT;
    }
}
