@extends('layouts/app')

@section('content')
<div class="container py-5">
    <h1 class="mb-5">La casa della pasta: la Casta.</h1>

    <h2 class="mb-4">Vuoi esplorare la nostra offerta?</h2>

    <a href="{{route('pastas.index')}}" class="btn btn-outline-primary">Guarda tutti i nostri tipi di pasta</a>
</div>
@endsection