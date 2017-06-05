@extends('layouts.nonmaster')

@section('title')
  E-library
@endsection

@section('content')
@include('includes.message-block')
<div class="row">
<div class="col-md-6">
  <h3>Εγγραφή</h3>
  <form action="{{ route('register') }}" method="post">
    <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}" >
      <label for="username">Username</label>
      <input class="form-control" type="text" name="username" id="username" value="{{ Request::old('username')}}">
    </div>
    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}" >
      <label for="password">Password</label>
      <input class="form-control" type="password" name="password" id="password">
    </div>
    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}" >                <!-- kokkinizei to koutaki logw bootstrap-se error -->
      <label for="email">E-Mail</label>
      <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email')}}">   <!-- to request.old=gia na min ksanavazoume pali ta stoixeia se error -->
    </div>
    <div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}" >
      <label for="city">Πόλη</label>
      <input class="form-control" type="text" name="city" id="city" value="{{ Request::old('city')}}">
    </div>

    <button type="submit" class="btn btn-primary">Αποστολή</button>
    <input type="hidden" name="_token" value="{{Session::token()}}">          <!-- einai facade -->
</form>
</div>
<div class="col-md-6">
  <h3>Σύνδεση</h3>
  <form action="{{ route('signin') }}" method="post">
    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}" >
      <label for="email">E-Mail</label>
      <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email')}}">
    </div>

    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}" >
      <label for="password">Password</label>
      <input class="form-control" type="password" name="password" id="password">
    </div>
    <button type="submit" class="btn btn-primary">Αποστολή</button>
    <input type="hidden" name="_token" value="{{Session::token()}}">
</form>
</div>
</div>

@endsection
