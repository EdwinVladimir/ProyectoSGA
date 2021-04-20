@extends('adminlte::page')

@section('title', 'DaskBoard')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')        

    <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
        <p>hola</p>
        <Reparto-component></Reparto-component><!--Añadimos nuestro componente vuejs-->
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
    <script> console.log('Hit'); </script>
@stop