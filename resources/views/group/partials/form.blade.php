
<div class="form-group">
{!! Form::label('title', 'Título') !!}
{!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('description', 'Descrição') !!}
{!! Form::text('description', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('OK', ['class'=>'btn btn-md btn-success']) !!}
</div>

