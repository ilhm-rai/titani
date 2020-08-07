<?= $this->extend('templates/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <section class="section-frame">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="section-title">Tumbuh Bersama Titani</h1>
                <p></p>
                <p>Indonesia dikenal sebagai negara agraris karena sebagian penduduknya bermata pencaharian sebagai petani, hal ini didukung dengan sumber daya alam yang melimpah dan iklim yang sangat cocok untuk pertanian.</p>
                <p>Melihat potensi pertanian di Indonesia Titani hadir untuk ikut mambantu para petani Indonesia untuk memaksimalkan hasil pertanian mereka melalui sebuah sistem informasi penyuluhan dan pendidikan pertanian.</p>
                <p>Kami berharap dengan adanya Titani kita dapat tumbuh bersama untuk memajukan pertanian di Indonesia.</p>
            </div>
            <div class="col-lg-5">
                <img src="<?= base_url('assets/img/about_img.png'); ?>" alt="Tumbuh Bersama Titani" class="w-100 radius-10">
            </div>
        </div>
    </section>
    <section class="section-frame">
        <h2 class="section-title text-center mb-5">Prinsip Titani</h2>
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