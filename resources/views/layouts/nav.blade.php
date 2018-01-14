<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                @if (Route::has('login'))
                    <div class="nav">
                        @auth
                            <a class="nav-link active" href="{{ url('/') }}">Home</a>
                            <a class="nav-link" href="{{ url('/SP') }}">Visas SP</a>
                            <a class="nav-link" href="{{ url('/admin') }}">Admini</a>
                            <a href="#" class="nav-link ">
                                {{ Auth::user()->name }}
                            </a>

                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <a class="nav-link active" href="/">Sākums</a>
                            <a class="nav-link" href="{{ url('/SP') }}">Visas SP</a>
                            <a class="nav-link ml-auto" href="{{ route('login') }}">Ienākt</a>
                            <a class="nav-link ml-auto" href="{{ route('register') }}">Reģistrēties</a>
                        @endauth
                    </div>
                @endif

            </nav>
        </div>
    </div>
</header>


