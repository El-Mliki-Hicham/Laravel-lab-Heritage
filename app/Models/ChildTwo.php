<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildTwo extends Person
{
    use HasFactory;
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->attributes['child_type'] = 'childTwo';
    }
}
