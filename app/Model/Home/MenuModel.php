<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use DB;

class MenuModel extends Model
{
    public $table = 'menu';
    public function readMenu()
    {
        $menu=Cache::get('menu');
        if($menu)
        {
            return $menu;
        }
        $menu = $this->all();
        Cache::put('menu',$menu,10);
        return $menu;
    }
    public function readTopMenu(){
        $menu = DB::table('menu')
            ->orderBy('level','asc')
            ->where('parentId','=',0)
            ->get();
        return $menu;
    }
}
