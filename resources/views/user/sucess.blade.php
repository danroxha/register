@extends('layout.base')

@section('title', 'Registro de Usuario')
@section('content')
<section>
    <h1>Cadastrado de {{ $user }} com sucesso</h1>
    <a href="{{route('register')}}"></a>
</section>
@endsection
