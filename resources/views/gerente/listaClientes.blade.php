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
                  <img src="/fotos/{{ $user->image }}" width="50%">
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
