@extends('site.common.basic')

@section('title', $title)


@section('content')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div style="width: 30%; margin-inline: auto; margin-top:2rem">
            <form action="{{ route('site.loginCreate') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" class="borda-preta" required>
                <input type="password" name="password" placeholder="Senha" class="borda-preta" required>
                <button>Logar</button>
            </form>
        </div>
    </div>
@endsection
