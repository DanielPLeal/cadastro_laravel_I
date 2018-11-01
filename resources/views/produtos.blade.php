@extends('layout.app', ["current" => "produtos"])

@section('body')
	<div class="card border">
		<div class=" card-body">
			<h5  class="card-title">Cadastro de Produtos</h5>
@if(count($prods) > 0)
			<table class="table table-ordered table-hover">
				<thead>
					<tr>
						<th>id</th>
						<th>Nome</th>
						<th>Estoque</th>
						<th>Preço</th>
						<th>Categoria</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
		@foreach($prods as $prod)
					<tr>
						<td>{{ $prod->id }}</td>
						<td>{{ $prod->nome }}</td>
						<td>{{ $prod->estoque }}</td>
						<td>{{ $prod->preco }}</td>
						@if(count($cats) > 0)
							@foreach($cats as $cat)
								@if($prod->categoria_id == $cat->id)
								<td>{{ $cat->nome }}</td>	
								@endif
							@endforeach
						@endif
						<td>
							<a href="/produtos/editar/{{$prod->id}}" class="btn btn-primary btn-sm">Editar</a>
							<a href="/produtos/apagar/{{$prod->id}}" class="btn btn-danger btn-sm">Apagar</a>
						</td>					
					</tr>
		@endforeach
				</tbody>
			</table>
@endif
		</div>	
		<div class="card-footer">
			<a href="/produtos/novo" class="btn btn-primary btn-sm"> Cadastrar novo produto</a>				
		</div>	
	</div>
@endsection