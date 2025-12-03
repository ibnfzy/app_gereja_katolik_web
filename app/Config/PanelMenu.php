<?php

namespace Config;

class PanelMenu
{
    public static function tataUsaha(): array
    {
        return [
            ['label' => 'Dashboard', 'href' => '#', 'icon' => 'home'],
            ['label' => 'Data Jemaat', 'href' => '#', 'icon' => 'groups'],
            ['label' => 'Agenda', 'href' => '#', 'icon' => 'event'],
            ['label' => 'Arsip', 'href' => '#', 'icon' => 'inventory_2'],
        ];
    }

    public static function bendahara(): array
    {
        return [
            ['label' => 'Ringkasan Keuangan', 'href' => '#', 'icon' => 'analytics'],
            ['label' => 'Pemasukan', 'href' => '#', 'icon' => 'arrow_downward'],
            ['label' => 'Pengeluaran', 'href' => '#', 'icon' => 'arrow_upward'],
            ['label' => 'Laporan', 'href' => '#', 'icon' => 'description'],
        ];
    }
}
