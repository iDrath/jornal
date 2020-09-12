@extends("layout")

@section('titulo', 'Articulos') 


@section('content')
<hr>
</br></br>
<div class="row justify-content-md-center">
	<div class="col-sm-8 text-justify">

		<h3>{{ $articulo -> titulo }}</h3>
		<p>
            {{ $articulo -> contenido}}
        </p>
        <!--<hr>
        Articulo posteado por: {{ $articulo -> contenido}}-->

		</br></br>
	</div>
	
</div>


<hr>
</br></br>




@stop