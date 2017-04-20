	@extends('layouts.master')


	@section('content')

		<?php
  		header('Content-type: text/html');
  		header('Access-Control-Allow-Origin: *');
	?>

	<style>

	</style>
	<h1>Grafica</h1>

	<script type="text/javascript" src="{{ url('/js/Chart.js') }}"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>

	<div class="caja">
		<input type="button" id="api" value="ENVIAR" onclick="mostrarResultado();">
	</div>
	<div class="resultados">
		<canvas id="grafico"></canvas>
	</div>

	<script type="text/javascript">
			function mostrarResultado(){
				if (typeof(myPie) !== 'undefined') {
					myPie.destroy();
				}
				event.preventDefault(); //no recargara la pagina
				
				var xhttp = new XMLHttpRequest() || new ActiveXObject("Microsoft.XMLHTTP");
				xhttp.onreadystatechange = function() {
					if (this.readyState === 4){
						if (this.status === 200) {
							var json = JSON.parse(xhttp.responseText);
							var portero = 0;
							var defensa = 0;
							var centrocampista = 0;
							var delantero = 0;
							
							$.each(json,function(index,value){
								if(value["posicion"] == "Portero"){
									portero += 1;
								}
								else if(value["posicion"] == "Defensa"){
									defensa += 1;
								}
								else if(value["posicion"] == "Centrocampista"){
									centrocampista+=1;
								}
								else if(value["posicion"] == "Delantero"){
									delantero+=1;
								}
							//	variable.push(value["variable"]);
							//	cantidad.push(value["total"]);
							});
							var barChartData = {
							labels : ['PORTERO','DEFENSA','CENTROCAMPISTA','DELANTERO'],
							datasets : [
								{
										fillColor : "#6b9dfa",
										strokeColor : "#ffffff",
										highlightFill: "#1864f2",
										highlightStroke: "#ffffff",
										data : [portero,defensa,centrocampista,delantero]
									}
								]
							}	
							var ctx = document.getElementById("grafico").getContext("2d");
							window.myPie = new Chart(ctx).Line(barChartData, {responsive:true});
						} else {
							console.log(this.statusText);
						}	
					}
				};
				xhttp.open('GET', "http://www.media.formandome.es/phonegap/tutorial/futbolistas.php", true);
				xhttp.send(null);
			}
	</script>


@endsection
