<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">



</head>


<style type="text/css">
  .help-block{
    color: red;
  }
</style>
<body>



  <div class="container">




    <h2>Upload file</h2>



  <?php echo $Form::open(array('url'=>'insertfile','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)); ?>

  <?php echo Form::close(); ?>


  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

    <div class="form-group">


      <label class="control-label col-sm-2" for="name">Title:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control file_title_c" id="file_title_id" name="file_title" placeholder="Enter Tile"  value="<?php echo e(Input::old('file_title')); ?>">

        <?php if($errors->has('file_title')): ?> <p class="help-block"><?php echo e($errors->first('file_title')); ?></p> <?php endif; ?>

				</div>


      </div>

      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Upload:</label>

      <div class="col-sm-4">

        <input type="file"  name="filenam" class="filename">

        <?php if($errors->has('filenam')): ?> <p class="help-block"><?php echo e($errors->first('filenam')); ?></p> <?php endif; ?>

      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>



    </div>


<?php echo Form::close(); ?>


</div>



<script>
  <?php if(Session::has('message')): ?>
    var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
    switch(type){

        case 'success':
            toastr.success("<?php echo e(Session::get('message')); ?>");
            break;

        case 'error':
            toastr.error("<?php echo e(Session::get('message')); ?>");
            break;
    }
  <?php endif; ?>
</script>

</body>
</html>
