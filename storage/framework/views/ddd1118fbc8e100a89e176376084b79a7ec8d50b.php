<!DOCTYPE html>

<html lang="en">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<head>

  <meta charset="utf-8">

<title>Document</title>
</head>

<body class="container">



  <form method="POST" action="/pdfbooks" enctype="multipart/form-data"
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />


<?php echo e(csrf_field()); ?>


  <input type="file" name="pdfbook"></input>

  <button type="submit">Αποθήκευση</button>
</form>

</body>
</html>
