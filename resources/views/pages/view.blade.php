@extends('base')

@extends('navbar')

@section('content')

<div class="container m-3">
    <livewire:view :shoppingId="$id"/>
</div>

@endsection
