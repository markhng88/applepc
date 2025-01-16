<header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{url('redirect')}}"><img width="250" src="images/logo.jpg" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">

                        @if (Route::has('login'))

                        @auth
                        <li class="nav-item">
                           <a class="nav-link" href="{{url('appointment')}}">Purchase</a>
                        </li>

                        <li class="nav-item">
                           <a class="nav-link" href="{{url('myappointment')}}">My Cart</a>
                        </li>
                        
                        <li class="nav-item">
                            <x-app-layout>
    
                            </x-app-layout>
                        </li>

                        @else

                        <li class="nav-item">
                           <a class="btn btn-primary" id="logincss" href="{{ route('login') }}">Login</a>
                        </li>

                        <li class="nav-item">
                           <a class="btn btn-secondary" href="{{ route('register') }}">Register</a>
                        </li>
                        @endauth

                        @endif
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>