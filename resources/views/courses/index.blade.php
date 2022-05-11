<x-layout>
    <div class="text-center my-5">
        <h1 class="title">Courses List</h1>
    </div>

    <div class="relative lg:inline-flex bg-gray-100 rounded-xl mb-5 ">
        <x-module-dropdown />
    </div>

    @include('partials.courses_table')

    {{ $courses->links()}}
</x-layout>

