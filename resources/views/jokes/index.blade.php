@extends('layouts.main')

@section('content')
    <section class="container">
        <h1 class="text-center">Jokes Archive</h1>

        <table class="table table-stripped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jokes as $joke)
                    <tr>
                        <th>{{ $joke->id }}</th>
                        <th>{{ $joke->title }}</th>
                        <th>{{ $joke->author }}</th>
                        <th>
                            <a href="{{ route('jokes.show', $joke->id) }}" class="btn btn-success">SHOW</a>
                        </th>
                        <th>
                            EDIT
                        </th>
                        <th>
                            DELETE
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection