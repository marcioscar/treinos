@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{route('classes.create')}}" class="btn btn-success float-right">Nova Aula</a>
        <h2>Aulas</h2>
        <div class="clearfix"></div>
    </div>
    @include('layouts.alerts')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Aula</th>
                <th>Dia</th>
                <th>Hora</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($classes as $class)
            <tr>
            <td>{{$class->aula}}</td>
            <td>{{$class->dia}}</td>
            <td>{{$class->hora}}</td>
            <td>{{$class->tipo}}</td>
            <td><div class="btn-group"><a href="{{route('classes.show',['class'=>$class->id])}}" class="btn btn-sm btn-primary">Editar</a>
            <form action="{{route('classes.destroy',['class'=>$class->id])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
            </form>
            </div>
            </td>
            </tr>

            @empty
            <tr>
                <td colspan="4">Sem registros</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $classes->links() }}
</div>

@endsection
