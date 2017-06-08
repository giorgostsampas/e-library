<?php if(count($errors) > 0): ?>
<div class="row">
<div class="col-md-4 col-md-offset-4 error">
<ul>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  <!-- gia ta error  -->
  <li><?php echo e($error); ?></li>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
  </ul>
</div>
</div>
<?php endif; ?>
<?php if(Session::has('message')): ?>
<div class="row">
<div class="col-md-4 col-md-offset-4 success">
<?php echo e(Session::get('message')); ?>

</div>
</div>
<?php endif; ?>
