@extends('layouts.app')

@section('content')

{!! Form::model($class, ['route'=>['classes.update',$class->id], 'class'=>'form']) !!}
        @method('put')
        @include('classes.partials.form')
{!! Form::close() !!}

<hr>

{!! Form::open(['route'=>['classes.destroy', $class->id], 'class'=>'form']) !!}
    @method('DELETE')
    <button type="submit" class="btn btn-lg btn-danger">Apagar Aula</button>

{!! Form::close() !!}

@endsection
