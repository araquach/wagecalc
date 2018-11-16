<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Wage Calculator') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <section id="app" class="section">
        
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">
                      <h1 class="title">Wage Calculator</h1>
                    </a>
                </div>

                  <div class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="{{ url('/home') }}">Home</a>

                      <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                          More
                        </a>
                        @if (Route::has('login'))
                        <div class="navbar-dropdown">
                                @auth
                                  <a class="navbar-item" href="{{ url('/staff') }}">Staff</a>
                                  <a class="navbar-item" href="{{ url('/calculate') }}">Calculate</a>
                                  <a class="navbar-item" href="{{ url('/staff/create') }}">Add Staff Member</a>          
                                    
                                @else
                                    <a href="{{ route('login') }}">Login</a>
                                    <a href="{{ route('register') }}">Register</a>
                                @endauth
                            @endif
                          </div>
                      </div>
                    </div>

                    <div class="navbar-end">
                      <div class="navbar-item">
                        <div class="buttons">
                          @if (Auth::guest())
                            <a class="button is-primary" href="{{ route('register') }}">
                                <strong>Register</strong>
                            </a>
                            <a class="button is-light" href="{{ route('login') }}">Login</a>
                          @else
                            <a class="button is-dark" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
    
                            @endif
                        </div>
                      </div>
                    </div>
                  </div>
            </nav>
            
            <main>
                @yield('content')
            </main>
                    
        </section>
    </body>
</html>
