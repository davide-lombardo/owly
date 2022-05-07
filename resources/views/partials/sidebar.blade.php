<nav class="sidebar shadow-md">

    <div class="flex items-center justify-between px-5 py-3 bg-gray-100 lg:hidden">
        <span class="text-sm font-medium">
            Toggle Filters
        </span>

        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </div>

    <form
        method="GET"
        action="/"
        class="border-t border-gray-200 lg:border-t-0"
    >
        @csrf

        <fieldset>
            <legend class="block w-full px-5 py-3 text-xs font-medium bg-gray-50">
                Module
            </legend>

            <div class="px-5 pb-6 space-y-2">
                @foreach ($modules as $module)

                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            name="modules[]"
                            class="w-5 h-5 border-gray-300 rounded"
                            value="{{ $module->name }}"
                        />
                        <label
                            class="ml-3 text-sm font-medium"
                        >
                            {{ ucfirst($module->name) }}
                        </label>
                    </div>
                    
                @endforeach
  
                <div class="pt-2">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold  py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-2"
                        type="submit"
                    > 
                        Filter
                    </button>
                    <button
                        type="button"
                        class="text-xs text-gray-500 underline"
                    >
                        Reset Module
                    </button>
                </div>
            </div>
        </fieldset>

       
    </form>
</nav>