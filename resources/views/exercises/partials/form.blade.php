
<div class="form-group">
{!! Form::label('name', 'Nome') !!}
{!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('description', 'Descrição') !!}
{!! Form::text('description', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('repetition', 'Repetição') !!}
{!! Form::text('repetition', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('charge', 'Carga') !!}
{!! Form::text('charge', null, ['class'=>'form-control']) !!}
</div>
<div xlass="form-group">
{!! Form::label('week', 'Semana') !!}
{!! Form::text('week', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Grupo', 'Grupo Muscular') !!}
{!! Form::select('group_id', $groups, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('image', 'Imagem') !!}
    {!! Form::file('image', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('OK', ['class'=>'btn btn-md btn-success']) !!}
</div>
