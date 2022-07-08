@extends('template.users')
@section('title', "Listagem de Postagens do {$user->name}")
@section('body')
    <h1>Postagens do {{ $user->name }}</h1>
    @foreach($posts as $post)
        <div class="mb-3">
            <label class="form-laabel">Identificação N°:<br><b>{{ $post->id }}</b></label>
            <br>
            <label class="form-laabel">Status:<br><b>{{ $post->active?'Ativo':'Inativo' }}</b></label>
            <br>
            <label class="form-laabel">Título:<br><b>{{ $post->title }}</b></label>
            <label class="form-laabel">Postagem:<br></label>
            <textarea class="form-control" rows="3">Postagem:{{ $post->post }}</textarea>
        </div>
    @endforeach
@endsection