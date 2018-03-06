<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\MenuModel as MenuModel;

class PracticeController extends Controller
{
    public function practice_index(){
        $menuModel = new MenuModel();
        $menu = $menuModel->readMenu();
        return view('practice.practice_index',['menu' => $menu]);
    }
}
