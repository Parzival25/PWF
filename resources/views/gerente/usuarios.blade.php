@include('gerente.header')
<div class="container">
  <form id="form-data" method="POST" action="registro" width=350px enctype="multipart/form-data"> 
    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      <div class="row">
        <div class="col-md-12">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" value="{{(isset($user))?$user->name:old('name')}}" required='true' autofocus>
        </div>

        <div class="col-md-12">
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" name="email" id="email" value="{{(isset($user))?$user->email:old('email')}}" required='true' autofocus>
        </div>

        <div class="col-md-12">
            <img id="imagenSeleccionada" style="max-height: 300px;">
        </div>

        <div class="col-md-12">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="image" id="image" value="{{(isset($user))?$user->image:old('image')}}" required='true' autofocus>

        </div>

        <div class="col-md-6 mt-2">
            <label for="Sexo" class="form-label">Rol</label>
            <p>
                <select name="rol" class="mx-sm-4" value="{{(isset($user))?$user->rol:old('rol')}}" require>
                  <option>Manager</option>
                  <option>Employee</option>
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

<script>
  $(document).ready(function (e){
    $('#image').change(function(){
      let reader = new FileReader();
      reader.onload = (e) => {
        $('#imagenSeleccionada').attr('src', e.target.result);
      }
      reader.readAsDataURL(this.file[0]);
    })
  })
</script>