<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostsResource;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\PostsRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Post::find(2)->category;
        return $category;
//        return PostsResource::collection(Post::all());

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
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        //
        $category = Post::find(1)->get_category();
//        $post = Post::create([
//            'body' => $request->input('body'),
//            'image' => $request->input('image'),
//            'upVotes' => $request->input('upVotes'),
//            'downVotes' => $request->input('downVotes'),
//            'created_by_user' => auth('api')->user()->id,
//            'category_id' => $category
//        ]);
//        return new PostsResource($post);
            return response()->json($category);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //

        return new PostsResource($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, Post $post)
    {
        $post->update([
            'body' => $request->input('body'),
            'image' => $request->input('image'),
            'upVotes' => $request->input('upVotes'),
            'downVotes' => $request->input('downVotes'),
            'created_by_user' => auth('api')->user()->id,
            'category_id' => $request->input('category')
        ]);
        return new PostsResource($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
