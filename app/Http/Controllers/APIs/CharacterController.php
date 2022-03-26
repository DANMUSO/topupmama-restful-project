<?php

namespace App\Http\Controllers;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller {

    public function index(){
   $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://anapioficeandfire.com/api/books', 
            ['verify' => false]);
        $statusCode = $response->getStatusCode();
        $books = json_decode($response->getBody());
    }
}
