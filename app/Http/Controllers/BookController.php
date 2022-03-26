<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Comment;
use App\Models\Author;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class BookController extends Controller {

    //List of all books
    public function listbook(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://anapioficeandfire.com/api/books', 
            ['verify' => false]);
        $statusCode = $response->getStatusCode();
        $someObject = json_decode($response->getBody());
        
        $json = ''.json_encode($someObject).'';

        // decode json
        $json = json_decode($json);

        //Remove unvanted props
        foreach ($json as $key=>$row) {

        foreach ($row as $prop=>$field) {
            if ($prop != 'characters' && $prop != 'povCharacters')
                $newArray[$key][$prop] = $field;
            }

        }
        // add data
        $newArray[0]['commentsCount'] = Comment::where('book_isbn', $newArray[0]['isbn'])->count();
        $newArray[1]['commentsCount'] = Comment::where('book_isbn', $newArray[1]['isbn'])->count();
        $newArray[2]['commentsCount'] = Comment::where('book_isbn', $newArray[2]['isbn'])->count();
        $newArray[3]['commentsCount'] = Comment::where('book_isbn', $newArray[3]['isbn'])->count();
        $newArray[4]['commentsCount'] = Comment::where('book_isbn', $newArray[4]['isbn'])->count();
        $newArray[5]['commentsCount'] = Comment::where('book_isbn', $newArray[5]['isbn'])->count();
        $newArray[6]['commentsCount'] = Comment::where('book_isbn', $newArray[6]['isbn'])->count();
        $newArray[7]['commentsCount'] = Comment::where('book_isbn', $newArray[7]['isbn'])->count();
        $newArray[8]['commentsCount'] = Comment::where('book_isbn', $newArray[8]['isbn'])->count();
        $newArray[9]['commentsCount'] = Comment::where('book_isbn', $newArray[9]['isbn'])->count();
        // loop through array
        /* usort($newArray, function ($a, $b) {
            return $a['released'] > $b['released'] ? -1 : 1;
        }); */
        $newArray = json_encode($newArray);

        return $newArray;
         /* $listbook = Book::with('author','comments')->orderBy('released', 'DESC')->get();
        return $listbook; */
    }
    public function index(){
        
    }
    //List of all books from sorted by release date from earliest to newest
    public function listbooks(){


    }
}
