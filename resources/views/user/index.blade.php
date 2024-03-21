@extends('layouts.app')

@section('title', 'Usuários')
@section('content')
<div>
    <h1>Usuários</h1>
    <div class = "text-end">
        <a href="users/create" class="btn btn-success">
            Cadastrar
        </a>
        <a href="/logout" class="btn btn-danger">
            Sair
        </a>
    </div>
    </div>
    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user -> name}}</td>
                <td>{{ $user -> email}}</td>
                <td class = "text-end">
                    <a href="user/{{ $user->id }}" class="btn btn-info btn-sm mt-1 btn-lg">
                        Detalhes
                    </a>
                    <form action = "user/{{ $user->id }}/delete" method="POST">
                        @method('DELETE')
                        @csrf        
                        <button type="submit" class="btn btn-danger btn-sm mt-1 btn-lg">excluir</button>                
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection