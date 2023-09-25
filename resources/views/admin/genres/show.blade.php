@extends('layouts.app')

@section('page-title', $genre['name'])

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
