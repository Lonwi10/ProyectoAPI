@extends('layouts.master')


@section('content')
	<div class="row">
	  <div class="col-md-4">
		<a href="{{url('/grafico1')}}">
			<img border="0" alt="Grafico de Barras" src="grafico1.jpg" width="300" height="300">
		</a>
	  </div>
	  <div class="col-md-4">
	  	<a href="{{url('/grafico2')}}">
			<img border="0" alt="Busqueda" src="grafico2.jpg" width="300" height="300">
		</a>
	  </div>
	  <div class="col-md-4">
	  	<a href="{{url('/externa')}}">
			<img border="0" alt="Api Externa" src="grafico3.jpg" width="300" height="300">
		</a>
	  </div>
	</div>
@endsection