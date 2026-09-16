@extends('layouts.main')


@section('trains_eight')
    <table class="train-table">
        <thead class="train-head">
            <tr class="train-row">
                <th class="train-head-cell">Codice Treno</th>
                <th class="train-head-cell">Azienda</th>
                <th class="train-head-cell">Tipo di treno</th>
                <th class="train-head-cell">Binario di arrivo</th>
                <th class="train-head-cell">Stazione di partenza</th>
                <th class="train-head-cell">Stazione di arrivo</th>
                <th class="train-head-cell">Data e ora di partenza</th>
                <th class="train-head-cell">Data e ora di arrivo</th>
                <th class="train-head-cell">Numero di carrozze</th>
                <th class="train-head-cell">In orario</th>
                <th class="train-head-cell">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains_at_eight as $train)
            <x-train-entry>
                <x-slot:train_number>{{ $train['train_number'] }}</x-slot>
                <x-slot:company>{{ $train['company'] }}</x-slot>
                <x-slot:type>{{ $train['type'] }}</x-slot>
                <x-slot:platform>{{ $train['platform'] }}</x-slot>
                <x-slot:departure_station>{{ $train['departure_station'] }}</x-slot>
                <x-slot:arrival_station>{{ $train['arrival_station'] }}</x-slot>
                <x-slot:departure_datetime>{{ $train['departure_datetime'] }}</x-slot>
                <x-slot:arrival_datetime>{{ $train['arrival_datetime'] }}</x-slot>
                <x-slot:carriages>{{ $train['carriages'] }}</x-slot>
                <x-slot:is_on_time>{{ $train['is_on_time'] }}</x-slot>
                <x-slot:is_cancelled>{{ $train['is_cancelled'] }}</x-slot>
            </x-train-entry>
            @endforeach
        </tbody>
    </table>
@endsection
@section('trains_eleven')
    <table class="train-table">
        <thead class="train-head">
            <tr class="train-row">
                <th class="train-head-cell">Codice Treno</th>
                <th class="train-head-cell">Azienda</th>
                <th class="train-head-cell">Tipo di treno</th>
                <th class="train-head-cell">Binario di arrivo</th>
                <th class="train-head-cell">Stazione di partenza</th>
                <th class="train-head-cell">Stazione di arrivo</th>
                <th class="train-head-cell">Data e ora di partenza</th>
                <th class="train-head-cell">Data e ora di arrivo</th>
                <th class="train-head-cell">Numero di carrozze</th>
                <th class="train-head-cell">In orario</th>
                <th class="train-head-cell">Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains_at_eleven as $train)
            <x-train-entry>
                <x-slot:train_number>{{ $train['train_number'] }}</x-slot>
                <x-slot:company>{{ $train['company'] }}</x-slot>
                <x-slot:type>{{ $train['type'] }}</x-slot>
                <x-slot:platform>{{ $train['platform'] }}</x-slot>
                <x-slot:departure_station>{{ $train['departure_station'] }}</x-slot>
                <x-slot:arrival_station>{{ $train['arrival_station'] }}</x-slot>
                <x-slot:departure_datetime>{{ $train['departure_datetime'] }}</x-slot>
                <x-slot:arrival_datetime>{{ $train['arrival_datetime'] }}</x-slot>
                <x-slot:carriages>{{ $train['carriages'] }}</x-slot>
                <x-slot:is_on_time>{{ $train['is_on_time'] }}</x-slot>
                <x-slot:is_cancelled>{{ $train['is_cancelled'] }}</x-slot>
            </x-train-entry>
            @endforeach
        </tbody>
    </table>
@endsection