<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;


class UserController extends Controller
{

  public function postRegister(Request $request)
  {
    $this->validate($request, [
      'username' => 'required|max:100',
      'password' => 'required|min:4',
      'email' => 'required|email|unique:users',
    ]);
$username = $request['username'];
$password = bcrypt($request['password']);  //kriptografisi
$email = $request['email'];
$city = $request['city'];

$user =new User();
$user->username = $username;
$user->password = $password;
$user->email = $email;
$user->city = $city;

$user->save();

Auth::login($user);

return redirect()->route('dashboard');
  }

  public function postSignIn(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if  (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
      return redirect()->route('dashboard');
    }
      return redirect()->back();

  }

public function getLogout()
{
  Auth::logout();
  return redirect()->route('home');
}
}
