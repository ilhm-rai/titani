<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white mb-5">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/'); ?>" title="Home">
            <img src="<?= base_url('assets/img/logo_header.png'); ?>" alt="" loading="lazy">
        </a>

        <button class="btn btn-light d-md-none rounded-circle mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="<?= base_url('about'); ?>">Tentang Titani</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-hover" href="<?= base_url('/'); ?>#service" role="button">
                        Layanan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="<?= base_url('blog'); ?>">Blog Tani</a>
                </li>
<<<<<<< HEAD
                <li class="nav-item mr-0">
                    <a class="btn btn-outline-pastel-green rounded-pill mr-2" href="#">Masuk</a>
                    <a class="btn btn-pastel-green rounded-pill" href="#">Daftar</a>
=======
                <li class="nav-item">
                    <a class="btn btn-outline-pastel-green rounded-pill mr-2" href="/login">Masuk</a>
                    <a class="btn btn-pastel-green rounded-pill" href="/register">Daftar</a>
>>>>>>> 478eaf54c662bdc1da14da1cb4c9f1eb81088bf6
                </li>
            </ul>
        </div>
    </div>
</nav>