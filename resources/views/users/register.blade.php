<x-layout>
    <form method="POST" action="/users" class="section">
        @csrf
    
        <div class="columns">
           <div class="column is-4 is-offset-4">
                <div class="field">
                    <label class="label" for="name">Name</label>
                    <div class="control">
                        <input 
                            class="input" 
                            type="text" 
                            placeholder="Your Full Name" 
                            name="name"
                            value="{{ old('name') }}"
                        >
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="email">Email</label>
                    <div class="control">
                        <input 
                            class="input" 
                            type="email" 
                            placeholder="Your Email"
                            name="email" 
                            value="{{ old('email') }}"
                        >
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="password">Password</label>
                    <div class="control">
                        <input 
                            class="input" 
                            type="password" 
                            placeholder="Your Password" 
                            name="password"
                            value="{{ old('password') }}"
                        >
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="password_confirmation">Confirm Password</label>
                    <div class="control">
                        <input 
                            class="input" 
                            type="password" 
                            placeholder="Confirm Password" 
                            name="password_confirmation"
                            value="{{ old('password_confirmation') }}"
                        >
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <p>
                           <a href="/login">Already have an account?</a> 
                        </p>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">Submit</button>
                    </div>
                </div>
                @include('errors')
           </div>
        </div>
     </form>    
</x-layout>
