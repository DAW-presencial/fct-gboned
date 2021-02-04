@extends('layouts.layout')
@section('title')
    Portfolio
@endsection
@section('content')
    <h1>Portfolio</h1>
        <p>Página de Portfolio</p>
        <ul>
            <?php foreach ($portfolio as $portfolioItem) {
                echo "<li>" . $portfolioItem['title'] . "</li>";
            }
            ?>
        </ul>
@endsection