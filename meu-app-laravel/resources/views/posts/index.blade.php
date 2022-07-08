@extends('template.users')
@section('title', 'Listagem de Postagens')
@section('body')

<h1>Listagem de Postagens</h1>
<a href="{{ route('users.create') }}" class="btn btn-outline-dark">Novo Usuário</a>
    <table class="table">
        <thead class="text-center">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">USUÁRIO</th>
                <th scope="col">TÍTULO</th>
                <th scope="col">POSTAGEM</th>
                <th scope="col">DATA CADASTRO</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->post }}</td>
                <td>{{ date('d/m/Y - H:i', strtotime ($post->created_at)) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">
    </div>
@endsection