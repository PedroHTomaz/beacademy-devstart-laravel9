@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

    <div class="justify-content-center m-5">
        <div class="card" style="width: 18rem;">
            <img src=" {{ asset('storage/dashboard-image') }}" class="card-img-top" alt="Dash">
            <div class="card-body">
                <h5 class="card-title">Bem vindo ao DashBoard</h5>
                <p class="card-text">#pay.livre #be.academy #laravel</p>
            </div>
        </div>
    </div>

@endsection