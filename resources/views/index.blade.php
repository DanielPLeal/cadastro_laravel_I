@extends('layout.app', ["current" => "home"])

@section('body')
	<div class="jumbotrom bg-ligth border border-secondary">
		<div class="row">
			<div class="card-deck">
				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title"> Cadastro de produtos</h5>
						<p class="card-text"> Aqui você cadastra os produtos.</p>
						<a href="/produtos" class="btn btn-primary"> Cadastre os seus produtos</a>
					</div>
				</div>
				<div class="card border border-primary">
					<div class="card-body">
						<h5 class="card-title"> Cadastro de Categorias</h5>
						<p class="card-text"> Aqui você cadastra as categorias.</p>
						<a href="/categorias" class="btn btn-primary"> Cadastre as suas categorias</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection