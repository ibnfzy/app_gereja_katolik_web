<header class="h-16 bg-primary text-white flex items-center px-4 shadow-md">
    <div class="flex items-center w-full justify-between gap-4">
        <button id="sidebar-toggle" class="flex items-center gap-2 text-white hover:text-accent focus:outline-none" aria-label="Toggle sidebar">
            <span class="material-icons text-3xl" aria-hidden="true">menu</span>
        </button>
        <div class="flex-1 text-center">
            <h1 class="text-lg font-semibold tracking-wide"><?= isset($title) ? esc($title) : 'Panel' ?></h1>
        </div>
        <div class="flex items-center gap-4 text-sm">
            <div class="flex items-center gap-2 bg-secondary px-3 py-1 rounded-full">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-accent"></span>
                </span>
                <span class="hidden sm:inline">Online via WhatsApp</span>
                <span class="sm:hidden">WA Online</span>
            </div>
            <button class="flex items-center gap-2 bg-accent text-white px-3 py-2 rounded-md shadow hover:bg-[#cf6a12] transition">
                <span class="material-icons" aria-hidden="true">logout</span>
                <span class="hidden sm:inline">Logout</span>
            </button>
        </div>
    </div>
</header>
