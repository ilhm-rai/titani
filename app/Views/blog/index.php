<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h2 class="section-title">Cari info tani?</h2>
    <p>Ladang informasi pertanian terlengkap.</p>
    <form class="form-inline">
        <div class="input-group relative">
            <input type="text" class="form-control custom-form-search border-0 rounded-pill bg-light shadow" placeholder="Mau cari tahu tentang hidroponik?" aria-label="Search">
            <button class="btn btn-pastel-green btn-inner-input btn-circle position-absolute" type="button">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </form>
</div>
<hr class="break-section">
<div class="container">
    <div class="row ads-info">
        <div class="col-lg-4">
            <img src="<?= base_url('assets/img/infocard1.png'); ?>" alt="" class="w-100">
        </div>
        <div class="col-lg-4">
            <img src="<?= base_url('assets/img/infocard2.png'); ?>" alt="" class="w-100">
        </div>
        <div class="col-lg-4">
            <img src="<?= base_url('assets/img/infocard3.png'); ?>" alt="" class="w-100">
        </div>
        <div class="col-lg-4">
            <img src="<?= base_url('assets/img/infocard2.png'); ?>" alt="" class="w-100">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
            <div class="card card-blog h-100">
                <div class="position-relative">
                    <img src="<?= base_url('assets/img/artikel1.png'); ?>" class="card-img-top" alt="...">
                    <div class="card-badge"><span class="badge custom-badge badge-green-pastel">Cara Tani</span></div>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Teknik Hidroponik</h6>
                    <p class="text-muted small">21 Agustus 2020</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
            <div class="card card-blog h-100">
                <div class="position-relative">
                    <img src="<?= base_url('assets/img/artikel2.png'); ?>" class="card-img-top" alt="...">
                    <div class="card-badge"><span class="badge custom-badge badge-green-pastel">Cara Tani</span></div>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Cara Pengendalian Hama</h6>
                    <p class="text-muted small">21 Agustus 2020</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
            <div class="card card-blog h-100">
                <div class="position-relative">
                    <img src="<?= base_url('assets/img/artikel3.png'); ?>" class="card-img-top" alt="...">
                    <div class="card-badge"><span class="badge custom-badge badge-green-pastel">Info Tani</span></div>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Manfaat Buah Stroberi</h6>
                    <p class="text-muted small">21 Agustus 2020</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
            <div class="card card-blog h-100">
                <div class="position-relative">
                    <img src="<?= base_url('assets/img/artikel1.png'); ?>" class="card-img-top" alt="...">
                    <div class="card-badge"><span class="badge custom-badge badge-green-pastel">Cara Tani</span></div>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Teknik Hidroponik</h6>
                    <p class="text-muted small">21 Agustus 2020</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
            <div class="card card-blog h-100">
                <div class="position-relative">
                    <img src="<?= base_url('assets/img/artikel2.png'); ?>" class="card-img-top" alt="...">
                    <div class="card-badge"><span class="badge custom-badge badge-green-pastel">Cara Tani</span></div>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Cara Pengendalian Hama</h6>
                    <p class="text-muted small">21 Agustus 2020</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-4">
            <div class="card card-blog h-100">
                <div class="position-relative">
                    <img src="<?= base_url('assets/img/artikel3.png'); ?>" class="card-img-top" alt="...">
                    <div class="card-badge"><span class="badge custom-badge badge-green-pastel">Info Tani</span></div>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Manfaat Buah Stroberi</h6>
                    <p class="text-muted small">21 Agustus 2020</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.ads-info').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true
        });
    });
</script>
<?= $this->endSection(); ?>