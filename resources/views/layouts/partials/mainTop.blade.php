<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
                <div class="login-box">
                    @guest
                    @if (Route::has('login') && Route::has('register'))
                    <h4><a href="/sign-in" class="text-white">Sign In &emsp;</a><a href="/sign-up"
                            class="text-white">Sign Up</a></h4>
                    @endif
                    @else

                    <li class="nav-item dropdown">
                                <!-- <h4><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="{{ route('home') }}" class="text-white">
                                {{ Auth::user()->name }}
                                </a></h4> -->
                                <h4><a href="{{ route('home') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" class="text-white nav-link dropdown-toggle"  >{{ Auth::user()->name }}</a></h4>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            My Profil
                                        </a>
                                    </li>
                                    <li>
                                    <a style="color: #ffff" id="logout-btn" class="btn btn-sm btn-denger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                                    </li>
                                 
                                </ul>
                            </li>

                    <!-- <h4><a href="{{ route('home') }}" class="text-white">{{ Auth::user()->name }}</a></h4> -->
                    <!-- <a style="color: #ffff" id="logout-btn" class="btn btn-sm btn-denger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a> 
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form> -->
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>