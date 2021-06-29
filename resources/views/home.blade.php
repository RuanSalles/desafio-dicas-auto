@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div class="container">
            <section class="justify-content-center">
                <div class="justify-content-center">
                    <h2 class="mb-0">
                        Bem vindo
                    </h2>
                    <br>
                    <h3>Últimas dicas</h3>
                    <div class="container">

                        <form action="{{ route('home') }}" method="GET">
                            <div class="row">
                                <div class="col-4">
                                    <select class="form-select" name="filtro">
                                        <option class="form-control" value="">Filtrar por</option>
                                        <option class="form-control" value="tipo">Tipo</option>
                                        <option class="form-control" value="marca">Marca</option>
                                        <option class="form-control" value="modelo">Modelo</option>
                                        <option class="form-control" value="versao">Versão</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <input class="form-control" type="text" name="valor" id="">
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-md btn-primary" type="submit">Pesquisar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="subheading mb-5">

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                        <th scope="col">Tipo</th>
                                        <th scope="col">Marca</th>
                                        <th scope="col">Modelo</th>
                                        <th scope="col">Versão</th>
                                        <th scope="col">Descrição</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($tips as $tip)
                                        <tr>

                                            <td scope="row">{{ $tip->tipo }}</td>
                                            <td>{{ $tip->marca }}</td>
                                            <td>{{ $tip->modelo }}</td>
                                            <td>{{ $tip->versao }}</td>
                                            <td>{{ $tip->descricao }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="container">
                                {{ $tips->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>

    @endsection
