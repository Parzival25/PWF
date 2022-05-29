@include('gerente.header')

<form id="form-data" method="post" action=""> 
  <input type="hidden" name="_token" value="" id="token">
    <div class="row">
      <div class="col-md-12">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" name="nombre" id="nombre" required='true' autofocus>
      </div>
      <div class="col-md-6 mt-2">
          <label for="lastname" class="form-label">Apellido</label>
          <input type="text" class="form-control" name="apellido" id="apellido" required='true'>
      </div>

      <div class="col-md-6 mt-2">
          <label for="Sexo" class="form-label">Rol</label>
          <fieldset class="form-group row">
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Masculino" checked>
                  <label class="form-check-label" for="gridRadios1">
                    Gerente
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Femenino">
                  <label class="form-check-label" for="gridRadios2">
                    Empleado
                  </label>
                </div>
              </div>
            </fieldset>
        </div>


        <div class="col-md-12">
            <label for="fechaN" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fechaN" id="fechaN" required='true'>
        </div>


        <div class="container mt-5">
          <div class="row">
            <div class="col text-center center-block">
              <button class="btn btn-primary btn-lg btn-block" id="btnEnviarForm">Registrar Niño</button>
            </div>
          </div>
        </div>

          
    </div>
</form>


<div id="resp"> </div>