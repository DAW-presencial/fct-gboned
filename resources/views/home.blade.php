@extends('layout')
@section('content')
    <h1>Home</h1>
        <p>Bienvenido/a <?php echo $nombre ?? "Invitado" ?></p>
@endsection