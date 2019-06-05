<nav class="navbar navbar-expand-md navbar-laravel">
    <div class="container">
        <div class="col-md-3">
	        <a class="navbar-brand collapse navbar-collapse" href="{{ url('/') }}">
	        <!-- Imagen del logo  -->
	            <img src="/images/Find.MI.png" alt="Logo de Find.MI" height="65" width="95">
	        </a>
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
	            <span class="navbar-toggler-icon"></span>
	        </button>
        </div>
        <div class="col-md-6">
        	@include('partials.search')
        </div>
        
        <div class="col-md-3">

	        <div class="navbar-brand" id="navbarSupportedContent">
	            <!-- Left Side Of Navbar -->
				@guest
					<div class="btn-group" role="group" aria-label="Basic example">
						<a type="button" class="btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a>
						@if (Route::has('register'))
							<a type="button" class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
						@endif
					</div>
				@else
		            <!-- Right Side Of Navbar -->
		            <ul class="navbar-nav ml-auto">
	                <!-- Authentication Links -->
	                    <li class="nav-item dropdown">
	                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                            {{ Auth::user()->name }} <span class="caret"></span>
	                        </a>

	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

	                            <a class="dropdown-item" href="{{ url('/home') }}">Home
	                            </a>
	                            
	                            <a class="dropdown-item" href="{{ url('/profile') }}">Profile
	                            </a>

	                            @if(Auth::user()->user_type == 'provider')
	                            	<a class="dropdown-item" href="{{ route('my_company') }}">My company
	                            </a>

	                            <a class="dropdown-item" href="{{ route('my_products') }}">My products
	                            </a>
	                            @endif

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
		            </ul>
	            @endguest
	        </div>
        </div>
    </div>
</nav>