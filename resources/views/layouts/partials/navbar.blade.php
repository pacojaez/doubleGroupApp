<header class="p-3 text-white bg-dark">
    <div class="container">
        <div class="flex-wrap d-flex align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="mb-2 text-white d-flex align-items-center mb-lg-0 text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="mb-2 nav col-12 col-lg-auto me-lg-auto justify-content-center mb-md-0">
                <li><a href="{{ route('dashboard') }}" class="px-2 text-white nav-link">GESTION DE USUARIOS, ROLES Y
                        PERMISOS</a></li>
                @auth
                    @role('Admin')
                        <li><a href="{{ route('users.index') }}" class="px-2 text-white nav-link">Users</a></li>
                        <li><a href="{{ route('roles.index') }}" class="px-2 text-white nav-link">Roles</a></li>
                    @endrole
                    {{-- <li><a href="{{ route('posts.index') }}" class="px-2 text-white nav-link">Posts</a></li> --}}
                @endauth
            </ul>

            <form class="mb-3 col-12 col-lg-auto mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..."
                    aria-label="Search">
            </form>

            @auth
                {{ auth()->user()->name }}&nbsp;
                <div class="text-end">
                    {{-- <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a> --}}
                </div>
            @endauth

            @guest
                <div class="text-end">
                    <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                </div>
            @endguest
        </div>
    </div>
</header>
