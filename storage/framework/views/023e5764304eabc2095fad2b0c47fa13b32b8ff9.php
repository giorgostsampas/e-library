<!DOCTYPE html>
<html lang="en">
    <head>
<!--        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">     -->

        <title><?php echo $__env->yieldContent("title"); ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo e(URL::to('css/main.css')); ?>"  />

        <!-- Fonts -->


        <!-- Styles -->
      </head>
    <body>
      <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="container">
<?php echo $__env->yieldContent("content"); ?>
      </div>
      <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
          <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?php echo e(URL::to('js/app.js')); ?>"></script>

</body>




</html>
