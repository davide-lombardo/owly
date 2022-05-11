<nav class="flex justify-between items-center mb-4">
    <h1 class="font-bold text-3xl ml-5">
        <a href="/"><i class="ml-3 fa-solid fa-graduation-cap"></i>
            Owly
        </a>
    </h1>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth
        <li>
            <span class="font-bold uppercase">
                Welcome {{auth()->user()->name}}
            </span>
        </li>
        <li>
            <a href="/courses/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Courses</a>
        </li>
        <li>
            <form class="inline" method="POST" action="/logout">
                @csrf
                <button type="submit">
                    <i class="fa-solid fa-door-closed"></i> Logout
                </button>
            </form>
        </li>
        @else
        <li>
            <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
        </li>
        <li>
            <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
        </li>
        @endauth
    </ul>
</nav>