<table class="mb-20 w-full text-sm text-left text-gray-500 dark:text-gray-400 text-center">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-400 dark:text-gray-800">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Modules
            </th>
            <th scope="col" class="px-6 py-3">
                Available Spots
            </th>
            <th scope="col" class="px-6 py-3">
                Edit
            </th>
            <th scope="col" class="px-6 py-3">
                Delete
            </th>
        </tr>
    </thead>
    <tbody>

        @foreach ($courses as $course)
            <tr class=" border-b dark:border-gray-700 even:dark:bg-gray-800 odd:dark:bg-gray-900">
                <th scope="row" class="px-6 py-4 font-medium text-gray-400 dark:text-white whitespace-nowrap">
                    {{ ucfirst($course->name) }}
                </th>
                <td class="px-6 py-4">
                    @foreach ($modules as $module)
                        {{ $course->id === $module->id ? ucfirst($course->modules) : null }}
                    @endforeach
                </td>
                <td class="px-6 py-4">
                    {{ ucfirst($course->available_spots) }}
                </td>
                <td class="px-6 py-4">
                    <button class="table-btn px-4 py-2 text-black border rounded">
                        <a href="/courses/{{ $course->id }}/edit">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </button>
                </td>
                <td class="px-6 py-4">
                    <form action="courses/{{ $course->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button
                            type="submit" 
                            class="table-btn px-4 py-2 text-black border rounded"
                        > <i class="fa-solid fa-trash"></i>
                        </button> 
                    </form>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>