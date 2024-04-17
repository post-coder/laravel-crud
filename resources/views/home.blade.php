@extends('layouts/app')

@section('content')
<div id="homepage" class="container py-5">
    <h1 class="mb-5">La casa della pasta.</h1>

    <div class="text-center">

        <a href="{{route('pastas.index')}}" class="btn btn-outline-primary">Guarda tutti i nostri tipi di pasta</a>
    </div>
</div>
@endsection