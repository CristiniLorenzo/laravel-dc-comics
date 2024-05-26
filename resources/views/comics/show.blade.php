@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>{{ $comic->title }}</h1>

            <div>prezzo: {{ $comic->price }}</div>
            <div>serie: {{ $comic->series }}</div>
            <p class="card-text">descrizione: {{ $comic->description }}</p>
        </div>
    </section>
@endsection