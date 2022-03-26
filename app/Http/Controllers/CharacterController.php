<?php

namespace App\Http\Controllers;
use App\Models\Charater;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class CharacterController extends Controller {

 
    public function index($param){
   $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://anapioficeandfire.com/api/characters', 
            ['verify' => false]);
        $statusCode = $response->getStatusCode();
        $characters = json_decode($response->getBody());
         $json = ''.json_encode($characters).'';

        // decode json
       
        $json = json_decode($json);
        $json[0]->age = (int)$json[0]->died - (int)$json[0]->born;
        $json[1]->age = (int)$json[1]->died - (int)$json[1]->born;
        $json[2]->age = (int)$json[2]->died - (int)$json[2]->born;
        $json[3]->age = (int)$json[3]->died - (int)$json[3]->born;
        $json[4]->age =  1;
        $json[5]->age = (int)$json[5]->died - (int)$json[5]->born;
        $json[6]->age = (int)$json[6]->died - (int)$json[6]->born;
        $json[7]->age =  3;
        $json[8]->age = (int)$json[8]->died - (int)$json[8]->born;
        $json[9]->age =  9;
        usort($json, function($a, $b) use($param)
        {
            return strcmp($a->$param, $b->$param);
        });
        return $json;
        }
   public function listCharacter(){
           $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://anapioficeandfire.com/api/characters', 
            ['verify' => false]);
        $statusCode = $response->getStatusCode();
        $characters = json_decode($response->getBody());
         $json = ''.json_encode($characters).'';
      
        return $json;

    }

    public function filterCharacter($param, Request $request){
     
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'https://anapioficeandfire.com/api/characters', 
            ['verify' => false]);
    $statusCode = $response->getStatusCode();
    $characters = json_decode($response->getBody(),);
    
    $data = '{"data": '.json_encode($characters).'}';

        $json = json_decode($data, 1);
        $data = $json['data'];

        $gender = array();
         
        foreach ($data as $rkey => $result){

            if ($result['gender'] ==  ucfirst($param) ){

                $gender[] = $result;

            }

        }
        echo json_encode($gender);
    }
}
