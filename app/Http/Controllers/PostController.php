<?php
namespace App\Http\Controllers;
use Validator;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;              //gia na kanoume delete kai ta dika mas post
use App\Like;

class PostController extends Controller
{
  public function getDashboard()
  {
    $posts = Post::orderBy('created_at', 'desc')->get();                  //gia na exoume allilepidrasi me ta post,gia na ginete to fetch,me ta query
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
    'body' => 'required|max:1000'      //to validation
  ]);
  $post = new Post();
  $post->body = $request['body'];
  $message = 'There was an error';
  if ($request->user()->posts()->save($post)) {            //an einai swsto to validation na petaei success alliws provlima
    $message = 'Post successfully created!' ;
  }
  return redirect()->route('dashboard')->with(['message'=> $message]);
}

public function getDeletePost($post_id)
{
  $post = Post::where('id', $post_id)->first();                   //methodo sql statement
 if (Auth::user() != $post->user) {
   return redirect()->back();
 }
  $post->delete();
  return redirect()->route('dashboard')->with(['message' => 'Succesfully deleted!']);
}                           //anamesa apo to id kai to post id vazoume to megalitero mikrotero ison .to ison einai to default

public function postEditPost(Request $request)                 //gia to edit post
{
  $this->validate($request, [
    'body' => 'required'
  ]);
  $post = Post::find($request['postId']);     //an einai swsto ginete post edited
  if (Auth::user() != $post->user) {
    return redirect()->back();
  }
  $post->body = $request['body'];
  $post->update();
  return response()->json(['new_body'=>$post->body], 200);
}

public function postLikePost(Request $request)
    {
        $post_id = $request['postId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $post = Post::find($post_id);
        if (!$post) {
            return null;
        }
        $user = Auth::user();
        $like = $user->likes()->where('post_id', $post_id)->first();
        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;
            }
        } else {
            $like = new Like();
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;
        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }
}
