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
                        <?php if (session()->getFlashdata('message')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('message'); ?>
                            </div>
                            <div class="alert alert-danger" role="alert">
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <form class="user" action="<?= base_url('auth/login'); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user form-titani <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Alamat Email" autofocus>
                                <div class="invalid-feedback pl-3">
                                    <?= $validation->getError('email'); ?>
                                </div>
                            </div>
                            <div class="form-group password-wrapper">
                                <input type="password" class="form-control form-control-user <?= ($validation->hasError('password1')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Kata Sandi">
                                <i class="visible fas fa-eye"></i>
                                <div class="invalid-feedback pl-3">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                                <a class="small link-reset" href="forgot-password.html">Lupa kata sandi?</a>
                            </div>
                            <button type="submit" class="btn btn-pastel-green btn-user btn-block">
                                MASUK
                            </button>
                            <hr>
                            <span class="small">Anda dapat menggunakan akun dan kata sandi di bawah ini untuk masuk secara langsung.</span>
                            <div class="row mt-3">
                                <div class="col-sm-6">
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
                            <a class="small link-reset" href="/register">Belum punya akun?<span class="text-pastel-green"> mendaftar sekarang</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>