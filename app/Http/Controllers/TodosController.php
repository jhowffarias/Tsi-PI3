<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;


class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }
    public function show($todoId)
    {
        return view('todos.show')->with('todos', Todo::find($todoId));
    }
    public function create(){
        return view('todos.create');
    }
    public function store(Request $request){
        $todo = new Todo();
        $validatedData = $request->validate([
        $todo->name = ['required'],
        $todo->description = ['required'],
        ]);
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');

    }
    public function destroy($todoId){
        $todo = Todo::find($todoId);
        $todo->delete();

        return redirect('/todos');
    }
    public function edit($todoId){

        return view('todos.edit')->with('todos', Todo::find($todoId));

    }
    public function update($todoId){
        $data = request()->all();
        $todo = Todo::find($todoId);

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');


    }
}
