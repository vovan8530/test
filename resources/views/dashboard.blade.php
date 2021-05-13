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
          <th class="text-left p-3 px-5">Задача</th>
          <th></th>
        </tr>
        <tr class="border-b hover:bg-orange-100 bg-gray-100">
          <td class="p-3 px-5"></td>
          <td class="p-3 px-5 flex justify-end">
            <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Сделано</button>
            <button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Удалить</button></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

</x-app-layout>
