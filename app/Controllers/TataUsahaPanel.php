<?php

namespace App\Controllers;

class TataUsahaPanel extends BaseController
{
    public function index(): string
    {
        $menu = [
            ['label' => 'Dashboard', 'href' => '#', 'icon' => $this->icon('home')],
            ['label' => 'Data Jemaat', 'href' => '#', 'icon' => $this->icon('users')],
            ['label' => 'Agenda', 'href' => '#', 'icon' => $this->icon('calendar')],
            ['label' => 'Arsip', 'href' => '#', 'icon' => $this->icon('document')],
        ];

        return view('panel/tatausaha/dashboard', [
            'title' => 'Panel Tata Usaha',
            'menu'  => $menu,
        ]);
    }

    private function icon(string $type): string
    {
        $icons = [
            'home' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v9.75A1.5 1.5 0 006 21h3.75v-6.75a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21H18a1.5 1.5 0 001.5-1.5V9.75" /></svg>',
            'users' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6.75a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0" /></svg>',
            'calendar' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M4.5 9.75h15M5.25 5.25h13.5A1.5 1.5 0 0120.25 6.75v11.5a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V6.75A1.5 1.5 0 015.25 5.25z" /></svg>',
            'document' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75H9A2.25 2.25 0 006.75 9v9A2.25 2.25 0 009 20.25h6A2.25 2.25 0 0017.25 18V9A2.25 2.25 0 0015 6.75h-3zm0 0V3.75m0 3v3" /></svg>',
        ];

        return $icons[$type] ?? '';
    }
}
