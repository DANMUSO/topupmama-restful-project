<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use App\Models\Book;
use Illuminate\Http\Request;
use Validator; 
class CommentController extends Controller {

    //List of all comments
    public function index(){
        $comment = Comment::orderBy('created_at', 'ASC')->get();

        return response()->json($comment);
    }
    //Save comments to db
    public function savecomments(Request $request, $book_isbn){
       
        $userIp = $request->ip();

        $validated =  Validator::make($request->all(), [ // <---
             'comment' => 'required|max:500',
        ]);
        
        if ($validated->fails()){
            return [
            'success' => 0, 
            'message' => $validated->errors()->first()
        ];
        };
        $comment = new Comment();
        $comment -> book_isbn = $book_isbn;
        $comment -> comment = $request->comment;
        $comment -> ipAddress = $userIp;
        $comment ->save();
        
        return response()->json(["msg"=> "Comment saved successfully!"]);
    }
}
