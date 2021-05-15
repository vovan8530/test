<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

# TODO: #### TASKS ####

Route::group(['middleware' => 'auth'], function () {

  Route::resource('tasks', TaskController::class);
  Route::get('/taskDone/{task}', [TaskController::class, 'taskDone'])->name('taskDone');

});

# TODO: #### TASKS ####

require __DIR__.'/auth.php';
