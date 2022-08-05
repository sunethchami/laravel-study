<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['body'];
    
    public function card() {
        
        return $this->belongsTo(Card::Class);
    }
    
    public function user() {
        
        return $this->belongsTo(User::class);
    }
}
