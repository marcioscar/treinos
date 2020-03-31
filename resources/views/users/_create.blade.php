@extends('layouts.app')

@section('content')
<h1>Cadastro de Grupo de Exercícios</h1>
<form action="{{route('users.store')}}" method="post">
    @csrf

    <div class="form-group">
        <label for="title">Nome</label>
    <input type="text" name="name" id="title" class="form-control" value="{{old('name')}}">
    </div>

    <div class="form-group">
        <label for="description">Email</label>
        <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
    </div>

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>


    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="is_aluno" name='is_aluno' value="1">
        <label class="form-check-label" for="exampleCheck1">Aluno ?</label>
    </div>




    <button type="submit" class="btn btn-lg btn-success">Novo Usuário</button>
</form>
@endsection
