<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>
   Laravel
  </title>
 </head>
 <body>
  <?php echo e(Form::open(array('url'=>'form-submit','files'=>true))); ?>


  <?php echo e(Form::label('file','File',array('id'=>'','class'=>''))); ?>

  <?php echo e(Form::file('file','',array('id'=>'','class'=>''))); ?>

  <br/>
  <!-- submit buttons -->
  <?php echo e(Form::submit('Save')); ?>


  <!-- reset buttons -->
  <?php echo e(Form::reset('Reset')); ?>


  <?php echo e(Form::close()); ?>

 </body>
</html>
