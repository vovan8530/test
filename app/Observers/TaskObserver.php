<?php

namespace App\Observers;

use App\Events\TaskChangeEvent;

class TaskObserver {
  /**
   * Handle the Task "created" event.
   *
   * @return void
   */
  public function created() {
    event(new TaskChangeEvent());
  }

  /**
   * Handle the Task "deleted" event.
   *
   * @return void
   */
  public function deleted() {
    event(new TaskChangeEvent());
  }
}
