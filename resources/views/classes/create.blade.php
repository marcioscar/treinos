@extends('layouts.app')

@section('content')
<h1>Cadastro de Classes</h1>
{!! Form::open(['route'=>'classes.store', 'class'=>'form']) !!}

    @include('classes.partials.form')

{!! Form::close() !!}

@endsection
