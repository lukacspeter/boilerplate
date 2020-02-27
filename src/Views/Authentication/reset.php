<?= $this->extend('agungsugiarto\boilerplate\Views\Authentication\index') ?>
<?= $this->section('content') ?>
<!-- /.login-logo -->
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg"><?=lang('Auth.resetYourPassword')?></p>
    <p><?=lang('Auth.enterCodeEmailPassword')?></p>
    <?= $this->include('agungsugiarto\boilerplate\Views\Authentication\message_block') ?>
    <form action="<?= route_to('reset-password') ?>" method="post">
      <?= csrf_field() ?>

      <div class="input-group mb-3">
        <input type="text" class="form-control <?php if(session('errors.token')) : ?>is-invalid<?php endif ?>" 
          placeholder="<?=lang('Auth.token')?>"
          name="token"
          value="<?= old('token', $token ?? '') ?>">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-key"></span>
          </div>
        </div>
        <div class="invalid-feedback">
          <?= session('errors.token') ?>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="email" class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" 
          placeholder="<?=lang('Auth.email')?>"
          name="email"
          value="<?= old('email') ?>">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
        <div class="invalid-feedback">
          <?= session('errors.email') ?>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" 
          placeholder="<?=lang('Auth.password')?>"
          name="password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
        <div class="invalid-feedback">
          <?= session('errors.password') ?>
        </div>
      </div>

      <div class="input-group mb-3">
        <input type="password" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" 
          placeholder="<?=lang('Auth.repeatPassword')?>"
          name="pass_confirm">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
        <div class="invalid-feedback">
          <?= session('errors.pass_confirm') ?>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Change password</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <p class="mt-3 mb-1">
      <a href="login.html">Login</a>
    </p>
  </div>
  <!-- /.login-card-body -->
</div>
<?= $this->endSection() ?>