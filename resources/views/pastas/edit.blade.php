@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="mb-4">Modifica la pasta</h1>

    {{-- @dd($pasta) --}}

    <form action="{{route('pastas.update', $pasta->id)}}" method="POST">
        @csrf

        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Nome</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$pasta->title}}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" rows="4">{{$pasta->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" value="{{$pasta->type}}">
        </div>

        <div class="mb-3">
            <label for="src" class="form-label">Src immagine</label>
            <input type="text" class="form-control" id="src" name="src" value="{{$pasta->src}}">
        </div>

        <div class="mb-3">
            <label for="cooking-time" class="form-label">Tempo di cottura</label>
            <input type="text" class="form-control" id="cooking-time" name="cooking-time" value="{{$pasta->cooking_time}}">
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="text" class="form-control" id="weight" name="weight" value="{{$pasta->weight}}">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</div>

@endsection