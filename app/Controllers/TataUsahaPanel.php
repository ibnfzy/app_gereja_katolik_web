<?php

namespace App\Controllers;

use Config\PanelMenu;

class TataUsahaPanel extends BaseController
{
    public function index(): string
    {
        return view('panel/tatausaha/dashboard', [
            'title' => 'Panel Tata Usaha',
            'menu'  => PanelMenu::tataUsaha(),
        ]);
    }
}
