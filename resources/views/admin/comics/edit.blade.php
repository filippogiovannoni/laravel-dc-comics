@extends('layouts.app')


@section('content')
    <div class="container">

        <h3>Aggiorna i dati del fumetto</h3>

        <form action="{{ route('admin.comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="Il signore degli anelli" value="{{ $comic->title }}" />
                <small id="helpId" class="form-text text-muted">The comic title</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descrizione</label>
                <input type="text" class="form-control" name="description" id="description" aria-describedby="descHelper"
                    placeholder="Lorem ipsum dolor, sit amet consectetur adipisicing elit."
                    value="{{ $comic->description }}" />
                <small id="helpId" class="form-text text-muted">The comic description</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control" name="price" id="price"
                    aria-describedby="priceHelper" placeholder="9.99" value="{{ $comic->price }}" />
                <small id="helpId" class="form-text text-muted">The comic price</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Categoria</label>
                <input type="text" class="form-control" name="category" id="category" aria-describedby="categoryHelper"
                    placeholder="Fantasy" value="{{ $comic->category }}" />
                <small id="helpId" class="form-text text-muted">The comic cateogory</small>
            </div>

            <button type="submit" class="btn btn-dark">Aggiorna</button>


        </form>
    </div>
@endsection
