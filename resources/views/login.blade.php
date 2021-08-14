@extends('_layout')

@section('styles')
<style>
body {
	height:  100vh
}

.container.is-fluid , .columns {
	height: 100%;
}
</style>
@endsection

@section('body')
<div class="columns is-vcentered is-centered">
	<div class="column is-4">
		<form class="box" method="POST" action="{{ url('login') }}">
			@csrf
			<div class="level">
				<div class="level-item">
					<h3 class="title">LOGIN</h3>
				</div>
			</div>
			<div class="field">
				<p class="control has-icons-left">
					<input class="input" type="text" placeholder="Username" name="username" required>
					<span class="icon is-small is-left">
						<i class="fas fa-user"></i>
					</span>
				</p>
			</div>
			<div class="field">
				<p class="control has-icons-left">
					<input class="input" type="password" placeholder="Password" name="password" required>
					<span class="icon is-small is-left">
						<i class="fas fa-lock"></i>
					</span>
				</p>
			</div>
			<button type="submit" class="button is-success is-fullwidth">LOG IN</button>
		</form>
	</div>
</div>
@endsection