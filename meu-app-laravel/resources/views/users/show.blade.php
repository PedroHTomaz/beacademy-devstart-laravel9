@extends('template.users')
@section('title', $title)
@section('body')

            <h1>Listagem de Usuários</h1>
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">DATA CADASTRO</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/Y - H:i', strtotime ($user->created_at)) }}</td>
                        <td>
                            <a href="" class="btn btn-warning">EDITAR</a>
                            <a href="" class="btn btn-danger">EXCLUIR</a>
                        </td>
                    </tr>
                </tbody>
            </table>
@endsection