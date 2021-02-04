@extends('layouts.layout')
@section('title')
    Forms
@endsection
@section('content')
    <h1>Formularios</h1>
    <h2>Formulario Empresa</h2>
    <form method="POST" action={{ route('form') }}>
        @csrf

        {{-- Añado el campo de input de nombre y le añado una clase que añadirá mensaje de error en caso de haberlo--}}
        <input type="text" name="name" class="field-input {{ $errors->has('name') ? 'field-error' : '' }}" placeholder="Nombre..."><br>
        {{-- En caso de haber error, se mostrará un mensaje debajo del input indicando de qué error se trata --}}
        @if ($errors->has('name'))
            <span class="error-message" style="color:red"> {{ $errors->first('name') }}</span><br>
        @endif

        <input type="text" name="cif" placeholder="CIF..."><br>

        <input type="tel" name="telephone" placeholder="611223344"><br>

        <p>Sector productivo</p>
        <label for="primary">Primario</label>
        <input type="checkbox" id="primary" name="primary">
        <label for="secondary">Secundario</label>
        <input type="checkbox" id="secondary" name="secondary">
        <label for="terciary">Terciario</label>
        <input type="checkbox" id="terciary" name="terciary"><br>

        <button>Enviar</button>
    </form>

@endsection