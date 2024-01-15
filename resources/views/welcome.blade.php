@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="container pb-2">
            <div class="row row-cols-5 gy-3">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div style="height: 650px" class="card">
                            <div class="card-body">
                                <div>
                                    <img class="w-100" src="{{ $movie->image }}" alt="">
                                </div>
                                <div style="height: 300px" class="mt-2 text-center">
                                    <h2>{{ $movie->title }}</h2>
                                    <h2>{{ $movie->original_title }}</h2>
                                    <span>{{ $movie->nationality }}</span>
                                    <p>{{ $movie->date }}</p>
                                    <p>{{ $movie->vote }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
