@extends('layouts.app')

@section('page-title', 'Crea nuova risorsa')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.resources.store') }}" method="POST">
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
                            <label for="description" class="form-label fw-bold">
                                Descrizione
                            </label>
                            <textarea class="form-control" name="description" id="description" rows="3" maxlength="2048" placeholder="Inserisci la descrizione della risorsa...">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                Attivo?
                                <span class="text-danger">
                                    *
                                </span>
                            </label>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="active" id="active-yes" value="1"
                                    @if (!old('active') || old('active') == 1)
                                        checked
                                    @endif
                                    >
                                    <label class="form-check-label" for="active-yes">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="active" id="active-no" value="0"
                                    @if (old('active') === '0')
                                        checked
                                    @endif
                                    >
                                    <label class="form-check-label" for="active-no">No</label>
                                </div>
                            </div>
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
