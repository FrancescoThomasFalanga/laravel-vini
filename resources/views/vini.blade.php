@extends('layouts/main')

@section('content')
    
    <div class="container flex">

        @foreach ($wines as $wine)
            
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <a href="{{route('viniExtra')}}?index={{$loop->index}}">
                        <h5 class="card-title p-2 text-center {{ $wine->color }}">{{ $wine->name }} <i class="fa-solid fa-wine-glass"></i></h5>
                    </a>
                    <h6 class="card-subtitle mb-2">{{ $wine->type }}</h6>
                    <p class="card-text">{{ $wine->year }} - {{ $wine->winery }}</p>
                    <p>Colore: {{ $wine->color }}</p>
                    <p>Gradazione: {{ $wine->gradation }}%</p>
                    <p>Estratto: {{ $wine->extract }}g/l</p>
                    <p>Acidità: {{ $wine->acidity }}g/l</p>
                </div>
            </div>

        @endforeach

    </div>

@endsection