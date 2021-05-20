<?php

namespace App\Http\Controllers;

use App\Models\SubTask;
use Illuminate\Http\Request;

class SubTaskController extends Controller
{
    public function store(Request $req)
    {
        $subTask=New SubTask();
        $subTask->content=$req->content;
        $subTask->task_id=$req->task_id;
        $subTask->save();
       session()->flash('message','task added successfully');

        return redirect('/');
    }

    public function delete($id)
    {
       SubTask::find($id)->delete();
       session()->flash('message','task deleted successfully');

       return redirect('/');
    }

    public function update(Request $req,$id)
    {
        $task=SubTask::find($id);
        $task->content=$req->content;
        $task->update();

        session()->flash('message','task updated successfully');

        return back();
    }
}
