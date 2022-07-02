@extends('template.users')
@section('title', 'Novo Usuário')
@section('body')
    <h1>Novo Usuário</h1>

    @if($errors->any())

      <div class="alert alert-danger" role="alert">
          @foreach($errors->all() as $error)
            {{ $error }}<br>
          @endforeach
      </div>

    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
      <div class="mb-3">
        <label for="name">NOME</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="nome">
      </div>
      <div class="mb-3">
        <label for="email">EMAIL</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="password">SENHA</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">ENVIAR</button>
    </form>
@endsection