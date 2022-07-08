@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

    <h1>Listagem de Usuários</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm mt-2 mb-5">
                <a href="{{ route('users.create') }}" class="btn btn-outline-dark">Novo Usuário</a>
            </div>
            <div class="col-sm mt-2 mb-5">
                <form action="{{ route('users.index') }}" method="GET">
                    <div class="input-group">
                        <input type="search" class="form-control rounded" name="search">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <table class="table">
        <thead class="text-center">
            <tr>
                <th scope="col">FOTO</th>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">POSTAGENS</th>
                <th scope="col">DATA CADASTRO</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($users as $user)
            <tr>
                @if($user->image)
                    <th><img src="{{ asset('storage/'.$user->image) }}" width="50px" height="50px" class="rounded-circle"></th>
                @else
                    <th><img src="{{ asset('storage/profile/avatar.jpg') }}" width="50px" height="50px" class="rounded-circle"></th>
                @endif
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ 'posts.show', $user->id }}" class="btn btn-outline-dark">POSTAGEM - {{ $user->posts->count() }}</a>
                </td>
                <td>{{ date('d/m/Y - H:i', strtotime ($user->created_at)) }}</td>
                <td><a href="{{ 'users.show', $user->id }}" class="btn btn-primary text white">VISUALIZAR</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection