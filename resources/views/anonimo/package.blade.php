@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

  <?php foreach($packages as $package){?>
        <div class="col">
          <div class="card shadow-sm">
          <?php
              $imagen = $package->imagen;
              if (!file_exists($imagen)){
                $imagen = "img/no-photo.png";
              }
            ?>
          <h5 class="card-title">{{$package->name}}</h5>
            <img src="<?php echo $imagen; ?>" height="250" width="250" style="text-align: center;">
            <div class="card-body">
              <p class="card-text">{{$package->description}}</p>
              <p class="card-text">{{$package->price}}</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
    </div>
    
    </div>
@endsection
