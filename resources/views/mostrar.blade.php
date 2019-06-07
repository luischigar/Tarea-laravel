
<!DOCTYPE html>
<html>
<head>
	<title>mostrar</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">

</head>
<body>
	<div>
		<CENTER><h1>FORMULARIO MOSTRAR <span class="badge badge-secondary"></span></h1></CENTER>
		<br>
		
		<form action="{{ url('/ingresar') }}" method="get" accept-charset="utf-8">
      		{{ csrf_field() }}
      		<center>
        		<div>
    		  		<button type="submit" name="Agregar">listo</button>
    	 		</div>
    		</center>
   		 </form>
		<table class="table" border="1">
	      <thead>
	        <tr>
	          
	          <th scope="">Nombre</th>
	          <th scope="col">Apellido</th>
	          <th scope="col">Cedula</th>
	          <th scope="col">Promedio</th>
	          <th scope="col">Nivel</th>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td>{{$entrada[0]}}</td>
	          <td>{{$entrada[1]}}</td>
	          <td>{{$entrada[2]}}</td>
				@if($entrada[3] >= 8 && $entrada[3] <= 10 )
	          		<td>wvssdv</td>
	          		<td style="background-color: #0DC627">exelente</td>
	          	@endif

	          	@if($entrada[3] >= 6 && $entrada[3] < 8)
	          		<td>n3653</td>
	          		<td style="background-color: #1A38ED">muy bueno</td>
	          	@endif

	          	@if($entrada[3] >= 4 && $entrada[3] < 6)
	          		<td>n3653</td>
	          		<td style="background-color: #E6C115">bueno</td>
	          	@endif

	          	@if($entrada[3] >= 0 && $entrada[3] < 4)
	          		<td>n3653</td>
	          		<td style="background-color: #F9082A">regular</td>
	          	@endif
	        </tr>    
	      </tbody>
	    </table>
	</div>
</form>
</body>
</html>