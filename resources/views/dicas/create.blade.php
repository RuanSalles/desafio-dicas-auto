@extends('dicas.layouts.app')

@section('content')

<form method="POST" action="{{ route('tip.store') }}">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="">Tipo</label>
      <input type="text" name="tipo" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>

    <div class="form-group">
        <label for="">Marca</label>
        <input type="text" name="marca" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>

      <div class="form-group">
        <label for="">Modelo</label>
        <input type="text" name="modelo" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>

      <div class="form-group">
        <label for="">Versão</label>
        <input type="text" name="versao" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>

      <div class="form-group">
        <label for="">Descrição</label>
        <input type="text" name="descricao" id="" class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <br>

      <button class="btn btn-primary">Enviar</button>
</form>

@endsection
    
