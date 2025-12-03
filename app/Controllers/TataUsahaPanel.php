<?php

namespace App\Controllers;

class TataUsahaPanel extends BaseController
{
    public array $menu;

    public function __construct()
    {
        $this->menu = [
            ['label' => 'Dashboard', 'href' => '#', 'icon' => 'home'],
            ['label' => 'Data Jemaat', 'href' => '#', 'icon' => 'groups'],
            ['label' => 'Agenda', 'href' => '#', 'icon' => 'event'],
            ['label' => 'Arsip', 'href' => '#', 'icon' => 'inventory_2'],
        ];
    }

    public function index(): string
    {
        return view('panel/tatausaha/dashboard', [
            'title' => 'Panel Tata Usaha',
            'menu'  => $this->menu,
        ]);
    }
}
