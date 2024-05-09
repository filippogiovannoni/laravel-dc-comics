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
                                <a href="{{ route('admin.comics.show', $comic) }}">View</a>
                                <a href="{{ route('admin.comics.edit', $comic) }}">Edit</a>
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
