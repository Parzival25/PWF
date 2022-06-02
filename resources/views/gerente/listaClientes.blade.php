@include('gerente.header')
<div class="container">
    <main class="ms-sm-auto px-md-4 bg-light">
    <h2>Lista de clientes</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Correo</th>
              <th scope="col">Imagen</th>
              <th>
                <a href="crearUsuario" class="btn btn-success">Agregar</a>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user) {?>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
              <?php
                $imagen = $user->image;
                if (!file_exists($imagen)){
                $imagen = "img/no-photo.png";
                }
              ?>
              <img src="<?php echo $imagen; ?>" height="250" width="250" style="text-align: center;">
              </td>
              <td>
                <div>
                    <a href="{{route('users.edit', $user)}}" class="btn btn-primary">Editar</a>
                    <a  href="{{route('users.destroy', $user->id)}}" class="btn btn-danger">Eliminar</a>
                </div>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
    </main>
</div>
