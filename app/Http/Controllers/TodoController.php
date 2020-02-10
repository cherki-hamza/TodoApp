<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return view('todos.index' , compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        // validate data method 1
        $validator = $request->validate([
           'title' => 'required|min:3',
           'description' => 'required|min:3',
        ]);

// validator data method 2
//        $validator = Validator::make($request->all() , [
//            'title' => 'required|min:3',
//            'description' => 'required|min:3',
//        ]);

//        if ($validator->fails()){
//            //return back()->with('errors' , $validator->getMessageBag()->all()[0]->withInput();
//            return back()->with('toast_error' , $validator->getMessageBag()->all())->withInput();
//        }

//        $this->validate($request , [
//            'title' => 'required|min:3',
//            'description' => 'required|min:3',
//        ]);

        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->save();
        //return redirect()->route('todos.index')->with('success' , 'the todo created with success');
        return redirect()->back()->with('success' , 'the todo created with success');
    }


    public function show(Todo $todo)
    {
        $todo = Todo::find($todo)->first();
        return view('todos.show2' , compact('todo'));

    }


    public function edit(Todo $todo)
    {
       $todo = Todo::find($todo)->first();
       return view('todos.edit' , compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        // validation
        $validator = $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:3',
        ]);

        // find by id
        $todo = Todo::find($todo)->first();

        // save the new update
        $todo->title = $request->input('title');
        $todo->description = $request->input('description');
        $todo->save();
        // redirect message
        return redirect()->route('todos.index')->with('success' , 'the todo updated with success');
    }

    public function destroy(Todo $todo)
    {
        $todo = Todo::find($todo)->first();
        $todo->delete();
        session()->flash('success' , 'the todo deleted with success');
        return redirect()->back();
        //return redirect()->back()->with('success' , 'the todo deleted with success');
    }
}
