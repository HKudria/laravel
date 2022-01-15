<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        //if user isn't logged he can't show any pages other than index and show. He will redirect on login page
        $this->middleware('auth')->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $posts =  Post::join('users','author_id', '=', 'users.id')
                ->where('title','like','%'.$request->search.'%')
                ->orWhere('descr','like','%'.$request->search.'%')
                ->orWhere('users.name','like','%'.$request->search.'%')
                ->orderBY('posts.created_at','desc')
                ->get();
            return view('posts.index', compact('posts'));
        }

        $posts = Post::join('users','author_id', '=', 'users.id')
            ->orderBY('posts.created_at','desc')
            ->paginate(4);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //for check field we need create request php artisan make:request PostRequest
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->short_title = \Str::length($request->title)>30 ? \Str::substr($request->title,0,30). '...' : $request->title;
        $post->author_id =\Auth::user()->id;
        $post->descr = $request->descr;
        if($request->file('img')){
            $path = \Storage::putFile('public', $request->file('img'));
            $url = \Storage::url($path);
            $post->img = $url;
        }
        $post->save();

        return redirect()->route('post.index')->with('success','Post was created successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::join('users','author_id', '=', 'users.id')
           ->find($id);
        if(!$post){
            return redirect()->route('post.index')->withErrors('This page isn\'t correct');
        }
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('post.index')->withErrors('This page isn\'t correct');
        }
        if($post->author_id != \Auth::user()->id  && \Auth::user()->role != 'admin'){
           return redirect()->route('post.index')->withErrors('You don\'t have permission for it!');
        }
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('post.index')->withErrors('This page isn\'t correct');
        }
        if($post->author_id != \Auth::user()->id && \Auth::user()->role != 'admin'){
            return redirect()->route('post.index')->withErrors('You don\'t have permission for it!');
        }

        $post->title = $request->title;
        $post->short_title = \Str::length($request->title)>30 ? \Str::substr($request->title,0,30). '...' : $request->title;
        $post->descr = $request->descr;


        if($request->file('img')){
            $path = \Storage::putFile('public', $request->file('img'));
            $url = \Storage::url($path);
            $post->img = $url;
        }
        $post->update();
        $id = $post->post_id;
        return redirect()->route('post.show', compact('id'))->with('success','Post was edited successful!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if(!$post){
            return redirect()->route('post.index')->withErrors('This page isn\'t correct');
        }
        if($post->author_id != \Auth::user()->id  && \Auth::user()->role != 'admin'){
            return redirect()->route('post.index')->withErrors('You don\'t have permission for it!');
        }
        $post->delete();

        return redirect()->route('post.index')->with('success','Post was deleted successful!');

    }
}
