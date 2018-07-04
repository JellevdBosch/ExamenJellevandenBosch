<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Http\Controllers\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('berichten')
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('/posts/index', ['posts' => $posts]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function new()
    {
        return view('/post/new');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new \App\Post;
        $post->titel = $request->post_title;
        $post->content = $request->post_content;
        $post->author = \Auth::user()->username;
        $post->save();

        return redirect('/')->with('success','Post succesfully made!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::get()->where('id', $id)->first();
        return view('/post/edit',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $input['id'] = $id;
        $input['titel'] = $request->post_title;
        $input['content'] = $request->post_content;

        Post::find($input['id'])->update(['content'=>$input['content'], 'titel' => $input['titel']]);
        $recentposts = DB::table('berichten')
            ->orderBy('updated_at', 'desc')
            ->limit(5)
            ->get();

        return redirect('/', 302, ['recentposts' => $recentposts])->with('success','Post updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('/index/posts/index')->with('success','Post deleted succesfully!');
    }
}
