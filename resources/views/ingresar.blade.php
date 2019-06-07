<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
  <div>
    <CENTER><h1>FORMULARIO INGRESAR <span class="badge badge-secondary"></span></h1></CENTER>
    <form action="{{ url('/mostrar') }}" method="post" accept-charset="utf-8">
      {{ csrf_field() }}
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NOMBRE</label>
        <div class="col-sm-10">
          <input type="text" placeholder="Nombre" name="nombre">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">APELLIDO</label>
        <div class="col-sm-10">
          <input type="text" placeholder="Apellido" name="apellido">
        </div>
      </div>

      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">CEDULA</label>
        <div class="col-sm-10">
          <input type="text" placeholder="Cedula" name="cedula">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">PROMEDIO</label>
        <div class="col-sm-10">
          <input type="text" placeholder="promedio" name="promedio" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">N Persona</label>
        <div class="col-sm-10">
          <input type="text" placeholder="" name="persona" value="">
        </div>
      </div>
    	<br>
    	<center>
        <div>
    		  <button class="btn btn-primary" type="submit" name="Agregar">Ingresar</button>
    	 </div>
    	</center>
    	<br>
    </form>
  </div>
</body>
</html>