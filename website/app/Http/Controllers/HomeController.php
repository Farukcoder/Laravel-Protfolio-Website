<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use App\ServicesModel;

class HomeController extends Controller
{
    public function HomeIndex(){

        $UserIp = $_SERVER['REMOTE_ADDR'];

        date_default_timezone_set("Asia/Dhaka");

        $timeDate = date("Y-m-d h:i:sa");

        VisitorModel::insert(['ip_address'=>$UserIp,'visit_time'=>$timeDate]);

        $service_data = ServicesModel::all();

        return view('home',['service_data'=>$service_data]);
    }
}
