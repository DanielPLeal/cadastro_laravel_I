@extends('layout.app', ["current" => "produtos"])

@section('body')
<div class="card border">	
	<div class="card-body">
		<form action="/produtos" method="post">	
			@csrf		
			<div class="form-group">
				<label for="nomeProduto"> Nome do Produto</label>	
				<input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">	

				<label for="qtdeEstoque">Estoque</label>
				<input type="number" class="form-control" name="qtdeEstoque" id="qtdeEstoque" placeholder="Qtde. Estoque">

				<label for="precoPrduto">Preço Produto</label>
				<input type="text" class="form-control" name="precoPrduto" id="precoPrduto" placeholder="Preço">
				
				@if(count($cats) > 0)
				<label for="categoria">Categorias</label>	
				<select class="form-control" name="categoria" id="categoria">
					<option></option>					
				@foreach($cats as $cat)
					<option  value="{{ $cat->id }}">{{ $cat->nome }}</option>
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

