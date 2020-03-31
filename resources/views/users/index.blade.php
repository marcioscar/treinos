@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <a href="{{route('users.create')}}" class="btn btn-success float-right">Novo Usuário</a>
        <h2>Usuários</h2>
        <div class="clearfix"></div>
    </div>
    @include('layouts.alerts')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Aluno</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>@if($user->is_aluno)
                    <span class="badge badge-success">Aluno</span>
                @else
                    <span class="badge badge-danger">Adm</span>
                @endif
            </td>

            <td><div class="btn-group"><a href="{{route('users.show',['user'=>$user->id])}}" class="btn btn-sm btn-primary">Editar</a>
            <form action="{{route('users.destroy',['user'=>$user->id])}}" method="POST">
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

    {{ $users->links() }}
</div>
@endsection
