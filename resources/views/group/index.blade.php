@extends('layouts.app')


@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{route('groups.create')}}" class="btn btn-success float-right">Novo Grupo</a>
        <h2>Grupos Musculares</h2>
        <div class="clearfix"></div>
    </div>
    @include('layouts.alerts')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($groups as $group)
            <tr>
            <td>{{$group->id}}</td>
            <td>{{$group->title}}</td>
            <td>{{$group->description}}</td>
            <td><div class="btn-group"><a href="{{route('groups.show',['group'=>$group->id])}}" class="btn btn-sm btn-primary">Editar</a>
            <form action="{{route('groups.destroy',['group'=>$group->id])}}" method="POST">
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

    {{ $groups->links() }}
</div>

@endsection
