<?php

namespace App\Controllers;

class BendaharaPanel extends BaseController
{
    public function index(): string
    {
        $menu = [
            ['label' => 'Ringkasan Keuangan', 'href' => '#', 'icon' => $this->icon('chart')],
            ['label' => 'Pemasukan', 'href' => '#', 'icon' => $this->icon('plus')],
            ['label' => 'Pengeluaran', 'href' => '#', 'icon' => $this->icon('minus')],
            ['label' => 'Laporan', 'href' => '#', 'icon' => $this->icon('document')],
        ];

        return view('panel/bendahara/dashboard', [
            'title' => 'Panel Bendahara',
            'menu'  => $menu,
        ]);
    }

    private function icon(string $type): string
    {
        $icons = [
            'chart' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 3v18h18" /><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15V9.75m4.5 5.25V6.75M17.25 15v-3.75" /></svg>',
            'plus' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>',
            'minus' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" /></svg>',
            'document' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75H9A2.25 2.25 0 006.75 9v9A2.25 2.25 0 009 20.25h6A2.25 2.25 0 0017.25 18V9A2.25 2.25 0 0015 6.75h-3zm0 0V3.75m0 3v3" /></svg>',
        ];

        return $icons[$type] ?? '';
    }
}
