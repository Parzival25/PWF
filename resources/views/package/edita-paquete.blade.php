<!doctype html>
<html lang="en">

@extends('package.base')

@include('package.header')

<title>Crear paquete</title>

<div class=container>

<br>
<h2>Editar paquete</h2>

  <form action="" method="POST">
  @csrf
  @method('put')
      <br>
      <div class="form-control">
        <label>Nombre</label>
        <input type="text" name='name' class="form-control" id="id_name" placeholder="Escriba el nombre del paquete" value="{{$package->name}}">
        <br>
        <label>Descripción</label>
      <!--  <input type="text" class="form-control" id="id_description" placeholder="Escriba una breve descripción"> -->
        <textarea class="form-control" name='descripcion' id="id_description" rows="3" value="{{$package->descripcion}}"></textarea>
        <br>
        <label>Imagen</label>
        <input type="file" name='imagen' class="form-control-file" id="id_precio">
        <br>
        <label>Precio</label>
        <input type="number" name='price' class="form-control" id="id_precio" placeholder="Escriba el precio del paquete" value="{{$package->price}}">
        <br>
        <label>Estado</label>
        <select class="form-control" name='status' id="id_estado">
          @foreach()
          <option>Activo</option>
          <option>Inactivo</option>
          @endforeach
        </select>
        <br>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>

  @include('package.footer')

  </html>