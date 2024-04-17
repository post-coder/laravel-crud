@extends('layouts/app')

@section('content')
<div id="homepage" class="container py-5">

    <header>
        <img src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?q=80&w=2432&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Pasta">
    </header>
    <h1 class="mb-5">La casa della pasta.</h1>

    <h2 class="mb-4">Vuoi esplorare la nostra offerta?</h2>

    <div class="text-center">

        <a href="{{route('pastas.index')}}" class="btn btn-outline-primary">Guarda tutti i nostri tipi di pasta</a>
    </div>
</div>
@endsection