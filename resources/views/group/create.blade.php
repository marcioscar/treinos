@extends('layouts.app')

@section('content')
<h1>Cadastro de Grupo de Exercícios</h1>
{!! Form::open(['route'=>'groups.store', 'class'=>'form']) !!}

    @include('group.partials.form')

{!! Form::close() !!}

@endsection
