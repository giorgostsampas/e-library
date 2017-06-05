<!--
<!DOCTYPE html>


<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>

  <meta charset="utf-8">

<title>Document</title>
</head>

<body class="container">



  <form method="POST" action="/pdfbooks" enctype="multipart/form-data"
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />


{{ csrf_field() }}

  <input type="file" name="pdfbook"></input>

  <button type="submit">Αποθήκευση</button>


</form>


</body>
</html>

-->


 @extends('layouts.master')


@section('content')
@include('includes.message-block')

<!DOCTYPE html>


<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
<meta charset="utf-8">

<title>Document</title>
</head>

<section class="container">

<div class="col-md-6 col-md-offset-4">
  <header><h3>Ανέβασε το αρχείο σου </h3> </header>
  <form method="POST" action="/pdfbooks" enctype="multipart/form-data"
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />


{{ csrf_field() }}

<input type="file" name="pdfbook"></input>
<hr>
<button type="submit">Αποθήκευση</button>




</form>

</div>

</section>



</body>
</html>

    @endsection
