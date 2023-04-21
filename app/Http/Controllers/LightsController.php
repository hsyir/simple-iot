<?php

namespace App\Http\Controllers;

use App\Services\Lights;
use Illuminate\Http\Request;

class LightsController extends Controller
{

    public function toggle($status)
    {

        switch($status) {
            case "on":
                Lights::turnOn();
                break;
            case "off":
                Lights::turnOff();
                break;
            default:
                return response()->json([
                    "success" => false,
                    "message" => "فقط مقدار off و on مجاز است."
                ]);
        }

        return response()->json([
            "success"=>true,
        ]);

    }

    public function getStatus(){
        return response()->json([
            "lightsStatus"=>Lights::getStatus(),
        ]);
    }
}
