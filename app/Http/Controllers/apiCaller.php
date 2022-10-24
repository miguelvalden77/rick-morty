<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiCaller extends Controller
{
    public function index($page, $item = 1){

        $ch = curl_init();
        if($item == 1){
            $url = "https://rickandmortyapi.com/api/character?page={$page}";
        }
        else{
            $url = "https://rickandmortyapi.com/api/character";
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);

        $characters = json_decode($response, TRUE);
        
        $num = explode("=", $characters["info"]["next"])[1];

        return view("allCharacters")->with([
            "characters" => $characters["results"],
            "page" => $characters["info"],
            "num" => $num
        ]);

    }

    public function character($id){

        // character
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://rickandmortyapi.com/api/character/{$id}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);

        $character = json_decode($response, TRUE);

        $episodes = array_map(function($epi){

            $arr = explode("/", $epi);
            $num =  $arr[5];

            return $num;

        }, $character["episode"]);

        return view("character")->with(["character" => $character, "episodes" => $episodes]);
    }

    public function locations($page, $item = 1){

        if($item == 1){
            $url = "https://rickandmortyapi.com/api/location?page={$page}";
        }
        else{
            $url = "https://rickandmortyapi.com/api/location";
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);

        $locations = json_decode($response, TRUE);

        $num = explode("=", $locations["info"]["next"])[1];

        return view("locations")->with([
            "locations" => $locations["results"],
            "num" => $num,
            "page" => $locations["info"]
        ]);
    }

    public function episodes($page, $item = 1){

        if($item == 1){
            $url = "https://rickandmortyapi.com/api/episode?page={$page}";
        }
        else{
            $url = "https://rickandmortyapi.com/api/episode";
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);

        $episodes = json_decode($response, TRUE);

        $num = explode("=", $episodes["info"]["next"])[1];

        return view("episodes")->with([
            "episodes" => $episodes["results"],
            "num" => $num,
            "page" => $episodes["info"] 
        ]);
    }

    public function getAnEpisode($id){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://rickandmortyapi.com/api/episode/{$id}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);

        $episode = json_decode($response, TRUE);

        return view("oneEpisode")->with(["episode" => $episode]);
    }

}
