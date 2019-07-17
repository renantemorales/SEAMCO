<ul class="navbar-nav ml-auto">
    @auth
        <li class="nav-item">
            <a href="{{route('todos.index')}}" class="nav-link">Todos</a>
        </li>
        <li class="nav-item">
            <a href="{{route('todos.create')}}" class="nav-link">New Todo</a>
        </li>
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('home')}}">
                    Dashboard
                </a>
                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @else
        <li class="nav-item">
            <a href="{{route('login')}}" class="nav-link">Login</a>
        </li>
        <li class="nav-item">
            <a href="{{route('register')}}" class="nav-link">Register</a>
        </li>
    @endauth
</ul>