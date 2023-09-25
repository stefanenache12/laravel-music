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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($genres as $genre)
                                <tr>
                                    <th scope="row">
                                        {{ $genre->name }}
                                    </th>
                                    <td>
                                        {{ $genre->slug }}
                                    </td>
                    
                                    <td>
                                        <a href="{{ route('admin.genres.show', $genre->slug) }}"
                                            class="btn btn-primary me-2">
                                            Vedi
                                        </a>

                                        <a href="{{ route('admin.genres.edit', $genre->slug) }}"
                                            class="btn btn-warning me-2">
                                            Modifica
                                        </a>

                                        <form class="d-inline-block" action="{{ route('admin.genres.destroy', $genre->slug) }}"
                                            method="POST"
                                            onsubmit="return confirm('Sei sicuro di voler eliminare questa risorsa?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa-solid fa-trash"></i>
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
