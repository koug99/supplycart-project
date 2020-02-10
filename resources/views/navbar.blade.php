<nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a class="navbar-brand" href="/">{{config('app.name','Supplycart Products Test')}}</a>
    <div class='divider-line'> </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <!--Left Side-->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/products">Products <span class="sr-only">(current)</span></a>
          </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item active">
                    <div class='nav-link'>Welcome, {{ Auth::user()->name }}!<span class="sr-only">(current)</span></div>
              </li>
              <hr>
              <!--Logout-->
              <li class="nav-item">
                <a class='btn btn-light' href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
                </form>
              </li>              
          @endguest
      </ul>
    </div>
  </nav>




 