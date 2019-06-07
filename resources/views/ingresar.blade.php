<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div>
    <CENTER><h1>FORMULARIO INGRESAR <span class="badge badge-secondary"></span></h1></CENTER>
    <form method="post">
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">NOMBRE</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Nombre" name="nombre" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">APELLIDO</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Apellido" name="apellido" value="">
        </div>
      </div>

      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">CEDULA</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Cedula" name="cedula" value="">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">PROMEDIO</label>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="promedio" name="promedio" value="">
        </div>
      </div>
    	<br>
    	<center>
        <div>
    		  <button type="submit" name="Agregar" class="btn btn-primary">Ingresar</button>
    	 </div>
    	</center>
    	<br>
    </form>
    <br>
    <table class="table" border="1">
      <thead>
        <tr>
          
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Cedula</th>
          <th scope="col">Promedio</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>luis</td>
          <td>chichanda</td>
          <td>1314593672</td>
          <td>8</td>
        </tr>    
      </tbody>
    </table>
  </div>
</body>
</html>