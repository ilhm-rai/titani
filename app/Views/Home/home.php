<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <section class="section-frame">
        <div class="row mt-5">
            <div class="col-lg-6">
                <h1 class="section-title mb-65px">Ladang Informasi Tani Masa Kini</h1>
                <div class="section-desc text-wrap">
                    <p>Dapatkan Berbagai Informasi Pertanian Eksklusif Secara <span class="text-pastel-green">Gratis</span>.</p>
                </div>
                <a href="#" class="btn btn-pastel-green rounded-pill shadow">Baca Selengkapnya</a>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url('assets/img/hero1.png'); ?>" alt="Ladang Informasi Tani Masa Kini" class="w-100">
            </div>
        </div>
    </section>
    <section class="section-frame">
        <div class="text-center">
            <h2 class="section-title mb-65px">Kenapa harus Titani?</h2>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-2 text-center">
                <p class="whyus-count">5jt+</p>
                <p class="whyus-desc">Petani telah bergabung dengan Titani.</p>
            </div>
            <div class="col-lg-2 text-center">
                <p class="whyus-count">1jt+</p>
                <p class="whyus-desc">Pengguna aktif bertani setiap harinya.</p>
            </div>
            <div class="col-lg-2 text-center">
                <p class="whyus-count">20+</p>
                <p class="whyus-desc">Pilihan kelas yang dapat kamu pilih.</p>
            </div>
            <div class="col-lg-2 text-center">
                <p class="whyus-count">50+</p>
                <p class="whyus-desc">Pakar pertanian yang telah terdaftar.</p>
            </div>
        </div>
    </section>
    <section class="section-frame">
        <div class="row mt-5">
            <div class="col-lg-6">
                <img src="<?= base_url('assets/img/hero2.png'); ?>" alt="Ladang Informasi Tani Masa Kini" class="w-100">
            </div>
            <div class="col-lg-6">
                <h2 class="section-title">Materi berkualitas dan
                    Tersertifikasi</h2>
                <div class="section-desc text-wrap">
                    <p>Materi di titani disusun oleh para ahli di bidang pertanian dan telah tersertifikasi.</p>
                </div>
                <a href="#" class="btn btn-pastel-green rounded-pill shadow">Baca Selengkapnya</a>
            </div>
        </div>
    </section>
    <section class="section-frame">
        <div class="row mt-5">
            <div class="col-lg-6">
                <h2 class="section-title">Menumbuhkan Petani
                    Milenial</h2>
                <div class="section-desc text-wrap">
                    <p>Titani mendorong minat generasi milineal untuk ikut terjun ke dalam dunia pertanian.</p>
                </div>
                <a href="#" class="btn btn-pastel-green rounded-pill shadow">Baca Selengkapnya</a>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url('assets/img/hero3.png'); ?>" alt="Ladang Informasi Tani Masa Kini" class="w-100">
            </div>
        </div>
    </section>
    <section class="section-frame">
        <div class="text-center">
            <h2 class="section-title mb-4">Layanan Titani</h2>
            <p class="mb-4">Berikut ini layanan titani yang dapat membantumu menjadi seorang petani profesional </p>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-service">
                    <div class="card-header text-center">
                        <img src="<?= base_url('assets/img/layanan1.png'); ?>" alt="...">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Tanam Ilmu</h5>
                        <p class="card-text">Belajar berbagai materi seputar pertanian dengan materi yang disusun oleh para ahli.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">Lihat Tanam Ilmu</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-service">
                    <div class="card-header text-center">
                        <img src="<?= base_url('assets/img/layanan2.png'); ?>" alt="...">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Event Tani</h5>
                        <p class="card-text">Hadiri events menarik seputar pertanian di kotamu.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">Lihat Event Tani</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-service">
                    <div class="card-header text-center">
                        <img src="<?= base_url('assets/img/layanan3.png'); ?>" alt="...">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Tanya Pakar</h5>
                        <p class="card-text">Dapatkan jawaban atas pertanyaanmu dari para pakar pertanian.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">Lihat Tanya Pakar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-service">
                    <div class="card-header">
                        <img src="<?= base_url('assets/img/layanan4.png'); ?>" alt="...">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Jawara Tani</h5>
                        <p class="card-text">Buktikan hasil panen terbaikmu dengan memenangkan kompetisi hasil panen.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">Lihat Jawara Tani</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>