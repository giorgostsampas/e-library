<?php
namespace App\Http\Controllers;
use Validator;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
  public function getDashboard()
  {
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('dashboard', ['posts' => $posts]);
  }

  public function getUpload()
  {
    $posts = Post::orderBy('created_at', 'desc')->get();
    return view('upload', ['posts' => $posts]);
  }

public function postDownload()
{
  $file = request()->file('pdfbook');
  $ext = $file->guessClientExtension();
  request()->file('pdfbook')->store('pdfbooks');
  return  back();
}

public function postCreatePost(Request $request)
{
  $this->validate($request,[
  'body' => 'required|max:1000'
  ]);
  $post = new Post();
  $post->body = $request['body'];
  $message = 'Υπάρχει κάποιο πρόβλημα.';
  if ($request->user()->posts()->save($post)) {
    $message = 'Το σχόλιο πραγματοποιήθηκε!' ;
  }
  return redirect()->route('dashboard')->with(['message'=> $message]);
}

public function getDeletePost($post_id)
{
  $post = Post::where('id', $post_id)->first();                   //methodo sql statement,ison default
 if (Auth::user() != $post->user) {
   return redirect()->back();
 }
  $post->delete();
  return redirect()->route('dashboard')->with(['message' => 'διαγράφηκε επιτυχώς!']);
}

public function postEditPost(Request $request)
{
  $this->validate($request, [
    'body' => 'required'
  ]);
  $post = Post::find($request['postId']);
  if (Auth::user() != $post->user) {
    return redirect()->back();
  }
  $post->body = $request['body'];
  $post->update();
  return response()->json(['new_body'=>$post->body], 200);
}

}
