<?php


namespace App\Services\Actions;


use App\Events\TaskChangeEvent;
use App\Events\TaskDone;
use App\Models\Task;

class TaskServiceAction {
  /**
   * @param Task $task
   * @return $this
   */
  public function saveTask(Task $task): self {
    $task->taskCompleted()->save();

    event(new TaskDone($task));
    event(new TaskChangeEvent());

    return $this;
  }
}