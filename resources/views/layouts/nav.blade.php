<div class="container">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="{{route('welcome')}}">Escudos Futbol</a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					&nbsp;
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li>
							<a href="{{route('getRegister')}}"><i class="fa fa-btn fa-user-plus"></i>Registrarse</a>
						</li>
						<li>
							<a href="{{route('getLogin')}}"><i class="fa fa-btn fa-sign-in"></i>Acceder</a>
						</li>
					@else
						<li>
							<a href="{{route('teams.index')}}"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</a>
						</li>
						<li>
							<a href="{{route('getLogout')}}"><i class="fa fa-btn fa-sign-out"></i>Salir</a>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
</div>