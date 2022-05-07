<x-layout>

    <div class="has-text-centered">
        <h1 class="title">Edit Course</h1>
    </div>
    
    <form method="POST" action="/courses/{{ $course->id }}" style="margin-bottom: 10px">
        @method("PATCH") 
        @csrf

        <div class="columns">
            <div class="column is-4 is-offset-4">
                <div class="field">
                    <label for="name" class="label">Name</label>
                    
                    <div class="control">
                        <input 
                            type="text"
                            name="name"  
                            class="input" 
                            placeholder="Name" 
                            required
                            value={{ $course->name }}
                        >
                    </div>
                </div>
        
                <div class="field">
                    <label for="name" class="label">Available Spots</label>
                    
                    <div class="control">
                        <input 
                            type="number" 
                            class="input" 
                            placeholder="Available Spots"
                            min="0"  
                            value={{ $course->availableSpots }}
                        >
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="modules">Modules</label>
        
                    <div class="control">
                        @foreach ($modules as $module)
                            <tr>
                                <th>{{ ucfirst($module->name) }}</th>
                                <td>
                                    <input
                                        type="checkbox" 
                                        name="modules[]"
                                        id="module" 
                                        value="{{ $module->name }}"
                                        @if ( in_array('module', old('modules', [])))
                                            checked
                                        @endif
                                    >
                                </td>
                            </tr>
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
    </form>

</x-layout>