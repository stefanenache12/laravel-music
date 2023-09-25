@extends('layouts.app')

@section('page-title', 'Modifica '.$album['title'])

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.albums.update', ['album' => $album->id]) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">
                                Title
                                <span class="text-danger">
                                    *
                                </span>
                            </label>
                            <input type="text" class="form-control" name="title" id="name" maxlength="255" value="{{ old('title', $album['title']) }}" placeholder="Inserisci il titolo dell' album..." required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">
                                Release Date
                            </label>
                            <textarea class="form-control" name="year" id="description" rows="3" maxlength="2048" placeholder="Inserisci l 'anno'...">{{ old('year', $album['year']) }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">
                                Description
                            </label>
                            <textarea class="form-control" name="description" id="description" rows="3" maxlength="2048" placeholder="Inserisci la descrizione...">{{ old('description', $album['description']) }}</textarea>
                        </div>


                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">
                                Country
                            </label>
                            <textarea class="form-control" name="country" id="description" rows="3" maxlength="2048" placeholder="Inserisci la città...">{{ old('country', $album['country']) }}</textarea>
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
