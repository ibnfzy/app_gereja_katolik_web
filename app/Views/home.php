<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gereja Santa Maria Bunda Allah Kondodewata</title>
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
<body class="bg-background text-primary font-sans">
    <div class="min-h-screen">
        <header class="bg-gradient-to-r from-primary via-secondary to-primary text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="h-12 w-12 rounded-full bg-white/10 flex items-center justify-center ring-2 ring-accent/70 animate-pulse"></div>
                    <div>
                        <p class="text-xs uppercase tracking-[0.3em] text-accent font-semibold">Gereja Katolik</p>
                        <h1 class="text-2xl font-bold">Santa Maria Bunda Allah Kondodewata</h1>
                    </div>
                </div>
                <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                    <a href="#warta" class="hover:text-accent transition">Warta Mingguan</a>
                    <a href="#profil" class="hover:text-accent transition">Profil Gereja</a>
                    <a href="#layanan" class="hover:text-accent transition">Layanan</a>
                    <a href="#dokumen" class="hover:text-accent transition">Dokumen Publik</a>
                    <a href="#kontak" class="hover:text-accent transition">Kontak</a>
                </nav>
                <button class="md:hidden text-white" aria-label="toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </header>

        <section class="relative overflow-hidden bg-primary text-white">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1502754384-27cd79cd4e7a?auto=format&fit=crop&w=1600&q=80')] bg-cover bg-center opacity-20"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-primary via-secondary/90 to-primary"></div>
            <div class="max-w-7xl mx-auto px-6 py-16 relative z-10 grid md:grid-cols-2 gap-10 items-center">
                <div class="space-y-5">
                    <div class="inline-flex items-center gap-2 bg-white/10 text-accent px-4 py-1 rounded-full backdrop-blur border border-white/20">
                        <span class="h-2 w-2 bg-accent rounded-full animate-ping"></span>
                        <span class="text-sm font-semibold">Pengumuman Penting</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-bold leading-tight">Persuratan Digital & Informasi Pelayanan Gereja</h2>
                    <p class="text-white/80 text-lg leading-relaxed">Semua informasi pelayanan, warta mingguan, hingga dokumen publik dapat diakses dalam satu halaman modern. Dukung keterhubungan umat dengan pelayanan yang cepat dan transparan.</p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#layanan" class="bg-accent text-white px-5 py-3 rounded-lg shadow-lg shadow-accent/30 hover:-translate-y-1 transform transition">Lihat Layanan</a>
                        <a href="#warta" class="border border-white/30 text-white px-5 py-3 rounded-lg hover:bg-white/10 transition">Warta Terbaru</a>
                    </div>
                </div>
                <div class="bg-white/10 rounded-2xl border border-white/20 p-6 backdrop-blur shadow-2xl">
                    <div class="grid grid-cols-2 gap-4 text-sm text-white/90">
                        <div class="col-span-2 bg-white/10 rounded-xl p-4 flex items-center gap-3">
                            <div class="h-10 w-10 rounded-full bg-accent/90 flex items-center justify-center text-primary font-bold">Hi</div>
                            <div>
                                <p class="text-xs uppercase tracking-widest text-white/70">Highlight</p>
                                <p class="font-semibold">Perayaan Ekaristi Minggu, 10.00 WITA</p>
                            </div>
                        </div>
                        <div class="bg-white/10 rounded-xl p-4 hover:bg-white/20 transition">
                            <p class="text-xs text-white/70">Surat Masuk/Keluar</p>
                            <p class="font-semibold">Pengajuan digital diproses 1x24 jam.</p>
                        </div>
                        <div class="bg-white/10 rounded-xl p-4 hover:bg-white/20 transition">
                            <p class="text-xs text-white/70">Sakramen</p>
                            <p class="font-semibold">Baptis, nikah, dan krisma tersedia.</p>
                        </div>
                        <div class="bg-white/10 rounded-xl p-4 hover:bg-white/20 transition">
                            <p class="text-xs text-white/70">Keuangan</p>
                            <p class="font-semibold">Ringkasan pemasukan & pengeluaran minggu ini.</p>
                        </div>
                        <div class="bg-white/10 rounded-xl p-4 hover:bg-white/20 transition">
                            <p class="text-xs text-white/70">Dokumen Publik</p>
                            <p class="font-semibold">Unduh formulir & arsip umum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="layanan" class="max-w-7xl mx-auto px-6 py-14">
            <div class="flex items-center justify-between mb-8">
                <h3 class="text-2xl font-bold text-primary">Informasi Layanan</h3>
                <span class="text-sm text-secondary">Surat, sakramen, dan keuangan mingguan</span>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-6 rounded-xl bg-white shadow-lg shadow-primary/10 border border-surface hover:-translate-y-1 transition transform">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-semibold text-lg">Surat Masuk/Keluar</h4>
                        <span class="text-xs bg-accent/20 text-accent px-3 py-1 rounded-full">Prosedur</span>
                    </div>
                    <p class="text-secondary leading-relaxed">Pelajari tata cara pengajuan persuratan, unggah berkas, dan pantau status secara real-time.</p>
                    <button class="mt-4 text-accent font-semibold hover:text-primary transition">Lihat Panduan →</button>
                </div>
                <div class="p-6 rounded-xl bg-white shadow-lg shadow-primary/10 border border-surface hover:-translate-y-1 transition transform">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-semibold text-lg">Sakramen</h4>
                        <span class="text-xs bg-accent/20 text-accent px-3 py-1 rounded-full">Jadwal</span>
                    </div>
                    <p class="text-secondary leading-relaxed">Informasi lengkap mengenai pendaftaran baptis, persiapan pernikahan, dan sakramen krisma untuk umat.</p>
                    <button class="mt-4 text-accent font-semibold hover:text-primary transition">Pelajari →</button>
                </div>
                <div class="p-6 rounded-xl bg-white shadow-lg shadow-primary/10 border border-surface hover:-translate-y-1 transition transform">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="font-semibold text-lg">Keuangan Mingguan</h4>
                        <span class="text-xs bg-accent/20 text-accent px-3 py-1 rounded-full">Ringkasan</span>
                    </div>
                    <p class="text-secondary leading-relaxed">Transparansi pemasukan dan pengeluaran minggu berjalan agar umat mengetahui penggunaan dana pastoral.</p>
                    <button class="mt-4 text-accent font-semibold hover:text-primary transition">Lihat Ringkasan →</button>
                </div>
            </div>
        </section>

        <section id="warta" class="bg-surface/60 py-14">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h3 class="text-2xl font-bold text-primary">Warta Mingguan</h3>
                        <p class="text-secondary text-sm">Daftar warta terbaru dengan preview singkat.</p>
                    </div>
                    <a class="text-accent font-semibold hover:text-primary transition" href="#">Lihat Arsip Lengkap</a>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <article class="bg-white rounded-xl p-6 shadow-lg shadow-primary/10 border border-surface hover:-translate-y-1 transition">
                        <p class="text-xs text-secondary mb-2">12 Mei 2024</p>
                        <h4 class="font-semibold text-lg mb-2">Refleksi Minggu Paskah</h4>
                        <p class="text-secondary">Hadir dalam kebangkitan dengan pelayanan kasih di tengah komunitas. Klik untuk membaca lebih lanjut.</p>
                    </article>
                    <article class="bg-white rounded-xl p-6 shadow-lg shadow-primary/10 border border-surface hover:-translate-y-1 transition">
                        <p class="text-xs text-secondary mb-2">5 Mei 2024</p>
                        <h4 class="font-semibold text-lg mb-2">Agenda Kegiatan OMK</h4>
                        <p class="text-secondary">Lokakarya dan latihan koor OMK minggu ini. Lihat detail jadwal dan tautan pendaftaran.</p>
                    </article>
                    <article class="bg-white rounded-xl p-6 shadow-lg shadow-primary/10 border border-surface hover:-translate-y-1 transition">
                        <p class="text-xs text-secondary mb-2">28 April 2024</p>
                        <h4 class="font-semibold text-lg mb-2">Pengumuman Pastoral</h4>
                        <p class="text-secondary">Perubahan jam misa dan informasi pelayanan khusus. Baca isi warta untuk persiapan umat.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="profil" class="max-w-7xl mx-auto px-6 py-14">
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-primary">Tentang Gereja</h3>
                    <p class="text-secondary leading-relaxed">Gereja Santa Maria Bunda Allah Kondodewata berakar pada pelayanan umat yang penuh kasih, membawa semangat persaudaraan dan tradisi liturgi yang khidmat. Visi kami adalah menjadi rumah rohani yang terbuka dan aktif melayani.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 bg-surface rounded-xl border border-surface/60">
                            <p class="text-xs text-secondary">Struktur Pengurus</p>
                            <p class="font-semibold text-primary">Tata usaha & bendahara</p>
                        </div>
                        <div class="p-4 bg-surface rounded-xl border border-surface/60">
                            <p class="text-xs text-secondary">Tim Pelayanan</p>
                            <p class="font-semibold text-primary">Liturgi, musik, dan kategorial</p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -inset-4 bg-accent/10 rounded-3xl blur-2xl"></div>
                    <div class="relative bg-white rounded-3xl shadow-xl border border-surface overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=1200&q=80" alt="Gereja" class="w-full h-64 object-cover">
                        <div class="p-6 space-y-3">
                            <p class="text-sm text-secondary">Sejarah & Visi Misi</p>
                            <p class="text-primary font-semibold">Menguatkan iman, mempererat persaudaraan, dan melayani masyarakat sekitar dengan cinta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="dokumen" class="bg-white py-14">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex items-center justify-between mb-8">
                    <h3 class="text-2xl font-bold text-primary">Dokumen Publik</h3>
                    <span class="text-sm text-secondary">Arsip umum & formulir pelayanan</span>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="p-6 rounded-xl bg-surface border border-surface/70 shadow-inner">
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="font-semibold text-lg">Arsip Umum</h4>
                            <span class="text-xs bg-primary text-white px-3 py-1 rounded-full">Unduh</span>
                        </div>
                        <p class="text-secondary">Dokumen publik yang dapat diakses tanpa login, termasuk panduan umum dan laporan kegiatan.</p>
                        <button class="mt-4 text-accent font-semibold hover:text-primary transition">Buka Arsip →</button>
                    </div>
                    <div class="p-6 rounded-xl bg-surface border border-surface/70 shadow-inner">
                        <div class="flex items-center justify-between mb-3">
                            <h4 class="font-semibold text-lg">Formulir Pelayanan</h4>
                            <span class="text-xs bg-accent text-white px-3 py-1 rounded-full">PDF</span>
                        </div>
                        <p class="text-secondary">Formulir pendaftaran pelayanan yang dapat diunduh umat: baptis, pernikahan, hingga pelayanan doa.</p>
                        <button class="mt-4 text-accent font-semibold hover:text-primary transition">Unduh Formulir →</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="kontak" class="max-w-7xl mx-auto px-6 py-14">
            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-6 bg-white rounded-xl shadow-lg shadow-primary/10 border border-surface">
                    <h4 class="font-semibold text-lg mb-2">Alamat</h4>
                    <p class="text-secondary">Gereja Santa Maria Bunda Allah Kondodewata</p>
                    <p class="text-secondary">Jl. Persaudaraan No. 12, Kondodewata</p>
                </div>
                <div class="p-6 bg-white rounded-xl shadow-lg shadow-primary/10 border border-surface">
                    <h4 class="font-semibold text-lg mb-2">Jam Pelayanan</h4>
                    <p class="text-secondary">Misa Minggu: 07.00 & 10.00 WITA</p>
                    <p class="text-secondary">Pelayanan Sakramen: Selasa & Kamis, 16.00 - 18.00</p>
                    <p class="text-secondary">Kantor Pastoral: Senin - Jumat, 09.00 - 15.00</p>
                </div>
                <div class="p-6 bg-white rounded-xl shadow-lg shadow-primary/10 border border-surface">
                    <h4 class="font-semibold text-lg mb-2">Media Sosial</h4>
                    <div class="flex gap-3 text-sm text-accent font-semibold">
                        <a class="hover:text-primary transition" href="#">WhatsApp</a>
                        <a class="hover:text-primary transition" href="#">Facebook</a>
                        <a class="hover:text-primary transition" href="#">Kanal Resmi</a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-primary text-white">
            <div class="max-w-7xl mx-auto px-6 py-6 grid md:grid-cols-2 gap-4 items-center">
                <p class="text-sm">© 2024 Gereja Santa Maria Bunda Allah Kondodewata. All rights reserved.</p>
                <div class="flex gap-4 text-sm justify-start md:justify-end">
                    <a href="#warta" class="hover:text-accent transition">Warta</a>
                    <a href="#layanan" class="hover:text-accent transition">Layanan</a>
                    <a href="#kontak" class="hover:text-accent transition">Kontak</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
