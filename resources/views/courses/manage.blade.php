<x-layout>
  <x-card class="p-10">

    <header>
      <h1 class="text-3xl text-center font-bold my-6 uppercase">
        Manage Courses
      </h1>
    </header>
  
    <table class="w-full table-auto rounded-sm">
      <tbody>
        @unless($courses->isEmpty())
        @foreach($courses as $course)
          <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            {{ $course->name }} 
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/courses/{{ $course->id }}/edit" class="text-blue-400 px-6 py-2 rounded-xl">
              <i class="fa-solid fa-pen-to-square"></i> Edit
            </a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <form method="POST" action="/courses/{{ $course->id }}">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-red-500 hover:text-black">
                <i class="fa-solid fa-trash"></i> Delete
              </button>
            </form>
          </td>
          </tr>
        @endforeach
        @else
          <tr class="border-gray-300">
            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
              <p class="text-center">No Courses Found</p>
            </td>
          </tr>
        @endunless
  
      </tbody>
    </table>
  
  </x-card>
</x-layout>



    
