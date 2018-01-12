<!-- Static navbar -->
<div class="navbar navbar-default navbar-fixed-top"  role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}">Virtual Store</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="{{ url('/product') }}">Products</a>
				</li>
				<li>
					<a href="{{ url('/contact') }}">Contact</a>
				</li>
				<li>
					<a href="{{ url('/about') }}">About</a>
				</li>
				<li>
					<a href="{{ url('/create') }}">Add Product</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					@guest
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">User
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{ route('login') }}">Login</a>
						</li>
						<li>
							<a href="{{ route('register') }}">Register</a>
						</li>
					</ul>
					@else
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
								Logout
							</a>
						</li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</ul>
					@endguest

				</li>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>