<header class="h-16 bg-primary text-white flex items-center px-4 shadow-md">
    <div class="flex items-center w-full justify-between gap-4">
        <button id="sidebar-toggle" class="flex items-center gap-2 text-white hover:text-accent focus:outline-none" aria-label="Toggle sidebar">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                </svg>
                <span class="hidden sm:inline">Logout</span>
            </button>
        </div>
    </div>
</header>
