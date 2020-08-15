<?= $this->extend('Templates/template_dashboard'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5">
            <img src="<?= base_url('assets/img/login.png'); ?>" alt="" class="w-100">
        </div>
        <div class="col-lg-7">
            <div class="p-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <img src="<?= base_url('assets/img/logo_gram.png'); ?>" alt="" class="mx-auto d-block mb-3">
                        <form class="user">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user form-titani" id="name" name="name" placeholder="Nama Lengkap">
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
                                <a class="small link-reset" href="forgot-password.html">Lupa Kata Sandi?</a>
                            </div>
                            <button type="submit" class="btn btn-pastel-green btn-user btn-block">
                                DAFTAR
                            </button>
                            <hr>
                            <span class="small">Anda dapat menggunakan akun dan kata sandi di bawah ini untuk daftar secara langsung.</span>
                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <a href="index.html" class="btn btn-google-white btn-user btn-block">
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <img src="<?= base_url('assets/img/icon_google.svg'); ?>" alt="Icon Google" class="ico">
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
                            <a class="small link-reset" href="/login">Sudah Punya Akun?<span class="text-pastel-green"> Masuk Sekarang</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>