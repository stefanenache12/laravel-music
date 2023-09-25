@extends('layouts.app')

@section('page-title', 'Albums')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.albums.create') }}" class="btn btn-success w-100 mb-3 fw-bold">
                        + Aggiungi Album
                    </a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Year</th>
                                <th scope="col">Description</th>
                                <th scope="col">Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($albums as $album)
                                <tr>
                                    <th scope="row">
                                        {{ $album['id'] }}
                                    </th>
                                    <td>
                                        {{ $album['title'] }}
                                    </td>
                                    <td>
                                        {{ $album['year'] }}
                                    </td>
                                    <td>
                                        {{ $album['description'] }}
                                    </td>
                                    <td>
                                        {{ $album['country'] }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.albums.show', ['album' => $album->id]) }}"
                                            class="btn btn-primary me-2">
                                            Vedi
                                        </a>

                                        <a href="{{ route('admin.albums.edit', ['album' => $album->id]) }}"
                                            class="btn btn-warning me-2">
                                            Modifica
                                        </a>

                                        <form method="POST" class="d-inline-block" action="{{ route('admin.albums.destroy', ['album' => $album->id]) }}" onsubmit="return confirm('Sei sicuro di voler eliminare questa risorsa?');">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger w-100 fw-bold">
                                                Elimina
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
