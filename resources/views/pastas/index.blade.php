@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <h1 class="mb-5">Lista dei tipi di pasta</h1>


        <table class="table mb-5">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>

                @foreach ($pastas as $pasta)

                <tr>
                    <td>{{$pasta->title}}</td>
                    <td><a class="btn btn-info" href="{{route('pastas.show', $pasta->id)}}">Visualizza</a></td>
                </tr>
                    
                @endforeach


            </tbody>
          </table>


          <a href="{{route('pastas.create')}}" class="btn btn-primary">Aggiungi una pasta</a>

    </div>
@endsection