<?php

namespace App\Http\Controllers;

use DB;
use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index() {
        
        //$cards = DB::table('cards')->get();
        $cards = Card::all();
        
        //dd($cards);
        
        return view('cards.index')->with('cards',$cards);
    }
    
    public function show(Card $card) {
        
      // $notes = DB::table('notes')->where('card_id',$card->id)->get();
        
        //$card = Card::with('notes.user')->find(1);
        
       $card->load('notes.user');
       
       return view('cards.show')->with('card',$card);
        
    }
    
}
