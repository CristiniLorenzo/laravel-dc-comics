@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h1>NUOVO COMIC</h1>

            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">titolo</label>
                  <input type="text" class="form-control" id="title" name="title">                 
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">                 
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">immagine</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">                 
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">data di vendita</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date">                 
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">serie</label>
                    <input type="text" class="form-control" id="series" name="series">                 
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">tipo</label>
                    <select class="form-select" id="type" name="type">
                        <option selected>scegli un tipo</option>
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>             
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label">descrizione</label>
                    <textarea class="form-control" id="description" rows="10" name="description"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection