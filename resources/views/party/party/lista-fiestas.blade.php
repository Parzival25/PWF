<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Lista eventos</title>

  </head>

  <body>
      
<!-- Aquí va el header -->
@extends('layouts.app')
@section('content')

<main class="ms-sm-auto px-md-4 bg-light">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <h2>Productos</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripción</th>
              <th scope="col">Confirmacion</th>
              <th scope="col">Gestionar</th>

            </tr>
          </thead>
          <tbody id="lista-partys">

          </tbody>
        </table>
    <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="519" height="219" style="display: block; width: 519px; height: 219px;"></canvas>
</main>
<!-- Aquí va el footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
   
   <script>
    $(document).ready(function(){
      mostrarPartys();
    });

    function mostrarPartys(){
    $.ajax({
      url:"{{route('party.list')}}",
      type:"get",
      success:function(dato){
        var DATOSJSON=JSON.parse(dato.trim());
        var longitud=DATOSJSON.party.length;
        var TR="";
        for(var i=0;i<longitud;i++){
          TR+="<tr><td>"+(i+1)+"</td><td>"+DATOSJSON.party[i].NAME+"</td><td>"+DATOSJSON.party[i].DESCRIPTION+"</td><td>"+DATOSJSON.party[i].CONFIRMED+"</td><td class='text-center'>"+DATOSJSON.party[i].GESTIONAR+"</td></tr>";
        }
        $('#lista-partys').html(TR);
      }
    });
    }
    </script>
  
  </body>
  @endsection
</html>
