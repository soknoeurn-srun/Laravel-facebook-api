<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::all();
        return response()->json(['success' => true, 'data' => $post], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'user_id' => 'required'
        ]);
        if($validator->fails()) {
            return $validator->errors();
        } else {
            $post = Post::create([
                'title' => request('title'),
                'description' => request('description'),
                'user_id' => request('user_id')
            ]);
        }
        return response()->json(['success' => true, 'data' => $post],200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);
        return response()->json(['success' => true, 'data' => $post], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $post = Post::find($id);
        $post->update([
            'title' => request('title'),
            'description' => request('description'),
            'user_id' => request('user_id')
        ]);
        return response()->json(['success' => true, 'message' => 'Post was updated!'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return response()->json(['success' => false, 'message' => 'Post deleted!'],200);
    }
}
