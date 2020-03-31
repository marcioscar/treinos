<div class="form-group">
    {!! Form::label('name', 'Nome') !!}
    {!! Form::text('name', null, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class'=>'form-control', 'required']) !!}
</div>
<div class="form-group">
    {!! Form::label('password', 'Senha') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::select('is_aluno', ['1' => 'Aluno', '0' => 'Adm'], null, ['placeholder' => 'É aluno?','class'=> 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('OK', ['class'=>'btn btn-md btn-success']) !!}
</div>
