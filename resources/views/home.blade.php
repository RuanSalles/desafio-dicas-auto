@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0">
        <div class="container">
            <section class="justify-content-center">
                <div class="justify-content-center">
                    <h2 class="mb-0">
                        Bem vindo implementando layout
                    </h2>
                    <br>
                    <h3>Últimas dicas</h3>
                    <div class="subheading mb-5">

                        <table class="table table-responsive table-striped">
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



                    </div>
            </section>
        </div>
    @endsection
