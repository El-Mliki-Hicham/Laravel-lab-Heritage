<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'people';
    protected $fillable = [
        'name',
        'gender',
        'child_type',
    ];


    public function setTypeAttribute($value)
    {
        if ($value == 'childTwo') {
            $this->attributes['child_type'] = 'childTwo';
        } elseif ($value == 'childOne') {
            $this->attributes['child_type'] = 'childOne';
        } else {
            $this->attributes['child_type'] = null;
        }
    }
}
