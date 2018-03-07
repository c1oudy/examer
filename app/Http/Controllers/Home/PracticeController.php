<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PracticeController extends Controller
{
    public function practice_index(){
        return view('Home.practice.practice_index',['curentPage'=>'practice']);
    }
}
