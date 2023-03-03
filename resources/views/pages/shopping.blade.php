@extends('base')

@extends('navbar')

@section('content')

<div class="container m-3" style="overflow-x: hidden;">
    <livewire:index/>
    <style>
        .grid {
            display: flex;
            overflow-x: scroll;
            padding: 10px;
            width: 350px;
            height: 230px;
            scroll-snap-type: x mandatory;
            scroll-padding: 24px;
            border-radius: 5px;
            gap: 12px;
            margin: 2rem auto;
            background-color: rgba(64, 155, 241, 0.349);
        }

        .grid .grid-item {
            flex: 0 0 100%;
            padding: 2px 24px 24px 24px;
            border-radius: 5px;
            scroll-snap-align: start;
            background-color: rgba(91, 222, 245, 0.438);
            color: rgb(1, 22, 141);
        }
    </style>
</div>

@endsection
