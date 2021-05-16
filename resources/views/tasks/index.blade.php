<?php
/* @var \App\Models\Task[] $tasks */
?>

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('TODO List') }}
    </h2>
  </x-slot>

  <!-- component -->
  <div class="text-gray-900 bg-gray-200">
    <div class="px-3 py-4 flex justify-center">
      <table class="w-full text-md bg-white shadow-md rounded mb-4">
        <tbody>
        <tr class="border-b">
          <th class="text-left p-3 px-2">№</th>
          <th class="text-left p-3 px-5">Задача</th>
          <th></th>
        </tr>
        @foreach($tasks as $task)
          <tr class="border-b hover:bg-orange-100 bg-gray-100">
          <td class="p-3 px-5">{{$loop->index + 1}}</td>
          <td  class="p-3 px-5  @if(!$task->is_active) text-decoration: line-through @endif">{{$task->description}}</td>
          <td class="p-3 px-5">
            @if($task->is_active)
            <td class="flex justify-end">
                <button onclick="window.location='{{route('taskDone', ['task' => $task])}}'" type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Сделано</button>
            </td>
            @else()
              <form action="{{route('tasks.destroy', ['task' => $task])}}" method="POST">
                @method('DELETE')
                @csrf
              <td  class=" px-4 flex justify-end">
                <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Удалить</button>
              </td>
              </form>
            @endif
          </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <form class="w-full max-w-lg" action="{{route('tasks.store')}}" method="POST">
    @csrf
    <div class="md:flex md:items-center mb-6">
      <div class="md:w-1/3">
        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
            New task
        </label>
      </div>
      <div class="md:w-2/3">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
               id="inline-full-name"
               name="description"
               type="text"
               required
               value="Новая задача">
      </div>
    </div>
    <div class="md:flex md:items-center">
      <div class="md:w-1/3"></div>
      <div class="md:w-2/3">
        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
          Добавить
        </button>
      </div>
        </div>
      </form>

</x-app-layout>
