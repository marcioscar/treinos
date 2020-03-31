@extends('layouts.app')

@section('content')
{!! Form::model($group, ['route'=>['groups.update',$group->id], 'class'=>'form']) !!}
        @method('put')
        @include('group.partials.form')
{!! Form::close() !!}

<hr>

{!! Form::open(['route'=>['groups.destroy', $group->id], 'class'=>'form']) !!}
    @method('DELETE')
    <button type="submit" class="btn btn-lg btn-danger">Apagar Grupo</button>

{!! Form::close() !!}

@endsection
