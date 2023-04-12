<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public static $WEATHER_URL = "http://api.openweathermap.org/data/2.5/forecast?q=dhaka,bangladesh&appid=d3cd7162f9d6c60ebc6a25565f75fdd3";

    function viewIndex( Request $request)
    {
        $query= "dhaka,bangladesh";
        if(isset($request->location)){
        $query = $request->location;
        }
        $client = new \GuzzleHttp\Client();

        $request = new \GuzzleHttp\Psr7\Request('GET', "http://api.openweathermap.org/data/2.5/forecast?q=".$query."&appid=d3cd7162f9d6c60ebc6a25565f75fdd3");

        $promise = $client->sendAsync($request)->then(function ($response) {
          
        
            return  $response->getBody();
        });
        $result = $promise->wait();
    

        return view('index', ['result' => json_decode($result,true)]);
    }
}
