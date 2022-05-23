<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;
use PhpParser\JsonDecoder;

class VisitorController extends Controller
{
    function VisitorIndex(){

        $visitor_data = VisitorModel::orderBy('id', 'desc')->get();

        // dd($visitor_data);

        return view('visitor',['visitor_data' => $visitor_data]);
    }
}
