@include('gerente.header')
<div class="container">
  <form id="form-data" method="POST" action="registro" width=350px> 
  @csrf
    <input type="hidden" name="_token" value="" id="token">
      <div class="row">
        <div class="col-md-12">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" value="{{(isset($user))?$user->name:old('name')}}" required='true' autofocus>
        </div>

        <div class="col-md-12">
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" name="email" id="email" value="{{(isset($user))?$user->email:old('email')}}" required='true' autofocus>
        </div>

        <div class="col-md-6 mt-2">
            <label for="Sexo" class="form-label">Rol</label>
            <p>
                <select name="rol" class="mx-sm-4" value="{{(isset($user))?$user->rol:old('rol')}}" require>
                  <option>Gerente</option>
                  <option>Empleado</option>
                </select>
            </p>
          </div>
          <div class="col-md-12">
            <label for="name" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" id="password" value="{{(isset($user))?$user->password:old('password')}}" required='true' autofocus>
        </div>

          <div class="container mt-5">
            <div class="row">
              <div class="col text-center center-block">
                <input type="submit" class="btn btn-primary btn-lg btn-block" id="btnEnviarForm" value="Enviar">
              </div>
            </div>
          </div>

            
      </div>
  </form>


  <div id="resp"> </div>
</div>