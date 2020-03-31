@extends('layouts.app')

@section('content')
<h1>Cadastro de Exercícios</h1>
{{-- <form action="{{route('exercises.store')}}" method="post">
    @csrf --}}

{!! Form::open(['route'=>'exercises.store', 'class'=>'form', 'files' => true]) !!}

@include('exercises.partials.form')

    {!! Form::close() !!}
{{-- </form> --}}
@endsection
