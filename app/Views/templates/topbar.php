<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="<?= base_url('assets/img/logo_header.png'); ?>" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="/about">Tentang Titani</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Layanan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Tanam Ilmu</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Event Tani</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Tanya Pakar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Jawara Tani</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-hover" href="/blog">Blog Tani</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-pastel-green rounded-pill mr-2" href="#">Masuk</a>
                    <a class="btn btn-pastel-green rounded-pill" href="#">Daftar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>