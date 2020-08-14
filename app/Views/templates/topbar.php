<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white mb-5">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/'); ?>">
            <img src="<?= base_url('assets/img/logo_header.png'); ?>" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="<?= base_url('about'); ?>">Tentang Titani</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-hover" href="#" role="button">
                        Layanan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="<?= base_url('blog'); ?>">Blog Tani</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-pastel-green rounded-pill mr-2" href="/login">Masuk</a>
                    <a class="btn btn-pastel-green rounded-pill" href="#">Daftar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>