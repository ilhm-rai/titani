<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous"> -->
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets'); ?>/vendor/fontawesome-free-5.14.0-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <!-- SBAdmin CSS -->
    <link href="<?= base_url('assets'); ?>/vendor/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

    <title><?= esc($title); ?></title>
</head>

<body id="page-top">

    <?= $this->include('Templates/topbar'); ?>

    <?= $this->renderSection('content'); ?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded-circle" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <footer>
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="<?= base_url('assets/img/logo_footer.png'); ?>" alt="Titani Indonesia">
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="footer-menu">
                                    <div class="footer-menu-title">Titani</div>
                                    <a href="" class="menu">Tentang Kami</a>
                                    <a href="" class="menu">Blog Tani</a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer-menu">
                                    <div class="footer-menu-title">Layanan</div>
                                    <a href="" class="menu">Tanam Ilmu</a>
                                    <a href="" class="menu">Tanya Pakar</a>
                                    <a href="" class="menu">Event Tani</a>
                                    <a href="" class="menu">Jawara Tani</a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer-menu">
                                    <div class="footer-menu-title">Support</div>
                                    <a href="" class="menu">Bantuan</a>
                                    <a href="" class="menu">FAQ</a>
                                    <a href="" class="menu">Hubungi Kami</a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="footer-menu">
                                    <div class="footer-menu-title">Sosial Media</div>
                                    <a href="#" class="btn btn-info btn-circle mr-3"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-circle mr-3"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-danger btn-circle"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer text-right">
            <div class="container">
                <p class="mb-0">&copy; <?= date('Y'); ?> Titani Indonesia. All right reserved.</p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>/vendor/startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js"></script>
    <!-- Slick JS -->
    <script src="<?= base_url('assets/js/script.js'); ?>"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.farmer-feedback').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                variableWidth: true,
                dots: true,
                autoplay: true
            });
        });
    </script>
</body>

</html>