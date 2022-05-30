<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicesModel;

class ServiceController extends Controller
{
    function ServiceIndex(){

        return view('service');
    }

    function getServiceData(){
        $result = json_encode(ServicesModel::all());

        return $result;
    }
}
