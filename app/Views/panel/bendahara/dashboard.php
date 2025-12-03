<?= $this->extend('layouts/panel_base') ?>

<?= $this->section('content') ?>
<div class="space-y-6">
    <div class="bg-surface rounded-xl shadow px-6 py-5">
        <h2 class="text-xl font-semibold text-primary">Halo, Bendahara!</h2>
        <p class="text-primary/80 mt-2">Kelola keuangan paroki dengan ringkas melalui ringkasan cepat ini.</p>
    </div>
    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
        <div class="bg-surface rounded-lg shadow px-5 py-4">
            <p class="text-sm text-primary/70">Saldo Kas</p>
            <p class="text-2xl font-bold text-primary mt-2">Rp 120.000.000</p>
            <p class="text-primary/70 mt-1">Akumulasi dana operasional bulan berjalan.</p>
        </div>
        <div class="bg-surface rounded-lg shadow px-5 py-4">
            <p class="text-sm text-primary/70">Pemasukan</p>
            <p class="text-2xl font-bold text-primary mt-2">Rp 35.000.000</p>
            <p class="text-primary/70 mt-1">Persembahan, donasi, dan kontribusi komunitas.</p>
        </div>
        <div class="bg-surface rounded-lg shadow px-5 py-4">
            <p class="text-sm text-primary/70">Pengeluaran</p>
            <p class="text-2xl font-bold text-primary mt-2">Rp 18.500.000</p>
            <p class="text-primary/70 mt-1">Perawatan gereja, program sosial, dan operasional.</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
