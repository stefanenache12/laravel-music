@extends('layouts.app')

@section('page-title', 'Crea nuova risorsa')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.genres.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">
                                Nome
                                <span class="text-danger">
                                    *
                                </span>
                            </label>
                            <input type="text" class="form-control" name="name" id="name" maxlength="255" value="{{ old('name') }}" placeholder="Inserisci il nome della risorsa..." required>
                        </div>

                        <div class="mb-3">
                            I campi contrassegnati con
                            <span class="text-danger fw-bold">
                                *
                            </span>
                            sono obbligatori
                        </div>

                        <div>
                            <button type="submit" class="btn btn-success w-100 fw-bold">
                                + Aggiungi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
