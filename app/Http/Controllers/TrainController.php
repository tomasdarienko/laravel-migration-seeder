<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\train;
class TrainController extends Controller
{
    public function index(){

        $trains = Train::where("orarioPartenza",">=",now())->get();

        return view("welcome", compact("trains"));
    }
}
