
  <nav class="navbar navbar-expand-lg navbar-light bg-info" style="font-size:20px"> 
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'MAGNAS') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto  ">
             
                <li class="nav-item ml-3 ">
                  <a class="nav-link text-white" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ml-3">
                  <a class="nav-link text-white" href="/about">About</a>
                </li>
                <li class="nav-item ml-3">
                  <a class="nav-link text-white" href="/services">Services</a>
                </li>
                <li class="nav-item ml-3">
                    <a class="nav-link text-white" href="/posts">Blogs</a>
                  </li>
             

            </ul>

            @if (Request::is('/posts'))


            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto ">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="text-decoration:none; font-size:16px ; color:red">
                          <div class="btn btn-danger">{{ __('Login') }}
                  
                        </div></a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" style="text-decoration:none; font-size:16px ; color:red">
                              <div class="btn btn-success">{{ __('Register') }}
                      
                            </div></a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a href="/dashboard" class="dropdown-item">Dashboard</a>
                          
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                          
                        </div>
                    </li>
                @endguest
            </ul>
            @endif
        </div>
    </div>
</nav>