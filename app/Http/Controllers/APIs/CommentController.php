<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller {

    //List of all comments
    public function index(){
        $comment = Comment::all();

        return response()->json($comment);
    }
    //Save comments to db
    public function savecomments(Request $request){
        $comment = new Comment();
        $comment -> book_id = $request->book_id;
        $comment -> comment = $request->comment;
        $comment -> ipAddress = $request->ipAddress;
        $comment ->save();
        return response()->json(["msg"=> "Comment saved successfully!"]);
    }
}
