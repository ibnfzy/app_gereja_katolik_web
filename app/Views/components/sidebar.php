<?php
    $menu = $menu ?? [];
?>
<aside id="sidebar-panel" class="bg-secondary text-white w-64 min-h-full transform md:transform-none -translate-x-full md:translate-x-0 transition-transform duration-300 fixed md:static z-40">
    <nav class="h-full flex flex-col">
        <div class="px-6 py-4 border-b border-primary/50">
            <p class="text-lg font-semibold">Menu</p>
        </div>
        <ul class="flex-1 overflow-y-auto py-4 space-y-1">
            <?php foreach ($menu as $item): ?>
                <li>
                    <a href="<?= esc($item['href']) ?>" class="flex items-center gap-3 px-6 py-3 hover:bg-primary/60 transition" data-close="sidebar">
                        <?php if (isset($item['icon'])): ?>
                            <span class="w-5 h-5" aria-hidden="true"><?= $item['icon'] ?></span>
                        <?php endif; ?>
                        <span class="text-sm font-medium"><?= esc($item['label']) ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
            <?php if (empty($menu)): ?>
                <li class="px-6 text-sm text-surface">Belum ada menu.</li>
            <?php endif; ?>
        </ul>
    </nav>
</aside>
