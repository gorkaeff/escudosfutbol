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

				<a class="navbar-brand" href="/">Escudos Futbol</a>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					&nbsp;
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="/auth/register"><i class="fa fa-btn fa-user-plus"></i>Registrarse</a></li>
						<li><a href="/auth/login"><i class="fa fa-btn fa-sign-in"></i>Acceder</a></li>
					@else
						<li class="navbar-text"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</li>
						<li><a href="/auth/logout"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
</div>