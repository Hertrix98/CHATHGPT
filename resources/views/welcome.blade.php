@extends('layouts.app')

@section('content')
<div class="hero">
    <div>
        <span class="badge">Bienvenido</span>
        <h1>{{ config('app.name') }}</h1>
        <p>
            Este sitio centraliza la sincronización de XML del SAT para todas tus empresas.
            Usa el menú para navegar entre las secciones y aprovecha el layout compartido
            con navegación y pie de página consistentes.
        </p>
        <a class="cta" href="{{ url('/') }}#funcionalidad">Ir a la página principal</a>
    </div>
    <div class="card">
        <h3>Listo para personalizar</h3>
        <p class="muted">
            Este contenido inicial usa los mismos componentes globales para que cualquier
            vista mantenga el menú y el footer actualizados automáticamente.
        </p>
    </div>
</div>
@endsection
