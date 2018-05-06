<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//use App\Http\Request;

class NotesController extends Controller
{
    public function index(){
    	
    	$notes = DB::table('notes')->orderBy('id','desc')->get();
    	

    	return view('notes.index',array(
    		"notes"=>$notes
    	));
    }

    public function getNote($id){
        $notes = DB::table('notes')->select('id','title','description')->where('id', $id)->first();

        if(empty($notes)){
            return redirect()->action('NotesController@index');
        }

        return view('notes.note', array(
            'note'=>$notes
        ));
    }

    public function store(Request $request){
        $note = DB::table('notes')->insert(array(
            'title' => $request->input('title'),
            'description'=>$request->input('description')
        ));

        return redirect()->action('NotesController@index')->with('status', 'Note Added!');;
    }

    public function getSaveNote(){
        return view('notes.saveNote');
    }

    public function destroy($id){
        $notes = DB::table('notes')->where('id', $id)->delete();

        return redirect()->action('NotesController@index')->with('status', 'Note deleted!');
    }

    public function update($id, Request $request){
        $note = DB::table('notes')->where('id', $id)->update(array(
            'title'=>$request->input('title'),
            'description'=>$request->input('description')
        ));

        return redirect()->action('NotesController@index')->with('status', 'Note updated!!');
    }

    public function edit($id){
        $note = DB::table('notes')->where('id', $id)->first();

        return view('notes.saveNote',array(
            'note'=>$note
        ));

    }
}
