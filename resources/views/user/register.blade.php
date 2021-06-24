@extends('layout.base')

@section('title', 'Registro de Usuario')
@section('content')
<section class="d-flex justify-content-center">

    <form class='container-sm col col-lg-4 custom-form' action="{{route('save')}}" method="post">
        <h1>Cadastro</h1>
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="col-form-label"> Nome </label>
            <input class="form-control" type="text" name="name"/>
            @if($errors->has('name'))
                @foreach($errors->get('name') as $erro)
                    <div class="alert alert-danger" role="alert" style='padding: 0 5px;'>
                        {{ $erro }}
                    </div>
                @endforeach
            @endif
        </div>
        <div class="mb-3">
            <label class="col-form-label">E-mail</label>
            <input class="form-control" type="text" name="email" />
            @if($errors->has('email'))
                @foreach($errors->get('email') as $erro)
                    <div class="alert alert-danger" role="alert" style='padding: 0 5px;'>
                        {{ $erro }}
                    </div>
                @endforeach
            @endif
        </div>
        <div class="mb-3">
            <label class="col-form-label">Senha</label>
            <input class="form-control" type="password" name="password" />
            @if($errors->has('password'))
                @foreach($errors->get('password') as $erro)
                    <div class="alert alert-danger" role="alert" style='padding: 0 5px;'>
                        {{ $erro }}
                    </div>
                @endforeach
            @endif
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-outline-dark" type="submit">Enviar</button>
        </div>
    </form>
    <link rel="{{ asset('asset/css/register/form.css')}}" href="style.css">
</section>
@endsection
