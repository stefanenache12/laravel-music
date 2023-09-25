@extends('layouts.app')

@section('page-title', 'Modifica '.$resource['name'])

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.resources.update', ['resource' => $resource['slug']]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">
                                Nome
                                <span class="text-danger">
                                    *
                                </span>
                            </label>
                            <input type="text" class="form-control" name="name" id="name" maxlength="255" value="{{ old('name', $resource['name']) }}" placeholder="Inserisci il nome della risorsa..." required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">
                                Descrizione
                            </label>
                            <textarea class="form-control" name="description" id="description" rows="3" maxlength="2048" placeholder="Inserisci la descrizione della risorsa...">{{ old('description', $resource['description']) }}</textarea>
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
                                    @if ($resource['active'])
                                        checked
                                    @endif
                                    >
                                    <label class="form-check-label" for="active-yes">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="active" id="active-no" value="0"
                                    @if (!$resource['active'])
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
                            <button type="submit" class="btn btn-warning w-100 fw-bold">
                                Aggiorna
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
