@extends('layouts.app')

@section('content')
<form action="{{route('exercises.update',['exercise'=>$exercise->id])}}" method="post">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="title">Nome</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$exercise->name}}">
    </div>

    <div class="form-group">
        <label for="description">Descriçao</label>
        <input type="text" name="description" id="description" class="form-control" value="{{$exercise->description}}">
    </div>

    <div class="form-group">
        <label for="title">Repetição</label>
        <input type="text" name="repetition" id="repetition" class="form-control" value="{{$exercise->repetition}}">
    </div>

    <div class="form-group">
        <label for="title">Carga</label>
        <input type="text" name="charge" id="charge" class="form-control" value="{{$exercise->charge}}">
    </div>

    <div class="form-group">
        <label for="title">Semana</label>
        <input type="text" name="week" id="week" class="form-control" value="{{$exercise->week}}">
    </div>


    <div class="form-group">
        <label for="group_id">Grupo Muscular</label>
        <select name="group_id" id="group_id">
            <option value="">Escolha</option>
            @foreach($groups as $group)
                <option value="{{$group->id}}"
                    @if($group->id == $exercise->group_id) selected @endif
                >{{$group->title}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-lg btn-success">Atualizar Exercicio</button>
</form>
<hr>
<form action="{{route('exercises.destroy',['exercise'=>$exercise->id])}}" method="POST">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-lg btn-danger">Apagar Exercício</button>
</form>
@endsection
