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
            <input type="text" name="marca" class="form-control" value="{{ old('marca') }}" aria-describedby="helpId"
                required minlength="3" maxlength="10">
            @if ($errors->has('marca'))
                <small class="alert-danger">
                    {{ $errors->first('marca') }}
                </small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Modelo</label>
            <input type="text" name="modelo" value="{{ old('modelo') }}" required minlength="3" maxlength="20"
                class="form-control" placeholder="" aria-describedby="helpId">
            @if ($errors->has('modelo'))
                <small class="alert-danger">
                    {{ $errors->first('modelo') }}
                </small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Versão</label>
            <input type="text" name="versao" maxlength="20" value="{{ old('versao') }}" class="form-control"
                placeholder="" aria-describedby="helpId">
            @if ($errors->has('versao'))
                <small class="alert-danger">
                    {{ $errors->first('versao') }}
                </small>
            @endif
        </div>

        <div class="form-group">
            <label for="">Descrição</label>
            <input type="text" name="descricao" maxlength="200" value="{{ old('descricao') }}" class="form-control"
                placeholder="" aria-describedby="helpId">
            @if ($errors->has('descricao'))
                <small class="alert-danger">
                    {{ $errors->first('descricao') }}
                </small>
            @endif
        </div>
        <br>

        <button class="btn btn-primary">Enviar</button>
        <a href="{{ route('tip.index') }}" class="btn btn-danger">Cancelar</a>
    </form>

@endsection
