@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center text-success fs-4">
                        Album pubblicati
                    </h2>
                    <h3 class="text-center fs-2">
                        54
                    </h3>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-primary">
                            Vedi tutti
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center text-success fs-4">
                        Generi musicali
                    </h2>
                    <h3 class="text-center fs-2">
                        13
                    </h3>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-primary">
                            Vedi tutti
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center text-success fs-4">
                        Artisti
                    </h2>
                    <h3 class="text-center fs-2">
                        32
                    </h3>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-primary">
                            Vedi tutti
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
