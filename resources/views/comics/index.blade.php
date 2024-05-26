@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>LISTA FUMETTI</h1>

            <div class="row row-cols-4">
                @foreach ($comics as $comic)
                    <div class="col">                      
                        <div class="card my-3">
                            <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <div>prezzo: {{ $comic->price }}</div>
                            <div>serie: {{ $comic->series }}</div>
                            <div>tipo: {{ $comic->type }}</div>


                            <p class="card-text">descrizione: {{ $comic->description }}</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
                     
        </div>
    </section>
@endsection