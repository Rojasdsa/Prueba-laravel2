@extends('template.general')

{{-- Título dentro del HEAD --}}
@section('title', 'Prueba ej1 - laravel')


{{-- Estilos CSS --}}
@section('design')
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endsection

{{-- Título de bienvenida --}}
@section('titulo-body')
    <h1 class="text-center">Bienvenidos a Laravel, DAW</h1>
@endsection

{{-- Mensaje bienvenida --}}
@section('welcome')
    <div class="container-fluid">
        <br>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate molestiae vel non? Eos, suscipit neque quis
            iure eligendi reiciendis sed error? Quae enim suscipit ab, recusandae accusamus molestias aut nostrum.</p>
    </div>
@endsection

{{-- Nav --}}
@section('nav')
    <nav class="navbar navbar-expand-sm navbar-light ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-center" id="navbarID">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="{{ route('welcome') }}">Inicio</a>
                    <a class="nav-link" aria-current="page" href="{{ route('who') }}">¿Quienes somos?</a>
                    <a class="nav-link" aria-current="page" href="{{ route('project') }}">Proyecto</a>
                </div>
            </div>
        </div>
    </nav>
@endsection

{{-- Footer --}}
@section('footer')
    <footer>
        <div class="container-fluid text-center">
            <p> Copyright Efe Rojas 2023</p>
        </div>
    </footer>
@endsection

{{-- Body --}}
@section('cuerpo')
