<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                @if (Route::has('login'))
                    <div class="nav">
                        @auth
                            <a class="nav-link" href="{{ url('/') }}">@lang('messages.home') </a>
                            <a class="nav-link" href="{{ url('/SP') }}">@lang('messages.sc')</a>
                            <a class="nav-link" href="{{ url('/admin') }}">@lang('messages.admin')</a>
                            <a href="/profile" class="nav-link ">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar}}" class="avatar1">
                                {{ Auth::user()->name }}
                            </a>

                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                @lang('messages.logout')
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <a class="nav-link" href="/">@lang('messages.home')</a>
                            <a class="nav-link" href="{{ url('/SP') }}">@lang('messages.sc')</a>
                            <a class="nav-link ml-auto" href="{{ route('login') }}">@lang('messages.login')</a>
                            <a class="nav-link ml-auto" href="{{ route('register') }}">@lang('messages.register')</a>
                        @endauth
                    </div>
                @endif

            </nav>
        </div>
    </div>
</header>


