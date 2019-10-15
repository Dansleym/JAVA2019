<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    protected $guarded = [];
    protected $table = 'animals';
    protected $fillable = ['id', 'animals_class'];

    public function mammal(){
        return $this->hasOne(Mammal::class);
    }
    public function fish(){
        return $this->hasOne(Fish::class);
    }
}
