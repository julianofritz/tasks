<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Company;
use App\Module;
use App\Status;
use App\Task;
use App\TaskStatus;
use App\TaskType;
use App\User;
use Illuminate\Http\Request;
use TwigBridge\Facade\Twig;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('removed', false)->get();

        return \View('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'companies' => Company::all(),
            'channels'  => Channel::all(),
            'modules'   => Module::all(),
            'users'     => User::all(),
            'taskTypes' => TaskType::all(),
        ];

        return view('task.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'user_name' => 'required',
            'description' => 'required',
        ]);

        $task               = new Task();
        $task->title        = $request->title;
        $task->company_id   = $request->company_id;
        $task->channel_id   = $request->channel_id;
        $task->module_id    = $request->module_id;
        $task->user_id      = $request->user_id;
        $task->date         = date('Y-m-d h:i:s');
        $task->user_name    = $request->user_name;
        $task->description  = $request->description;
        $task->task_type_id = $request->task_type_id;
        $task->save();

        $taskStatus              = new TaskStatus();
        $taskStatus->status_id   = 1;
        $taskStatus->task_id     = $task->id;
        $taskStatus->user_id     = $request->user_id;
        $taskStatus->date        = date('Y-m-d h:i:s');
        $taskStatus->save();

        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'task'          => Task::findOrFail($id),
            'statusHistory' => TaskStatus::where('task_id', $id)->get(),
        ];

        return \View('task.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id);

        $data = [
            'companies' => Company::all(),
            'channels'  => Channel::all(),
            'modules'   => Module::all(),
            'users'     => User::all(),
            'taskTypes' => TaskType::all(),
            'status'    => Status::all(),
            'task'      => $task,
        ];

        return Twig::render('task.edit', compact('data'));
        
        //return view('task.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'user_name' => 'required',
            'description' => 'required',
        ]);

        $task = Task::findOrFail($id);
        $task->title                = $request->title;
        $task->company_id           = $request->company_id;
        $task->channel_id           = $request->channel_id;
        $task->module_id            = $request->module_id;
        $task->user_id              = $request->user_id;
        $task->date                 = date('Y-m-d h:i:s');
        $task->user_name            = $request->user_name;
        $task->description          = $request->description;
        $task->solution_description = $request->solution_description;
        $task->task_type_id         = $request->task_type_id;
        $task->save();

        $taskStatus              = new TaskStatus();
        $taskStatus->status_id   = $request->status_id;
        $taskStatus->task_id     = $task->id;
        $taskStatus->user_id     = $request->user_id;
        $taskStatus->date        = date('Y-m-d h:i:s');
        $taskStatus->save();

        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        $task = Task::findOrFail($id);
        $task->removed = 1;

        $task->save();

        return redirect()->route('task.index');
    }
}
