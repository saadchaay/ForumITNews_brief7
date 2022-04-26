<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentsResource;
use App\Models\Comment;
use App\Http\Requests\CommentsRequest;
use App\Models\Post;
use phpDocumentor\Reflection\Types\Collection;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return CommentsResource::collection(Comment::all());
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
     * @param  \App\Http\Requests\CommentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentsRequest $request)
    {
        //
        $post = Post::find(2)->comments->first() ;
        $comment = Comment::find(9)->replies->first();
//
//        $comment = Comment::create([
//            'body' => $request->input('body'),
//            'user_id' => auth('api')->user()->id,
//            'post_id' => $post->post_id,
//            'reply_to' => ($comment->id)?$comment->id:NULL,
//        ]);
//        return new CommentsResource($comment);
        if(empty($comment)){
            return "yes it's empty...";
        } else {
            return "it doesn't empty...";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return new CommentsResource($comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CommentsRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(CommentsRequest $request, Comment $comment)
    {
        //
        $comment->update([
            'body' => $request->input('body'),
            'user_id' => $request->input('user'),
            'post_id' => $request->input('post'),
            'reply_to' => $request->input('reply_to')
        ]);
        return new CommentsResource($comment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
        $comment->delete();
        return response(null,204);
    }
}
