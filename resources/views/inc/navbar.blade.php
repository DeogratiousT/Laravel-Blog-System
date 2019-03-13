<nav class="fixed">
    <div class="row">
        <div class="col-md-4 col-sm-4">
            <a class="navbar-brand">
                <img src="storage/images/logo.png" alt="My Logo" style="height: 60px; margin: 25% 80%;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-md-8 col-sm-8" id="navbarsExampleDefault">
            <ul class="navul">
                <li class="navli">
                    <a href="/">HOME <span class="sr-only">(current)</span></a>
                </li>        
                <li class="navli">
                    <a href="/about">ABOUT</a>
                </li>
                <li class="navli">
                    <a href="/services">SERVICES</a>
                </li>
                <li class="navli">
                        <a href="/posts">BLOG</a>
                </li>
            </ul>                
                
            <ul class="navulright">
                <!-- Authentication Links -->
                @guest
                    <li class="navliright">
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="navliright">
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="navliright" style="float:left;">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                                                    
                        <ul class="navuldropdown">
                            <li class="navuldropdownli"><a href="/dashboard" >Dashboard</a></li>
                            <li class="navuldropdownli"><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

