@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{route('exercises.create')}}" class="btn btn-success float-right">Novo Exercicio</a>
        <h2>Exercicios</h2>
        <div class="clearfix"></div>
    </div>
    @include('layouts.alerts')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Repetição</th>
                <th>Carga</th>
                <th>Semana</th>
                <th>Grupo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($exercises as $exercise)
            <tr>
            <td>{{$exercise->id}}</td>
            <td>{{$exercise->name}}</td>
            <td>{{$exercise->description}}</td>
            <td>{{$exercise->repetition}}</td>
            <td>{{$exercise->charge}}</td>
            <td>{{$exercise->week}}</td>
            <td>{{$exercise->group->title}}</td>
            <td><div class="btn-group"><a href="{{route('exercises.show',['exercise'=>$exercise->id])}}" class="btn btn-sm btn-primary">Editar</a>
            <form action="{{route('exercises.destroy',['exercise'=>$exercise->id])}}" method="POST">
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

    {{ $exercises->links() }}
</div>
@endsection
