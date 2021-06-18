@extends('layout.base')

@section('title', 'Registro de Usuario')
@section('content')
<section>
    <h2>Cadastro</h2>
    <form class="form-register" action="{{route('save')}}" method="post">
        {{ csrf_field() }}
        <label>
            <span>Nome</span>
            <input type="text" name="name" />

            @if($errors->has('name'))
                @foreach($errors->get('name') as $erro)
                    <strong>{{ $erro }}</strong>
                @endforeach
            @endif
        </label>
        <label>
            <span>E-mail</span>
            <input type="text" name="email" />
            @if($errors->has('email'))
                @foreach($errors->get('email') as $erro)
                    <strong>{{ $erro }}</strong>
                @endforeach
            @endif
        </label>
        <label>
            <span>Senha</span>
            <input type="password" name="password" />
            @if($errors->has('password'))
                @foreach($errors->get('password') as $erro)
                    <strong>{{ $erro }}</strong>
                @endforeach
            @endif
        </label>
        <input type="submit" value="Enviar" />
    </form>
    <link rel="{{ asset('asset/css/register/form.css')}}" href="style.css">
</section>
@endsection
