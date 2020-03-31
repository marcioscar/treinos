
<div class="form-group">
{!! Form::label('aula', 'Aula') !!}
{!! Form::text('aula', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::select('dia', ['segunda-feira' => 'segunda-feira', 'terça-feira' => 'terça-feira','quarta-feira' => 'quarta-feira','quinta-feira' => 'quinta-feira','sexta-feira' => 'sexta-feira','sabado' => 'sabado'], null, ['placeholder' => 'Dia da Semana','class'=> 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('hora', 'Hora') !!}
    {!! Form::time('hora', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::select('tipo', ['ginastica' => 'Ginástica', 'danca' => 'Dança','piscina' => 'Piscina','luta' => 'Luta'], null, ['placeholder' => 'Tipo','class'=> 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('OK', ['class'=>'btn btn-md btn-success']) !!}
</div>

