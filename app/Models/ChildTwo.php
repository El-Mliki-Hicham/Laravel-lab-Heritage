<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildTwo extends Person
{
    use HasFactory;
    function name(){
        return 'my name is amal Im the second child';
    }
}
