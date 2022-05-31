<<<<<<< HEAD
<!DOCTYPE html>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="css/home.css" rel="stylesheet">


        <title>Home</title>

<html>
    <head>

    <body background="fotos/Even-Tec.jpg" >

    <div class="relative flex items-top justify-center min-h-screen bg-blue-100 dark:bg-blue-900 sm:items-center py-4 sm:pt-0">
            
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                
                    <a href="" class="btn btn-sm btn-success">|  Inicia sesión  |</a>

                    <a href="" class="btn btn-sm btn-success">Registrar  |</a>
                    
                    <a href="" class="btn btn-sm btn-success">Inicia como invitado  |</a>
                
            </div>
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
>>>>>>> 7d8f2563ae61ff6751ce837fb4c45237aba5cc24
    </div>
</div>
@endsection





