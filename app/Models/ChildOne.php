<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildOne extends Person
{
    use HasFactory;

    function name(){
        return 'my name is amin Im the first child';
    }

}
