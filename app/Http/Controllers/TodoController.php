<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Controllers\TodoController;

class TodoController extends Controller
{
    public function NewTodo(Request $request){
        $todo = Todo::where('todo', '=', $request->input('todo'))->first();
        
        if($todo === null){  //ToDo List does not exist  
            $todo = new todo;
            $todo->todo = $request->todo;
            $todo->save();                          
            return redirect('/')->with('success', 'New To-Do Added Successfully!');
        }
        else{
            //task exists
            return redirect('/')->with('error', 'To-Do Already Exists.');
        }
    }
    public function ShowList(Request $id){
        $todo = todo::all();
        return view('pages.list',compact('todo'));
    }
    public function DeleteTodo($id){
        $todo = todo::find($id)->delete();
        return redirect('/ShowList')->with('success', 'To-Do deleted successfully.');
    }
    public function show($id){
        $todo = todo::find($id);
        return view('pages.editTodo')->with('todo', $todo);
    }
    public function EditTodo(Request $request){
        $todo = todo::find($request->id);
        $todo->todo = $request->todo;
        $todo->save();
        return redirect('/ShowList'); 
    }
}
