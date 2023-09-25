@extends('layouts.app')

@section('page-title', $album['title'])

@section('main-content')
<div class="row">
    <div class="col">
        <h2 class="fw-bold">
            Your Albums
        </h2>

        <div class="card w-50 p-3 bg-dark text-light fs-5">
            <div class="mb-1">
               <span class="fw-bold">ID:</span> <span>{{ $album->id }}</span>
            </div>
            <div class="mb-1">
                <span class="fw-bold">TITLE:</span> <span>{{ $album->title }}</span>
            </div>
            <div class="mb-1">
                <span class="fw-bold">YEAR:</span> <span>{{ $album->year }}</span>
            </div>
            <div class="mb-1">
                <span class="fw-bold">DESCRIPTION:</span> <span>{{ $album->description }}</span>
            </div>
            <div class="mb-1">
                <span class="fw-bold">COUNTRY:</span> <span>{{ $album->country }}</span>
            </div>
        </div>
    </div>
</div>
@endsection
