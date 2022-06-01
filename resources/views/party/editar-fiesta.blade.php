<!doctype html>
<html lang="en">

@extends('party.base')

@include('party.header')

<title>Actualizar evento</title>

<div class=container>

<br>
<h2>Actualizar evento</h2>

  <form>  
      <br>
      <div class="form-control">
        <label>Nombre</label>
        <input type="text" class="form-control" id="id_name" placeholder="Escriba el nombre del paquete">
        <br>
        <label>Descripción</label>
      <!--  <input type="text" class="form-control" id="id_description" placeholder="Escriba una breve descripción"> -->
        <textarea class="form-control" id="id_description" rows="3"></textarea>
        <br>
        <label>Imagen</label>
        <input type="file" class="form-control-file" id="id_precio">
        <br>
        <label>Confirmado</label>
        <select class="form-control" id="id_confirmado">
          <option>Sí</option>
          <option>No</option>
        </select>
        <br>
        <label>Estado</label>
        <select class="form-control" id="id_estado">
          <option>Activo</option>
          <option>Inactivo</option>
        </select>
        <br>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
  </div>

  @include('party.footer')

  </html>