<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use App\Services\Actions\TaskServiceAction;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TaskController extends Controller {
  /**
   * @var TaskServiceAction
   */
  protected $service;

  /**
   * TaskController constructor.
   *
   * @param TaskServiceAction $service
   */
  public function __construct(TaskServiceAction $service) {
    $this->service = $service;
  }

  /**
   * @return View
   */
  public function index(): View {
    $tasks = Task::query()->get();
    return view('tasks.index', [
      'tasks' => $tasks
    ]);
  }

  /**
   * @param TaskRequest $request
   * @param Task $task
   * @return RedirectResponse
   */
  public function store(TaskRequest $request, Task $task): RedirectResponse {
    $task->create($request->all());
    return redirect()->route('tasks.index');
  }

  /**
   * @param Task $task
   * @return RedirectResponse
   */
  public function destroy(Task $task): RedirectResponse {
    $task->delete();
    return redirect()->route('tasks.index');
  }

  /**
   * @param Task $task
   * @return RedirectResponse
   */
  public function taskDone(Task $task): RedirectResponse {
    $this->service->saveTask($task);
    return redirect()->route('tasks.index');
  }
}
