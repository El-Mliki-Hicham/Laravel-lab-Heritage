<?php

namespace App\Http\Controllers;

use App\Models\ChildOne;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    function storeChild(){
        $childOne = new ChildOne();
        $childOne->name = 'amina';
        $childOne->gender = 'Female';
        $childOne->save();
        return view("welcome");
     }
}
