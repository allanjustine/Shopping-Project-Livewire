@extends('base')

@extends('navbar')

@section('content')

<div class="container m-3">
    <livewire:edit :shoppingId="$id"/>
</div>

@endsection
