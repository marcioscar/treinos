@extends('layouts.app')

@section('content')
<h1>Cadastro de Exercícios</h1>
{{-- <form action="{{route('exercises.store')}}" method="post">
    @csrf --}}

{!! Form::open(['route'=>'exercises.store', 'class'=>'form']) !!}

    <div class="form-group">
        <label for="title">Nome</label>
        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
    </div>

    <div class="form-group">
        <label for="description">Descriçao</label>
        <input type="text" name="description" id="description" class="form-control" value="{{old('description')}}">
    </div>

    <div class="form-group">
        <label for="title">Repetição</label>
        <input type="text" name="repetition" id="repetition" class="form-control" value="{{old('repetition')}}">
    </div>

    <div class="form-group">
        <label for="title">Carga</label>
        <input type="text" name="charge" id="charge" class="form-control" value="{{old('charge')}}">
    </div>

    <div class="form-group">
        <label for="title">Semana</label>
        <input type="text" name="week" id="week" class="form-control" value="{{old('week')}}">
    </div>

    <div class="form-group">
        <label for="group_id">Grupo Muscular</label>
        <select name="group_id" id="group_id">
            <option value="">Escolha</option>
            @foreach($groups as $group)
                <option value="{{$group->id}}">{{$group->title}}</option>
            @endforeach
        </select>
    </div>


    <button type="submit" class="btn btn-lg btn-success">Criar Exercicio</button>

    {!! Form::close() !!}
{{-- </form> --}}
@endsection
