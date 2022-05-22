<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use PhpParser\JsonDecoder;

class VisitorController extends Controller
{
    function VisitorIndex(){

        $visitor_data = json_decode(VisitorModel::all(),true);

        return view('visitor',['visitor_data' => $visitor_data]);
    }
}
