@extends('layouts.app')

@section('page-title', 'Crea nuova risorsa')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.albums.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="title" class="form-label fw-bold">
                                Title
                                <span class="text-danger">
                                    *
                                </span>
                            </label>
                            <input type="text" class="form-control" name="title" id="title" maxlength="255" value="{{ old('title') }}" placeholder="Inserisci il nome della risorsa..." required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">
                                Year
                            </label>
                            <textarea class="form-control" name="year" id="description" rows="3" maxlength="2048" placeholder="Inserisci l' anno">{{ old('year') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">
                                Description
                            </label>
                            <textarea class="form-control" name="description" id="description" rows="3" maxlength="2048" placeholder="Inserisci la descrizione della risorsa...">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">
                                country
                            </label>
                            <textarea class="form-control" name="country" id="description" rows="3" maxlength="2048" placeholder="Inserisci luogo di produzione">{{ old('country') }}</textarea>
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
