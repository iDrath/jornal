@extends("layout")

@section('titulo', 'Articulos') 


@section('content')
<hr>
</br></br>
<div class="row justify-content-md-center">
	<div class="col-sm-8 text-justify">

		<h3>Articulos disponibles</h3>
		<ul>
			@foreach($articulos as $articulo)
			<li><a href="/articulos/{{ $articulo -> id }}">{{ $articulo -> titulo }}</a></li>
			@endforeach
			<hr>
		</ul>


		</br></br>
	</div>
	
</div>


<hr>
</br></br>




@stop



<!--Script unitario de test
@section('scripts')
<script>
	alert('test')
</script>-->