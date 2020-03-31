@extends('layouts.app')

@section('content')
<h1>Cadastro de Usuários</h1>

{!! Form::open(['route'=>'users.store','class'=>'form']) !!}

@include('users.partials.form')

{!! Form::close() !!}

@endsection
