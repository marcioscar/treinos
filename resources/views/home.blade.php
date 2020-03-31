@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Treino</li>
    </ol>
  </nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
        <caixa qtd='2' titulo="Quadriceps" cor='#f19800' icone="fas fa-users-cog" url="{{route('treino', 'quadriceps')}}"></caixa>
        </div>
        <div class="col-md-4">
            <caixa qtd='2' titulo="Posterior" cor='#bd0026' icone="fas fa-male" url="{{route('treino', 'posterior')}}" ></caixa>
        </div>

        <div class="col-md-4">
            <caixa qtd='2' titulo="Glúteos" cor='#009cde' icone="fas fa-walking" url="{{route('treino', 'gluteos')}}"></caixa>
        </div>

        <div class="col-md-4">
            <caixa qtd='2' titulo="Peitoral" cor='#4da92c' icone="fas fa-user-alt" url="{{route('treino', 'peitoral')}}"></caixa>
        </div>

        <div class="col-md-4">
            <caixa qtd='2' titulo="Ombro" cor='#00bd97' icone="fas fa-user-shield" url="{{route('treino', 'ombro')}}"></caixa>
        </div>

        <div class="col-md-4">
            <caixa qtd='2' titulo="Abdome" cor='#9bde00' icone="fas fa-user-edit" url="{{route('treino', 'abdome')}}"></caixa>
        </div>

        <div class="col-md-4">
            <caixa qtd='2' titulo="Panturrilha" cor='#872ca9' icone="fas fa-drumstick-bite" url="{{route('treino', 'panturrilha')}}"></caixa>
        </div>

        <div class="col-md-4">
            <caixa qtd='2' titulo="Superiores I" cor='#0058f1' icone="fas fa-user-check" url="{{route('treino', 'superior 1')}}"></caixa>
        </div>

        <div class="col-md-4">
            <caixa qtd='2' titulo="Superiores II" cor='#f10059' icone="fas fa-people-carry" url="{{route('treino', 'superior 2')}}"></caixa>
        </div>

        <div class="col-md-4">
            <caixa qtd='2' titulo="Costas" cor='#f19800' icone="fas fa-hiking" url="{{route('treino', 'costas')}}"></caixa>
        </div>

        <div class="col-md-4">
            <caixa qtd='2' titulo="Bíceps" cor='#bd0026' icone="fas fa-code-branch" url="{{route('treino', 'bíceps')}}"></caixa>
        </div>

        <div class="col-md-4">
            <caixa qtd='2' titulo="Tríceps" cor='#009cde' icone="fas fa-user-ninja" url="{{route('treino', 'tríceps')}}"></caixa>
        </div>


    </div>



@endsection
