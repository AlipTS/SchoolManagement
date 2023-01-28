<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid page-body-wrapper full-page-wrapper">
  <div class="content-wrapper d-flex align-items-center auth px-0">
    <div class="row w-100 mx-0">
      <div class="col-lg-4 mx-auto">
        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
          <div class="brand-logo">
            <img src="<?= base_url(); ?>/images/logo.svg" alt="logo">
          </div>
          <h4><?= lang('Auth.loginTitle') ?></h4>
          <h6 class="font-weight-light">Sign in to containue.</h6>

          <?= view('Myth\Auth\Views\_message_block') ?>

          <form action="<?= url_to('login') ?>" method="post">
            <?= csrf_field() ?>

            <?php if ($config->validFields === ['email']) : ?>
              <div class="form-group">
                <input type="email" class="form-control form-control-lg <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                <div class="invalid-feedback">
                  <?= session('errors.login') ?>
                </div>
              </div>
            <?php else : ?>
              <div class="form-group">
                <input type="text" class="form-control form-control-lg <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                <div class="invalid-feedback">
                  <?= session('errors.login') ?>
                </div>
              </div>
            <?php endif; ?>

            <div class="form-group">
              <input type="password" name="password" class="form-control form-control-lg <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
              <div class="invalid-feedback">
                <?= session('errors.password') ?>
              </div>
            </div>

            <?php if ($config->allowRemembering) : ?>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                  <?= lang('Auth.rememberMe') ?>
                </label>
              </div>
            <?php endif; ?>

            <div class="mt-3">
              <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.loginAction') ?></button>
            </div>

          </form>
          <hr>
          <?php if ($config->allowRegistration) : ?>
            <p><a href="<?= url_to('register') ?>"><?= lang('Auth.needAnAccount') ?></a></p>
          <?php endif; ?>
          <?php if ($config->activeResetter) : ?>
            <p><a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->
<?= $this->endSection(); ?>