@extends('layouts/default')


@section('title')
    Treni
@endsection


@section('main')

    <div class="container">

        <h1>TRENI</h1>

        <div class="row row-cols-1">

            @foreach ($trains as $train)
                
                <div class="col mb-3">
                    
                    <x-train-card :train="$train">
                        
                    </x-train-card>

                    {{-- @dd($train) --}}

                </div>

            @endforeach


        </div>

    </div>

@endsection


{{-- @dd($trains) --}}