@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="titleHelper" placeholder="Il signore degli anelli" />
                <small id="helpId" class="form-text text-muted">The comic title</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descrizione</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" aria-describedby="descHelper"
                    placeholder="Lorem ipsum dolor, sit amet consectetur adipisicing elit." />
                <small id="helpId" class="form-text text-muted">The comic description</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Prezzo</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror"
                    name="price" id="price" aria-describedby="priceHelper" placeholder="9.99" />
                <small id="helpId" class="form-text text-muted">The comic price</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Categoria</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" name="category"
                    id="category" aria-describedby="categoryHelper" placeholder="Fantasy" />
                <small id="helpId" class="form-text text-muted">The comic cateogory</small>
            </div>

            <button type="submit" class="btn btn-dark">Salva</button>


        </form>
    </div>
@endsection
