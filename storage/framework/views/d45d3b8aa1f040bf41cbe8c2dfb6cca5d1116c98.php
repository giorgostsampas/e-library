<?php $__env->startSection('title'); ?>
  E-library
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="rowcontact">
  <?php if(Session::has('success')): ?>
	    <div class="alert alert-success">
	      <?php echo e(Session::get('success')); ?>

	    </div>
	<?php endif; ?>

<div class="col-md-12">
  <h4>Χρησιμοποιήστε την παρακάτω φόρμα για να επικοινωνήσετε μαζί μας</h4>
  <form action="<?php echo e(route('signin')); ?>" method="post">

    <div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>" >
      <label for="username">Το ονομά σας</label>
      <input class="form-control" type="text" name="username" id="username" value="<?php echo e(Request::old('username')); ?>">
    </div>

    <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>" >
      <label for="email">Το E-Mail σας</label>
      <input class="form-control" type="text" name="email" id="email" value="<?php echo e(Request::old('email')); ?>">
    </div>


    <div class="form-group <?php echo e($errors->has('comment') ? 'has-error' : ''); ?>" >
      <label for="comment">Σχόλιο</label>
      <textarea class="form-control " rows= "8" type="textarea" name="comment" id="comment "></textarea>


    </div>

    <button type="submit" class="btn btn-primary">Αποστολή</button>
    <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
</form>
</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nonmaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>