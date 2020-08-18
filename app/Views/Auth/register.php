<?= $this->extend('Templates/template_dashboard'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid px-0 overflow-hidden">
    <div class="row" style="height: 100vh;">
        <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
        <div class="col-lg-7">
            <div class="row justify-content-center align-items-center px-4" style="height: 100vh;">
                <div class="col-lg-8">
                    <img src="<?= base_url('assets/img/logo_gram.png'); ?>" alt="" class="mx-auto d-block mb-3">
                    <form class="user" action="<?= base_url('auth/save'); ?> " method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user form-titani" id="name" name="name" placeholder="Nama Lengkap" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user form-titani" id="email" name="email" placeholder="Alamat Email">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Kata Sandi">
                                <i class="visible fas fa-eye"></i>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Kata Sandi">
                                <i class="visible fas fa-eye"></i>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            <a class="small link-reset" href="forgot-password.html">Lupa kata sandi?</a>
                        </div>
                        <button type="submit" class="btn btn-pastel-green btn-user btn-block">
                            DAFTAR
                        </button>
                        <hr>
                        <span class="small">Anda dapat menggunakan akun dan kata sandi di bawah ini untuk mendaftar secara langsung.</span>
                        <div class="row mt-3">
                            <div class="col-sm-6 mb-2">
                                <a href="index.html" class="btn btn-google-white btn-user btn-block">
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            <i class="fab fa-google fa-fw"></i>
                                        </div>
                                        <div class="col-8 text-left"><span>Google</span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <div class="row justify-content-between">
                                        <div class="col-4">
                                            <i class="fab fa-facebook-f fa-fw"></i>
                                        </div>
                                        <div class="col-8 text-left"><span>Facebook</span></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="text-center mt-5">
                        <a class="small link-reset" href="/login">Sudah punya akun? <span class="text-pastel-green">masuk sekarang</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>