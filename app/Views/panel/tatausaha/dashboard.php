<?= $this->extend('layouts/panel_base') ?>

<?= $this->section('content') ?>
<div class="space-y-6">
    <div class="bg-surface rounded-xl shadow px-6 py-5">
        <h2 class="text-xl font-semibold text-primary">Selamat datang, Tata Usaha!</h2>
        <p class="text-primary/80 mt-2">Pantau administrasi jemaat dengan ringkas melalui panel ini.</p>
    </div>
    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
        <div class="bg-surface rounded-lg shadow px-5 py-4">
            <p class="text-sm text-primary/70">Pengingat</p>
            <p class="text-2xl font-bold text-primary mt-2">3 Agenda</p>
            <p class="text-primary/70 mt-1">Jadwal misa, rapat rutin, dan laporan mingguan.</p>
        </div>
        <div class="bg-surface rounded-lg shadow px-5 py-4">
            <p class="text-sm text-primary/70">Dokumen</p>
            <p class="text-2xl font-bold text-primary mt-2">12 Arsip</p>
            <p class="text-primary/70 mt-1">Arsip baptis, komuni, dan data umat terkini.</p>
        </div>
        <div class="bg-surface rounded-lg shadow px-5 py-4">
            <p class="text-sm text-primary/70">Notifikasi</p>
            <p class="text-2xl font-bold text-primary mt-2">5 Pesan</p>
            <p class="text-primary/70 mt-1">Permintaan surat dan konfirmasi jadwal petugas.</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
