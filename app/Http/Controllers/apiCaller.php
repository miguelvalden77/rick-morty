<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiCaller extends Controller
{
    public function index(){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://rickandmortyapi.com/api/character");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);

        $characters = json_decode($response, TRUE);
        
        

        return view("allCharacters")->with(["characters" => $characters["results"]]);

    }

    public function character($id){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://rickandmortyapi.com/api/character/{$id}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);

        $character = json_decode($response, TRUE);

        return view("character")->with(["character" => $character]);

    }
}
