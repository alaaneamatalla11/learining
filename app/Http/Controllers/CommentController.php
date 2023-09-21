<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\CreateComment;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //         // $validated = $request->validate([

        //         //     'about' => 'require|max:25',
        //         //     'person' =>  'require'

        //         // ]);
        // $comment =  new Comment();
        // $comment->about = $request->input('about');
        // $comment->person = $request->input('person');
        // // $comment->save();


        $comment= Comment::create([
            'about'=> $request->about,
            'person'=> $request->person

        ]);
        // return response('done');
        
        $users = User::first();
        // $user_create = auth()->username;
        Notification::send($users , new CreateComment($comment->id));

        return redirect()->route('comments.index');
        // $users = User::find(1);
        // foreach ($users->unreadNotifications as $notification) {
        //     $notification->markAsRead();

        // return redirect()->route('comments.index');
        // dd( $request->all());
        // return $request;


    }

    /**
     * Display the specified resource.
     */
    public function show(comment $comment)
    {
        $notifications = Notification::where('read', false)->get();
        return view('notifacations', compact('notifications'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $comments = Comment::findorfail($id);
        return view('comment.edit', compact('comments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        // $comment->about = $request->input('about');
        // $comment->person = $request->input('person');
        // $comment->save();
        // return redirect()->route('comments.index');

        //-------------------------------------------
        $comment->update([
            'about' => $request->about,
            'person' => $request->person

        ]);
        return redirect()->route('comments.index');
        // return response('done');

    }

    /**
     * Remove the specified resource from storage.
     */



    public function softdelete( $id)
    {
        $comments = Comment::onlyTrashed()->get();
        return view('comment.softdelete' ,compact('comments'));
    }


    public function restore($id)
    {
        Comment::withTrashed()->where('id', $id)->restore();
        return redirect()->back();
       
    }

    public function forcedelete($id)
    {
        Comment::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back();
    }
    public function destroy($id)
    {
        Comment::destroy($id);
        return redirect()->route('comments.index');
    }
}
