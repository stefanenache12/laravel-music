@extends('layouts.app')

@section('page-title', 'Risorse')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.genres.create') }}" class="btn btn-success w-100 mb-3 fw-bold">
                        + Aggiungi risorsa
                    </a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($genres as $genre)
                                <tr>
                                    <th scope="row">
                                        {{ $genre['id'] }}
                                    </th>
                                    <td>
                                        {{ $genre['name'] }}
                                    </td>
                                    <td>
                                        {{ $genre['slug'] }}
                                    </td>
                                    
                                    <td>
                                        <a href="{{ route('admin.genres.show', ['genre' => $genre->id]) }}"
                                            class="btn btn-primary me-2">
                                            Vedi
                                        </a>

                                        <a href="{{ route('admin.genres.edit', ['genre' => $genre->id]) }}"
                                            class="btn btn-warning me-2">
                                            Modifica
                                        </a>

                                        <form method="POST" class="d-inline-block" action="{{ route('admin.genres.destroy', ['genre' => $genre->id]) }}" onsubmit="return confirm('Sei sicuro di voler eliminare questa risorsa?');">
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
