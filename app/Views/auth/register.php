<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <div class="brand-logo">
                        <img src="../../images/logo.svg" alt="logo">
                    </div>
                    <h4><?= lang('Auth.register') ?></h4>
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form action="<?= url_to('register') ?>" method="post" class="pt-3">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <select class="form-control form-control-lg" id="userGroup">
                                <option hidden>Pilih Role</option>
                                <option value="guru">Guru</option>
                                <option value="admin">Admin</option>
                                <option value="siswa">Siswa</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg <?php if (session('errors.fullname')) : ?>is-invalid<?php endif ?>" name="fullname" placeholder="<?= lang('fullname') ?>" value="<?= old('fullname') ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" class="form-control form-control-lg <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                            <input type="password" name="pass_confirm" class="form-control form-control-lg <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                        </div>

                        <div class="mt-3">
                            <button type="submit" onclick="cekUserGrup()" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                        </div>
                        <div class="text-center mt-4 font-weight-light">
                            Already have an account? <a href="login.html" class="text-primary">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>



<?= $this->endSection(); ?>