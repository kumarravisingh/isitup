<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Ping;

class UpController extends Controller
{

    /**
     * Check website is up
     */
    public function show(){
        return view('welcome');
    }

    /**
     * Check website is up
     * @param $url
     * @return \Illuminate\Http\JsonResponse
     */
    public function up($url){
        $currentTime = microtime(true);
        $health = Ping::check($url);
        $timeDifference = round(microtime(true) - $currentTime,3)*1000;
        if($health == 200) {
            return response()->json(['status'=>'success', 'timeInMillisecond' => $timeDifference],200);
        } else {
            return response()->json(['status'=>'failure', 'timeInMillisecond' => $timeDifference],201);
        }
    }
}
