<?php
/**
 * Created by PhpStorm.
 * User: c1oud
 * Date: 2018/2/25
 * Time: 17:59
 */
function getMenu(){
//    $users = DB::select('select * from menu');
    $users[0]['menuName']=1;
    $users[1]['menuName']=1;
    return $users;
}