@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('admin.comics.create') }}" type="button" name="createComic" id="createComic"
            class="btn btn-primary my-2">
            Add
        </a>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Cover Image</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->title }}</td>
                            <td scope="row">{{ $comic->description }}</td>
                            <td scope="row">{{ $comic->price }}</td>
                            <td scope="row">{{ $comic->category }}</td>
                            <td scope="row">
                                <img width="100px" src="{{ $comic->img_url }}" alt="cover_image">
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.comics.show', $comic) }}">View</a>
                                <a class="btn btn-secondary btn-sm" href="{{ route('admin.comics.edit', $comic) }}">Edit</a>
                                <form action="{{ route('admin.comics.destroy', $comic) }}" method="post">
                                    @csrf

                                    @method('DELETE')

                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#modal{{ $comic->id }}">
                                        Delete
                                    </button>

                                    <div class="modal fade" id="modal{{ $comic->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitle-{{ $comic->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">
                                                        Elimina fumetto?
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">Sei sicuro di voler eliminare il seguente fumetto?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @empty

                        <tr class="">
                            <td scope="row">0 results</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $comics->links('pagination::bootstrap-5') }}
    </div>
@endsection
