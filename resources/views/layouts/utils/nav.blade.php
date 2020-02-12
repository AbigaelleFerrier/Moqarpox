<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper container">
        <a href="{{ route('main') }}" class="brand-logo">Mouqapox</a>
        <ul class="right hide-on-med-and-down">
            @isAdmin
                <li>
                    <a href="{{route('admin')}}"><i class="fas fa-user-lock"></i></a>
                </li>    
            @endisAdmin

            @isProvider
                <li>
                    <a href="{{route('admin')}}"><i class="far fa-building"></i></a>
                </li> 
            @endisProvider

            @isClient
                <li>
                    <a href="{{route('customer_details')}}"><i class="fas fa-user"></i></a>
                </li> 
            @endisClient


            @guest
                <li>
                    <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li>
                        <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                    </li>
                @endif
            @else
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        Déconnexion
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

                
            @endguest


            
        </ul>
        </div>
    </nav>
</div>
