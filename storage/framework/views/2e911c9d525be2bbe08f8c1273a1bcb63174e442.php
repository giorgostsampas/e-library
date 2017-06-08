 


<?php $__env->startSection('content'); ?>
<?php echo $__env->make('includes.message-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!DOCTYPE html>


<html lang="en">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<head>
<meta charset="utf-8">

<title>Document</title>
</head>

<section class="container">

<div class="col-md-6 col-md-offset-4">
  <header><h3>Ανέβασε το αρχείο σου </h3> </header>
  <form method="POST" action="/pdfbooks" enctype="multipart/form-data"
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
<?php echo e(csrf_field()); ?>

<input type="file" name="pdfbook">επιλογή αρχείου</input>
<hr>
<button type="submit">Αποστολή</button>
</form>
</div>
</section>
</body>
</html>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>