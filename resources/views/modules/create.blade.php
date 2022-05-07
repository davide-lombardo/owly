<x-layout>
    <div class="text-center my-5">
        <h1 class="title">Create a new module</h1>
    </div>
    

    <form method="POST" action="/modules" class="section">
        @csrf

        <div class="columns">
            <div class="column is-4 is-offset-4">
                <div class="field">
                    <label class="label" for="name">Name</label>
        
                    <div class="control">
                        <input 
                            type="text" 
                            name="name" 
                            placeholder="Module name" 
                            required
                            class="input {{ $errors->has('name') ? 'is-danger' : ''}}"
                            value={{ old('name') }} 
                        >
                    </div>
                </div>      
            
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-link">Create Module</button>
                    </div>
                </div>
            </div>
        </div>
        
        @include('errors')
    </form>
</x-layout>

    
