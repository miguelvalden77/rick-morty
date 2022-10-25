<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiCaller extends Controller
{
    public function index($page = 1){

        $ch = curl_init();
        if($page == 1){
            $url = "https://rickandmortyapi.com/api/character";
        }
        else{
            $url = "https://rickandmortyapi.com/api/character?page={$page}";
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);

        $characters = json_decode($response, TRUE);

        if($characters["info"]["next"] !== null){
            $num = explode("=", $characters["info"]["next"])[1];
        } else {
            $num = explode("=", $characters["info"]["prev"])[1] + 2;
        }

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

    public function locations($page = 1){

        if($page == 1){
            $url = "https://rickandmortyapi.com/api/location";
        }
        else{
            $url = "https://rickandmortyapi.com/api/location?page={$page}";
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);

        $locations = json_decode($response, TRUE);
        
        if($locations["info"]["next"] !== null){
            $num = explode("=", $locations["info"]["next"])[1];
        } else {
            $num = explode("=", $locations["info"]["prev"])[1] + 2;
        }

        return view("locations")->with([
            "locations" => $locations["results"],
            "num" => $num,
            "page" => $locations["info"]
        ]);
    }

    public function episodes($page = 1){

        if($page == 1){
            $url = "https://rickandmortyapi.com/api/episode";
        }
        else{
            $url = "https://rickandmortyapi.com/api/episode?page={$page}";
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($ch);
        curl_close($ch);

        $episodes = json_decode($response, TRUE);

        if($episodes["info"]["next"] !== null){
            $num = explode("=", $episodes["info"]["next"])[1];
        } else {
            $num = explode("=", $episodes["info"]["prev"])[1] + 2;
        }

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
