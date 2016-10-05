<?php

namespace App\Http\Controllers;
use Forecast\Forecast;
use Illuminate\Http\Request;

use App\Http\Requests;

class ForecastController extends Controller
{
    public function weatherForecast()
    {
        $forecast = new Forecast('7238b3673bf584023af69092d2a09754');

        //return $cast['1'];
       // $kid = "werkt";
        //return view('home' , compact('forecast'));

      //  $value = get_object_vars($forecast->get('37.8267','-122.423'));
       $value = json_encode($forecast->get('37.8267','-122.423')->minutely->summary, true);
        echo $value;
        //$cast = $value['timezone'];
  //      var_dump($value);
     //   dd($value);
        //return $value['minutely']['summary'];
    }
}
