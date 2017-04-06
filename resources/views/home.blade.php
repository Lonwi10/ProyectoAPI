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
			<option id="api" value="">0</option>
			<option id="api" value="/api/posicion">Posicion</option>
		</select>
	</div>
	<div class="resultados">
		<canvas id="grafico"></canvas>
	</div>

	<script type="text/javascript">
		$(document).ready(alert('seleccione una opcion'));
			function mostrarResultado(link){
				event.preventDefault(); //no recargara la pagina
				var consulta = link;
				$.getJSON(consulta, function(result){
					/*result = JSON.stringify(result);
					result = result.replace('[','');
					result = result.replace(']','');
					result = result.replace('{','');
					result = result.replace('}','');	
					result = result.split(",");*/
					var vari = Object.keys(result[0]);
					console.log(vari);
					console.log(result[0]["variable"]);

				});
				var a = [90,30,10,80,15];
				var la = ["AD Carry","Mid","Support","Jungler","Top"];
				var barChartData = {
					labels : la,
					datasets : [
						{
							fillColor : "#6b9dfa",
							strokeColor : "#ffffff",
							highlightFill: "#1864f2",
							highlightStroke: "#ffffff",
							data : a
						}
					]

				}	

				var ctx = document.getElementById("grafico").getContext("2d");
				window.myPie = new Chart(ctx).Bar(barChartData, {responsive:true});
			}
		

	</script>


