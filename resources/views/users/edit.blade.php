@extends('layouts.app')

@section('content')

{!! Form::model($user, ['route'=>['users.update',$user->id], 'class'=>'form']) !!}
        @method('put')
        @include('users.partials.form')
    {!! Form::close() !!}

    {{-- Apagar --}}
    {!! Form::open(['route'=>['users.destroy', $user->id], 'class'=>'form']) !!}
    @method('DELETE')
    <button type="submit" class="btn btn-lg btn-danger">Apagar Usuario</button>
    {!! Form::close() !!}

@endsection
