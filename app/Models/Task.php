<?php

namespace App\Models;

use App\Models\Mixins\TaskMixin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Task
 * @package App\Models
 *
 * @property integer $id
 * @property string $description
 * @property bool $is_active
 */
class Task extends Model {
  use HasFactory, TaskMixin;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'description',
    'is_active',
  ];
}
