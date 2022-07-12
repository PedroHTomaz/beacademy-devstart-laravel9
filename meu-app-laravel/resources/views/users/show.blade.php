@extends('template.users')
@section('title', "Usuário - {$user->name}")
@section('body')

            <h1>Listagem de Usuários</h1>
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">DATA CADASTRO</th>
                        <th scope="col">VISUALIZAR</th>
                        <th scope="col">EXCLUIR</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ date('d/m/Y - H:i', strtotime ($user->created_at)) }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">EDITAR</a>
                        </td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">EXCLUIR</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
@endsection