<?= $this->extend('Templates/template_dashboard'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-5">
            <img src="<?= base_url('assets/img/login.png'); ?>" alt="" class="w-100">
        </div>
        <div class="col-lg-7">
            <div class="p-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <img src="<?= base_url('assets/img/logo_gram.png'); ?>" alt="" class="mx-auto d-block">
                        <form class="user">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                            </div>
                            <button type="submit" class="btn btn-pastel-green btn-user btn-block">
                                MASUK
                            </button>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Google
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Facebook
                                    </a>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="register.html">Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>