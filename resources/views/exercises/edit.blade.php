@extends('layouts.app')

@section('content')
    {!! Form::model($exercise, ['route'=>['exercises.update',$exercise->id], 'class'=>'form', 'files' => true]) !!}
        @method('put')
        @include('exercises.partials.form')
    {!! Form::close() !!}

    {{-- Apagar --}}
    {!! Form::open(['route'=>['exercises.destroy', $exercise->id], 'class'=>'form']) !!}
    @method('DELETE')
    <button type="submit" class="btn btn-lg btn-danger">Apagar Exercicio</button>
    {!! Form::close() !!}
@endsection
