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
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $pasta->title}}">
          @error('title')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{old('description') ?? $pasta->description}}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type') ?? $pasta->type}}">
             @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="src" class="form-label">Src immagine</label>
            <input type="text" class="form-control @error('src') is-invalid @enderror" id="src" name="src" value="{{old('src') ?? $pasta->src}}">
            @error('src')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cooking_time" class="form-label">Tempo di cottura</label>
            <input type="text" class="form-control @error('cooking_time') is-invalid @enderror" id="cooking_time" name="cooking_time" value="{{old('cooking_time') ?? $pasta->cooking_time}}">
            @error('cooking_time')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{old('weight') ?? $pasta->weight}}">
            @error('weight')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</div>

@endsection