@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
    <li class="breadcrumb-item"><a href="{{route('home')}}">Treino</a></li>
      <li class="breadcrumb-item active" aria-current="page">Exercício</li>
    </ol>
  </nav>

<h1>{{ $treinos[0]->name }}</h1>

<div class="row row-cols-1 row-cols-md-3">
    @forelse($treinos as $treino)
    <div class="col mb-4">
        <div class="card h-100">
            <img  src="{{ url("storage/$treino->image") }}" class="card-img-top" alt="imagem">
            <div class="card-body">
                <h5 class="card-title">{{ $treino->name }}</h5>
                <p class="card-text-success"><small class="text-muted">Descrição</small></p>
                <p class="card-text">{{ $treino->description }}</p>
                <p class="card-text"><small class="text-muted">Repetições</small></p>
                <p class="card-text">{{ $treino->repetition }}</p>
                <p class="card-text"><small class="text-muted">Carga</small></p>
                <p class="card-text">{{ $treino->charge }}</p>
            </div>
        </div>
    </div>
    @empty
    @endforelse
</div>




{{-- <table class="table table-striped">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Repetição</th>
            <th>Carga</th>
        </tr>
    </thead>
    <tbody>
        @forelse($treinos as $treino)
        <tr>
            <td>{{$treino->description}}</td>
            <td>{{$treino->repetition}}</td>
            <td>{{$treino->charge}}</td>
        </tr>

        @empty
        <tr>
            <td colspan="4">Sem registros</td>
        </tr>
        @endforelse
    </tbody>
</table> --}}

@endsection
