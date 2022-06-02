<!doctype html>
<html lang="en">

@extends('layouts.app')
@section('content')


<title>Crear evento</title>

<div class=container>

<br>
<h2>Crear evento</h2>

  <form>  
      <br>
      <div class="form-control">
        <input type="hidden" name="_token" id="token" value="{{csrf_token()}}"/>
        <label>Nombre</label>
        <input type="text" class="form-control" id="name" placeholder="Escriba el nombre del paquete">
        <br>
        <label>Descripción</label>
      <!--  <input type="text" class="form-control" id="id_description" placeholder="Escriba una breve descripción"> -->
        <textarea class="form-control" id="description" rows="3"></textarea>
        <br>
        <label>Imagen</label>
        <input type="file" class="form-control-file" id="img">
        <br>
      </div>
      <br>
      <button onclick="addUser()" class="btn btn-primary">Crear</button>
    </form>
  </div>

  @endsection
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
   
  <script>
    let name =  document.getElementById('name');
    let description =  document.getElementById('description');
    let img =  document.getElementById('img');
    let _token =  document.getElementById('token');
       
    async function addParty(){
        let obj = { name:name.value, description:description.value, img:img.value };
        const res = await fetch('http://127.0.0.1:8000/create-party', {
             method:'POST',
             mode: 'cors',
             headers:{
                   'X-CSRF-TOKEN': _token.value,
                   'Content-Type': 'application/json'
            },
            body:JSON.stringify(obj)      
            });
       
            const data = await res.json()
            console.log(data)
            clearInput()
           }
           function clearInput(){
              name.value = ""
              description.value = ""
              img.value = ""
           }
          
       </script>
  </html>


