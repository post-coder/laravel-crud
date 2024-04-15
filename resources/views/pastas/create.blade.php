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
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
          @error('title')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror"  id="type" name="type" value="{{old('type')}}">
            @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="src" class="form-label">Src immagine</label>
            <input type="text" class="form-control @error('src') is-invalid @enderror" id="src" name="src" value="{{old('src')}}">
            @error('src')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="cooking-time" class="form-label">Tempo di cottura</label>
            <input type="text" class="form-control @error('cooking-time') is-invalid @enderror" id="cooking-time" name="cooking-time" value="{{old('cooking-time')}}">
            @error('cooking-time')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="weight" class="form-label">Peso</label>
            <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{old('weight')}}">
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