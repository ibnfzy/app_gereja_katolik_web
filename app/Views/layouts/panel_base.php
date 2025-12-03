<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? esc($title) : 'Panel' ?></title>
    <script>
        window.tailwind = window.tailwind || {};
        window.tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2C3E50',
                        secondary: '#34495E',
                        accent: '#E67E22',
                        background: '#ECF0F1',
                        surface: '#D5D8DC'
                    }
                }
            }
        };
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-background text-primary min-h-screen">
    <?= $this->include('components/navbar') ?>
    <div class="flex min-h-[calc(100vh-4rem)] bg-background">
        <?= $this->include('components/sidebar') ?>
        <main class="flex-1 p-6 transition-all duration-300" id="panel-content">
            <?= $this->renderSection('content') ?>
        </main>
    </div>
    <script>
        const toggleButton = document.getElementById('sidebar-toggle');
        const sidebar = document.getElementById('sidebar-panel');
        const content = document.getElementById('panel-content');

        if (toggleButton && sidebar) {
            toggleButton.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
            });
        }

        const closeLinks = document.querySelectorAll('[data-close="sidebar"]');
        closeLinks.forEach((link) => {
            link.addEventListener('click', () => sidebar.classList.add('-translate-x-full'));
        });
    </script>
</body>
</html>
