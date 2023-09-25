@extends('layouts.app')

@section('page-title', 'Risorse')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.resources.create') }}" class="btn btn-success w-100 mb-3 fw-bold">
                        + Aggiungi risorsa
                    </a>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Attivo?</th>
                                <th scope="col">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resources as $resource)
                                <tr>
                                    <th scope="row">
                                        {{ $resource['id'] }}
                                    </th>
                                    <td>
                                        {{ $resource['name'] }}
                                    </td>
                                    <td>
                                        {{ $resource['slug'] }}
                                    </td>
                                    <td>
                                        @if ($resource['active'])
                                            <span class="badge rounded-pill text-bg-success">Si</span>
                                        @else
                                            <span class="badge rounded-pill text-bg-danger">No</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.resources.show', ['resource' => $resource['slug']]) }}"
                                            class="btn btn-primary me-2">
                                            Vedi
                                        </a>

                                        <a href="{{ route('admin.resources.edit', ['resource' => $resource['slug']]) }}"
                                            class="btn btn-warning me-2">
                                            Modifica
                                        </a>

                                        <form method="POST" class="d-inline-block" action="{{ route('admin.resources.destroy', ['resource' => $resource['slug']]) }}" onsubmit="return confirm('Sei sicuro di voler eliminare questa risorsa?');">
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
