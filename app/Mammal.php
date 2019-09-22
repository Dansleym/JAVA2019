<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mammal extends Model
{
    protected $table = 'mammals';
    protected $fillable = ['image', 'genus', 'information'];
}
