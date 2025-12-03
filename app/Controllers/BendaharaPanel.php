<?php

namespace App\Controllers;

use Config\PanelMenu;

class BendaharaPanel extends BaseController
{
    public function index(): string
    {
        return view('panel/bendahara/dashboard', [
            'title' => 'Panel Bendahara',
            'menu'  => PanelMenu::bendahara(),
        ]);
    }
}
