@extends('layouts.app')

@section('main-content')
<h1>
    Today's trains
</h1>
<ul>
    @forelse ($trains as $train)
        <li>
            <h5>
                {{ $train->company }}: From {{ $train->departure_station }} to {{ $train->arrival_station }}
            </h5>
            <p>
                {{ $train->departure_time }} -> {{ $train->arrival_time }}
                {{ $train->train_code }}, wagons: {{ $train->number_of_carriages }},
                {{ ($train->on_time) ? 'on time' : 'delayed' }},
                {{ ($train->canceled) ? 'CANCELLED' : '' }}
            </p>
        </li>
    @empty
        <li>
            There are no trains available today...
        </li>
    @endforelse
</ul>
@endsection