<?php

namespace App\Listeners;

use App\Events\TaskDone;
use App\Notifications\TaskDoneNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class NotifyAdminTaskDone {
  /**
   * Create the event listener.
   *
   * @return void
   */
  public function __construct() {
    //
  }

  /**
   * Handle the event.
   *
   * @param TaskDone $event
   * @return void
   */
  public function handle(TaskDone $event) {
    $admin = config('mail.from.address');
    Notification::route('mail', $admin)->notify(new TaskDoneNotification($event->task));
  }
}
