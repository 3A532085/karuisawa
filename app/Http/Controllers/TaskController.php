<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\TaskRepository;




class TaskController extends Controller
{
    /**
     * 建立一個新的控制器實例。
     *
     * @return void
     */
    /**
     * 任務資源庫的實例。
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * 建立新的控制器實例。
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');
        $this->tasks = $tasks;
    }

    /**
     * 顯示使用者所有任務的清單。
     *
     * @param  Request  $request
     * @return Response
     */
    public function index()
    {
//        $tasks = Task::where('user_id', $request->user()->id)->get();
        $tasks = Task::orderby('user_id')->get();
        $total = $tasks->count('user_id');
        $data=['total' => $total];

        return view('tasks.index', $data);
    }

    /**
     * 建立新的任務。
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
//        $this->validate($request, [
//            'name' => 'required|max:255',
//        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
            'people' => $request->people,
            'phone' => $request->phone,
            'store' => $request->store,
            'date' => $request->date,
            'time' => $request->time,
        ]);
        return view('reservationok');

    }

    /**
     * 移除給定的任務。
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */
    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/searchreservation');
    }

    public function ok(Request $request, $id)
    {
        $task=Task::find($id);
        $task->update([
            'status' => $request->status,
        ]);
        return redirect('/allreservation');
    }
}
