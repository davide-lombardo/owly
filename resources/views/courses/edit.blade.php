<x-layout>

    <div class="text-center my-5">
        <h1 class="title">Edit Course</h1>
    </div>
    
    <form method="POST" action="/courses/{{ $course->id }}" class="section">
        @method("PUT") 
        @csrf

        <div class="columns">
            <div class="column is-4 is-offset-4">
                <div class="field">
                    <label class="label" for="name">Name</label>
                    
                    <div class="control">
                        <input 
                            type="text" 
                            name="name" 
                            placeholder="Course name"
                            required
                            class="input {{ $errors->has('name') ? 'is-danger' : ''}}"
                            value={{ old('name') }} 
                        >
                    </div>
                </div>
        
                <div class="field">
                    <label class="label" for="available_spots">Available Spots</label>
                    
                    <div class="control">
                        <input 
                            type="number" 
                            name="available_spots" 
                            placeholder="Available Spots"
                            min="0" 
                            class="input {{ $errors->has('available_spots') ? 'is-danger' : ''}}"
                            value={{ old('available_spots') }} 
                            required
                        >
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="modules">Modules</label>
        
                    <div class="control">
                        @foreach (\App\Models\Module::all() as $module)
                            <div class="grid grid-cols-2">
                                <span>{{ ucfirst($module->name) }}</span>
                                <div class="col-span-1">
                                    <input
                                        type="checkbox" 
                                        name="modules[]"
                                        id="module"
                                        class="w-5 h-5 border-gray-300 rounded" 
                                        value="{{ $module->name }}"
                                        @if ( in_array('module', old('modules', [])))
                                            checked
                                        @endif
                                    >
                                </div>
                            </div>
                        @endforeach 
                    </div>
                </div>
        
        
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Update Course</button>
                    </div>
                </div>
            </div>
        </div> 
        @include('errors')   
    </form>

</x-layout>