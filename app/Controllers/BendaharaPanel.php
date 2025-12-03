<?php

namespace App\Controllers;

class BendaharaPanel extends BaseController
{
    public array $menu;

    public function __construct()
    {
        $this->menu = [
            ['label' => 'Ringkasan Keuangan', 'href' => '#', 'icon' => 'analytics'],
            ['label' => 'Pemasukan', 'href' => '#', 'icon' => 'arrow_downward'],
            ['label' => 'Pengeluaran', 'href' => '#', 'icon' => 'arrow_upward'],
            ['label' => 'Laporan', 'href' => '#', 'icon' => 'description'],
        ];
    }

    public function index(): string
    {
        return view('panel/bendahara/dashboard', [
            'title' => 'Panel Bendahara',
            'menu'  => $this->menu,
        ]);
    }
}
