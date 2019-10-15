<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    protected $guarded = [];
    protected $table = 'fish';
    protected $fillable = ['animals_id', 'image', 'genus', 'information'];

    public function animals(){
        return $this->belongsTo(Animals::class,
        'animals_id',
        'id'
    );
    }
}
