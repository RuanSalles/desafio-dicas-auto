@extends('dicas.layouts.app')

@section('content')


    <div class="subheading mb-5">
        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Versão</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tips as $tip)
                        <tr>
                            <th scope="row">{{ $tip->id }}</th>
                            <td>{{ $tip->tipo }}</td>
                            <td>{{ $tip->marca }}</td>
                            <td>{{ $tip->modelo }}</td>
                            <td>{{ $tip->versao }}</td>
                            <td>{{ $tip->descricao }}</td>
                            <td>

                                <form action="{{ route('tip.destroy', $tip->id) }}" method="POST">
                                    <a href="{{ route('tip.edit', $tip->id) }}" class="btn btn-sm btn-outline-info">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger deleteButton"><i
                                            class="far fa-trash-alt"></i></button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="container">
                {{ $tips->links() }}
            </div>
        </div>

    @endsection
