<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function todolist()
    {
        $todos=Post::all();
        return view('todos.todo')->with('todo', $todos);
    }

    public function detail($id)
    {
        $todo=Post::find($id);
        return view('todos.detail')->with('todo',$todo);
    }

    public function create()
    {
        return view('todos.create');
        session()->flash('success','Todo is succefully created');
    }
    public function store()
    {

        $validate= request()->validate([
            'name'=> 'required',
            'description'=>'required',
        ]);
        
        $data =request()->all();

        $post= new Post;
        $post->name =$data['name'];
        $post->description = $data['description'];
        $post->completed = false;
        $post->save();
        session()->flash('success'," $post->name is sucessfully Created!!");
        return redirect('/todolist');
    }

    public function edit(Post $id)
    {
        return view('todos.edit')->with('todo', $id);
    }

    public function update(Post $id)
    {
        $data= request()->all();

        $id->name = $data['name'];
        $id->description = $data['description'];
        $id->completed = false;
        $id->save();
        session()->flash('success'," $id->name is successfully updated!!");
        return redirect('/todolist');
    }

    public function delete(Post $id)
    {
        $id->delete();
        session()->flash('success'," $id->name is deleted!!");
        return \redirect('/todolist');
    }

    public function complete(Post $id)
    {
        $data = request()->all();

        $id->completed = true;
        $id->save();
        session()->flash('success', "$id->name is Completed.");

        return back();
    }
}
