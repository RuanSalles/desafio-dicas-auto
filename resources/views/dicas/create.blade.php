@extends('dicas.layouts.app')

@section('content')

    <form method="POST" action="{{ route('tip.store') }}">
        @csrf
        @method('POST')



        <div class="form-group">

        </div>
        <div class="form-group">
            <label for="">Tipo</label>
            <select class="form-select" name="tipo" id="" required>
                <option class="form-control" value="">Tipo do veículo</option>
                <option class="form-control" value="Carro">Carro</option>
                <option class="form-control" value="Caminhão">Caminhão</option>
                <option class="form-control" value="Moto">Moto</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">Marca</label>
            <input type="text" name="marca" class="form-control" placeholder="" aria-describedby="helpId" required
                minlength="3" maxlength="10">
        </div>

        <div class="form-group">
            <label for="">Modelo</label>
            <input type="text" name="modelo" required minlength="3" maxlength="20" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Versão</label>
            <input type="text" name="versao"  maxlength="20" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="descricao"  maxlength="200" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <br>

        <button class="btn btn-primary">Enviar</button>
        <a href="{{ route('tip.index') }}" class="btn btn-danger">Cancelar</a>
    </form>

@endsection
