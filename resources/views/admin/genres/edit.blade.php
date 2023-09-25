@extends('layouts.app')

@section('page-title', 'Modifica '.$genre['title'])

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.genres.update', ['genre' => $genre->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">
                                Title
                                <span class="text-danger">
                                    *
                                </span>
                            </label>
                            <input type="text" class="form-control" name="name" id="name" maxlength="255" value="{{ old('name', $genre['name']) }}" placeholder="Inserisci il titolo dell' genre..." required>
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
