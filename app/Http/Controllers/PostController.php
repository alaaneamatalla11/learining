<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3',
            'body' => 'required'
        ]);
        DB::table('posts')->insert([
            "title" => $request->title,
            "body" => $request->body
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $posts = DB::table('posts')->get();
        // return view('posts.show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = DB::table('posts')->where('id', $id)->first();
        return view('posts.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $posts = DB::table('posts')->where('id', $id)->update([
            "title" => $request->title,
            "body" => $request->body

        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $posts = DB::table('posts')->where('id', $id)->delete();
        return redirect()->route('posts.index');
    }
}
