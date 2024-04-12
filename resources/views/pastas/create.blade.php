@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1>Aggiungi una pasta</h1>


    {{-- nel form scriviamo il nome della rotta come action --}}
    {{-- indichiamo anche il metodo POST per la richiesta --}}
    <form action="{{route('pastas.store')}}" method="POST">

        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Nome</label>
          <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>

        <div class="mb-3">
            <label for="src" class="form-label">Src immagine</label>
            <input type="text" class="form-control" id="src" name="src">
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Tempo di cottura</label>
            <input type="text" class="form-control" id="cooking-time" name="cooking-time">
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="text" class="form-control" id="weight" name="weight">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</div>

@endsection