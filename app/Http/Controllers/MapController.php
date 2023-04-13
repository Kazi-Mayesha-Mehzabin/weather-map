<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\ClientException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public static $WEATHER_URL = "http://api.openweathermap.org/data/2.5/forecast?q=dhaka,bangladesh&appid=77d7317d8efb6cb428247950e1165a20";

    function viewIndex( Request $request)
    {
        $query= "dhaka,bangladesh";
        if(isset($request->location)){
        $query = $request->location;
        }
        $client = new \GuzzleHttp\Client();
        $flag = 1;
        $request = new \GuzzleHttp\Psr7\Request('GET', "http://api.openweathermap.org/data/2.5/forecast?q=".$query."&appid=77d7317d8efb6cb428247950e1165a20");
        
        try{
            $promise = $client->sendAsync($request)->then(function ($response) {
          
               return $response->getBody();
         
        },function($reason){
            $flag = 0;
          
        
        });
    }
       catch (ClientException $e){
        dd('city not found');

       } $result = $promise->wait();
      
       
       
       
    
     
        if(isset($result))return view('index', ['result' => json_decode($result,true)]);
        else   return view('notFound');
    }
}
