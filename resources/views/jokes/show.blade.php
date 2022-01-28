@extends('layouts.main')

@section('content')
    <section class="container">
        <h1 class="text-center mb-5">{{ $joke->title }}</h1>
        <div class="row">
            <div class="col-md-6">
                <div>{!! $joke->body !!}</div>
                <div class="text-end">{{ $joke->author }}</div>
                <div class="text-end">{{ $joke->date_of_publication }}</div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $joke->image }}" alt="{{ $joke->title }}">
            </div>
        </div>
    </section>
@endsection