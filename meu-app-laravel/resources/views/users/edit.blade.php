@extends('template.users')
@section('title', "Usuário {$user->name}")
@section('body')
<h1>Usuário {{$user->name}}</h1>

  @if($errors->any())

    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
          {{ $error }}<br>
        @endforeach
    </div>

  @endif

<form action="{{ route('users.update') }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
  <div class="mb-3">
    <label for="name">NOME</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
  </div>
  <div class="mb-3">
    <label for="email">EMAIL</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
  </div>
  <div class="mb-3">
    <label for="password">SENHA</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Selecione uma imagem</label>
    <input type="file" class="form-control form control md" id="image" name="image">
  </div>
  <button type="submit" class="btn btn-primary">ATUALIZAR</button>
</form>
@endsection
