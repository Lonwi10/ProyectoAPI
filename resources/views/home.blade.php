	<style>
	.caja{
		margin: auto;
		max-width: 250px;
		padding: 20px;
		border: 1px solid #BDBDBD;
	}

	.caja select{
		width: 100%;
		font-size: 16px;
		padding: 5px;
	}

	</style>
	<h1>Grafica</h1>

	<script type="text/javascript" src="{{ url('/js/Chart.js') }}"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>

	<div class="caja">
		<select onchange="mostrarResultado(this.value);">
			<option id="api" value="/api/posicion">Posicion</option>
			<option id="api" value="/api/region">Region</option>
		</select>
	</div>
	<div class="resultados">
		<canvas id="grafico"></canvas>
	</div>

	<script type="text/javascript">
		$(document).ready(alert('seleccione una opcion'));
			function mostrarResultado(link){
				if (typeof(myPie) !== 'undefined') {
					myPie.destroy();
				}
				event.preventDefault(); //no recargara la pagina

				var consulta = link;
				var variable = [];
				var cantidad = [];
				$.getJSON(consulta, function(result){				
					$.each(result,function(index,value){
						variable.push(value["variable"]);
						cantidad.push(value["total"]);
					});
				var barChartData = {
				labels : variable,
				datasets : [
					{
							fillColor : "#6b9dfa",
							strokeColor : "#ffffff",
							highlightFill: "#1864f2",
							highlightStroke: "#ffffff",
							data : cantidad
						}
					]

				}	

				var ctx = document.getElementById("grafico").getContext("2d");
				window.myPie = new Chart(ctx).Bar(barChartData, {responsive:true});
				});
				
			}
		

	</script>


