<?php $__env->startSection('title'); ?>
  E-library
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="row">
<div class="col-md-6">
  <h3>Εγγραφή</h3>
  <form action="<?php echo e(route('register')); ?>" method="post">
    <div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>" >
      <label for="username">Username</label>
      <input class="form-control" type="text" name="username" id="username" value="<?php echo e(Request::old('username')); ?>">
    </div>
    <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>" >
      <label for="password">Password</label>
      <input class="form-control" type="password" name="password" id="password">
    </div>
    <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>" >
      <label for="email">E-Mail</label>
      <input class="form-control" type="text" name="email" id="email" value="<?php echo e(Request::old('email')); ?>">        <!-- το request.old για να κραταει τα στοιχεία μας σε περίπτωση ερρορ -->
    </div>
    <div class="form-group <?php echo e($errors->has('city') ? 'has-error' : ''); ?>" >
      <label for="city">Πόλη</label>
      <input class="form-control" type="text" name="city" id="city" value="<?php echo e(Request::old('city')); ?>">
    </div>

    <button type="submit" class="btn btn-primary">Αποστολή</button>
    <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
</form>
</div>
<div class="col-md-6">
  <h3>Σύνδεση</h3>
  <form action="<?php echo e(route('signin')); ?>" method="post">
    <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>" >
      <label for="email">E-Mail</label>
      <input class="form-control" type="text" name="email" id="email" value="<?php echo e(Request::old('email')); ?>">
    </div>

    <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>" >
      <label for="password">Password</label>
      <input class="form-control" type="password" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Αποστολή</button>
    <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
</form>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nonmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>