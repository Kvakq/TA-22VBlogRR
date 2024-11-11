<div class="navbar bg-gray-800 p-6 text-lg shadow-md">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden text-lg text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-gray-800 rounded-lg mt-4 w-64 p-4 shadow-md">
                <li><a class="text-gray-300 hover:text-gray-100">Item 1</a></li>
                <li>
                    <a class="text-gray-300 hover:text-gray-100">Parent</a>
                    <ul class="p-2">
                        <li><a class="text-gray-300 hover:text-gray-100">Submenu 1</a></li>
                        <li><a class="text-gray-300 hover:text-gray-100">Submenu 2</a></li>
                    </ul>
                </li>
                <li><a class="text-gray-300 hover:text-gray-100">Item 3</a></li>
            </ul>
        </div>
        <a href="{{route('home')}}" class="text-2xl font-bold text-primary hover:text-gray-100">LaravelRR</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-3">
            <li><a href="{{route('home')}}" class="text-gray-300 hover:text-gray-100">Home</a></li>
            <li>
                <details>
                    <summary class="text-gray-300 hover:text-gray-100">Admin</summary>
                    <ul class="p-2">
                        <li><a class="text-gray-300 hover:text-gray-100">Posts</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>
    <div class="navbar-end">
        <ul class="menu menu-horizontal px-3 gap-3">
            <li><a href="{{route('register')}}" class="btn btn-primary bg-gray-700 hover:bg-gray-600 text-gray-300 px-6 py-2 rounded-md shadow-md">Register</a></li>
            <li><a href="{{route('login')}}" class="btn btn-secondary bg-gray-600 hover:bg-gray-500 text-gray-300 px-6 py-2 rounded-md shadow-md">Login</a></li>
        </ul>
    </div>
</div>
