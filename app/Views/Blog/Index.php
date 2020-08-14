<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<section class="section-frame">

    <div class="container">
        <h1 class="section-title">Yuk Cari Informasi Tani </h1>
        <form class="form-inline mb-3">
            <input class="form-control mr-sm-2" type="search" placeholder="Mau baca apa hari ini?" aria-label="Search">
            <button class="btn btn-pastel-green rounded-pill shadow" type="submit">Cari</button>
        </form>
    </div>
    <hr class="break-section">

    <div class="container">
        <section class="section-frame">
            <div class="row mb-5">
                <div class="col-md-4">
                    <a href="">
                        <div class="card">
                            <img src="<?= base_url('assets/img/prinsip1.png'); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Pertanian Modern</h5>
                                <p class="card-text">Titani terus berupaya mempromosikan teknik-teknik pertanian modern.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/prinsip2.png'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Kualitas Hasil Panen</h5>
                            <p class="card-text">Pendidikan pertanian diharapkan dapat meningkatkan kualitas hasil panen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/prinsip3.png'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Petani Milenial</h5>
                            <p class="card-text">Titani selalu mensupport para generasi milenial agar terjun di dunia pertanian.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/prinsip1.png'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Pertanian Modern</h5>
                            <p class="card-text">Titani terus berupaya mempromosikan teknik-teknik pertanian modern.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/prinsip2.png'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Kualitas Hasil Panen</h5>
                            <p class="card-text">Pendidikan pertanian diharapkan dapat meningkatkan kualitas hasil panen.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/prinsip3.png'); ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Petani Milenial</h5>
                            <p class="card-text">Titani selalu mensupport para generasi milenial agar terjun di dunia pertanian.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?= $this->endSection(); ?>