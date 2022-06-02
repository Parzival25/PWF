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
        console.log(DATOSJSON);
      }
    });
    }
    </script>
  
  </body>
  @endsection
</html>
