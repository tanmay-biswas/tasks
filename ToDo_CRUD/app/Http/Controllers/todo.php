<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\todos;


class todo extends Controller
{
    function index()
    {
        $todos=todos::get();
        return view('todo_list',compact('todos'));
    }
    function add()
    {
        
        return view('todo.add');
    }
    function store(Request $request){
        $todo=array();
        $todo['Id'] = $request['id'];
        $todo['name'] = $request['name'];
        $todo['email'] = $request['email'];
        
        todos::insert($todo);
        return redirect()->route('todolist');

    }


    function view( Request $request ,$id) {
        $todos=todos::findOrFail($id);
        return view('todo.view',compact('todos'));

    }

    function edit(Request $request ,$id) {
        $todos=todos::findOrFail($id);
        return view('todo.edit',compact('todos'));
    }

    function update(Request $request) {
        $id=$request->id;
        $todos=todos::findOrFail($id);

        $todos->emId = $request->id;
        $todos->month = $request->name;
        $todos->working_days = $request->email;
        

        $todos->save();
        return redirect()->route('todo_list');
        

    }

    function delete($id) {
        todos::destroy($id);
       return redirect()->route('todo_list');
    }

}
