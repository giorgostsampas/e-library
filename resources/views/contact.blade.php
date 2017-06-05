@extends('layouts.nonmaster')

@section('title')
  E-library
@endsection

@section('content')
 @include('includes.message-block')
<div class="rowcontact">
  @if(Session::has('success'))
	    <div class="alert alert-success">
	      {{ Session::get('success') }}
	    </div>
	@endif

<div class="col-md-12">
  <h4>Χρησιμοποιήστε την παρακάτω φόρμα για να επικοινωνήσετε μαζί μας</h4>
  <form action="{{ route('signin') }}" method="post">

    <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}" >
      <label for="username">Το ονομά σας</label>
      <input class="form-control" type="text" name="username" id="username" value="{{ Request::old('username')}}">
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}" >
      <label for="email">Το E-Mail σας</label>
      <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email')}}">
    </div>


    <div class="form-group {{ $errors->has('comment') ? 'has-error' : ''}}" >
      <label for="comment">Σχόλιο</label>
      <textarea class="form-control " rows= "8" type="textarea" name="comment" id="comment "></textarea>


    </div>

    <button type="submit" class="btn btn-primary">Αποστολή</button>
    <input type="hidden" name="_token" value="{{Session::token()}}">
</form>
</div>
</div>

@endsection
