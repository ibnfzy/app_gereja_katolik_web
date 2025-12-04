<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Login Panel') ?></title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
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
</head>
<body class="min-h-screen bg-gradient-to-br from-primary via-secondary to-primary text-primary">
    <div class="relative min-h-screen flex items-center justify-center px-4 py-10">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1502754384-27cd79cd4e7a?auto=format&fit=crop&w=1600&q=80')] bg-cover bg-center opacity-10"></div>
        <div class="absolute inset-0 bg-gradient-to-br from-primary/90 via-secondary/80 to-primary/90"></div>
        <div class="relative w-full max-w-5xl grid lg:grid-cols-[1.1fr,0.9fr] gap-8 items-center">
            <div class="bg-white/10 border border-white/20 rounded-2xl p-8 text-white shadow-2xl backdrop-blur">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-12 w-12 rounded-full bg-white/20 flex items-center justify-center ring-2 ring-accent/60">
                        <span class="font-bold text-lg">SM</span>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-[0.3em] text-accent">Gereja Katolik</p>
                        <h1 class="text-2xl font-bold">Santa Maria Bunda Allah</h1>
                        <p class="text-sm text-white/70">Panel Administratif</p>
                    </div>
                </div>
                <div class="space-y-4 text-white/80">
                    <p class="text-lg font-semibold text-white">Selamat datang kembali</p>
                    <p class="leading-relaxed">Masuk ke panel untuk mengelola warta mingguan, layanan sakramen, dan dokumen publik dengan pengalaman yang konsisten dengan halaman utama.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white/10 border border-white/20 rounded-xl p-4">
                            <p class="text-xs text-white/70">Keamanan</p>
                            <p class="font-semibold">Akses terproteksi untuk pengurus.</p>
                        </div>
                        <div class="bg-white/10 border border-white/20 rounded-xl p-4">
                            <p class="text-xs text-white/70">Kecepatan</p>
                            <p class="font-semibold">Desain modern dengan Tailwind CSS.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl shadow-2xl border border-surface p-8">
                <div class="mb-6">
                    <p class="text-xs uppercase tracking-[0.2em] text-secondary">Panel Login</p>
                    <h2 class="text-2xl font-bold text-primary">Masuk ke Akun Anda</h2>
                    <p class="text-sm text-secondary mt-1">Gunakan kredensial yang valid untuk melanjutkan.</p>
                </div>
                <?php $errors = session()->getFlashdata('errors'); ?>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-800 text-sm">
                        <?= esc(session()->getFlashdata('error')) ?>
                    </div>
                <?php endif; ?>
                <?php if ($errors): ?>
                    <div class="mb-4 rounded-lg border border-amber-200 bg-amber-50 px-4 py-3 text-amber-800 text-sm space-y-1">
                        <?php foreach ($errors as $error): ?>
                            <p><?= esc($error) ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <form class="space-y-4" action="<?= site_url('/Auth/login') ?>" method="post">
                    <?= csrf_field() ?>
                    <div>
                        <label for="role" class="block text-sm font-semibold text-primary mb-1">Peran</label>
                        <select id="role" name="role" class="w-full rounded-lg border border-surface bg-background px-4 py-3 text-primary focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent">
                            <option value="tata-usaha" <?= old('role') === 'tata-usaha' ? 'selected' : '' ?>>Tata Usaha</option>
                            <option value="bendahara" <?= old('role') === 'bendahara' ? 'selected' : '' ?>>Bendahara</option>
                        </select>
                    </div>
                    <div>
                        <label for="username" class="block text-sm font-semibold text-primary mb-1">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan username" value="<?= old('username') ?>" class="w-full rounded-lg border border-surface bg-background px-4 py-3 text-primary placeholder-secondary/70 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent" required>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-semibold text-primary mb-1">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" class="w-full rounded-lg border border-surface bg-background px-4 py-3 text-primary placeholder-secondary/70 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent" required>
                    </div>
                    <div class="flex items-center justify-between text-sm text-secondary">
                        <label class="inline-flex items-center gap-2">
                            <input type="checkbox" class="rounded border-surface text-accent focus:ring-accent">
                            <span>Ingat saya</span>
                        </label>
                        <a href="#" class="text-accent font-semibold hover:text-primary">Lupa password?</a>
                    </div>
                    <button type="submit" class="w-full bg-accent text-white font-semibold px-4 py-3 rounded-lg shadow-lg shadow-accent/30 hover:-translate-y-0.5 transition transform">
                        Masuk Sekarang
                    </button>
                </form>
                <p class="text-center text-sm text-secondary mt-6">Akses login dikelola oleh administrator paroki.</p>
            </div>
        </div>
    </div>
</body>
</html>
