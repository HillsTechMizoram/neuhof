<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        return view('post',compact('posts'));
    }
    public function displaydeleted()
    {
        $posts = Post::onlyTrashed()->get();
        return view('postbin',compact('posts'));
    }
    public function restore($id)
    {
        Post::withTrashed()->where('id',$id)->first()->restore();
        Alert::success('Restored Successfully');
        return redirect('postbin');
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
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
    
           ]);

        $name = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();
        $filename = time().'.'.$extension;
 
        $path = $request->file('image')->move('images', $filename);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $filename;
        $post->save();
        Alert::success('Post Added Successfully');
        return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Post::find($id);
        unlink('images/'.$image->image);
        Post::destroy($id);
        Alert::success('Post Deleted Successfully');
        return redirect('/post');
    }
}
