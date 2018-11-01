@extends('layout.app', ["current" => "produtos"])


@section('body')

<div class="card border">	
	<div class="card-body">
		<form action="/produtos/{{ $prod->id }}" method="post">	
			@csrf		
			<div class="form-group">
				<label for="nomeProduto"> Nome do Produto</label>	
				<input type="text" class="form-control" name="nomeProduto" id="nomeProduto" value="{{ $prod->nome }}">	

				<label for="qtdeEstoque">Estoque</label>
				<input type="number" class="form-control" name="qtdeEstoque" id="qtdeEstoque" value="{{ $prod->estoque }}">

				<label for="precoPrduto">Preço Produto</label>
				<input type="text" class="form-control" name="precoPrduto" id="precoPrduto" value="{{ $prod->preco }}">
				
				@if(count($cats) > 0)
				<label for="categoria">Categorias</label>	
				<select class="form-control" name="categoria" id="categoria">							
				@foreach($cats as $cat)
					@if($prod->categoria_id == $cat->id)	
						<option  value="{{ $cat->id }}">{{ $cat->nome }}</option>
					@endif
				@endforeach					
				</select>	
				@endif
			</div>
			<button type="submit" class="btn btn-primary btn-sm"> Salvar</button>
			<a href="/produtos" class="btn btn-danger btn-sm">Cancelar</a>

		</form>
	</div>
</div>

@endsection