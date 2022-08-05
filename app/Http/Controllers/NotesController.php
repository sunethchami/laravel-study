<?php

namespace App\Http\Controllers;

use App\Note;
use App\Card;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card){
                
        $this->validate($request, [
           'body' => 'required|min:10' 
        ]);
        
        $note = new Note;
        
        $note->body = $request->body;
        $note->user_id = 1;
//        $note->card_id = $card->id;
//        $note->save();
        
        $card->notes()->save($note);
        
        return back();
        
    }
    
    public function edit(Note $note) {
        
        return view('notes.edit')->with('note',$note);
        
    }
    
    public function update(Request $request, Note $note) {
        
        $note->update($request->all());
        
        return back();
        
    }
}
