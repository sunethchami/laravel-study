<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['body'];
    
    public function notes() {
        
        return $this->hasMany(Note::class);
    }
    
    
}
