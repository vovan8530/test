<?php

namespace App\Models\Mixins;


trait TaskMixin {
  /**
   * @return $this
   */
  public function taskCompleted(): self {
    $this->is_active = false;
    return $this;
  }
}