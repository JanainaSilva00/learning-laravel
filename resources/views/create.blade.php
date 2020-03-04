@extends('templates.template')
@section('content')
    <h1 class="text-center">Cadastrar</h1>
    <hr>

    <div class="col-8 m-auto">
        <form name="form_cad" id="formCad" method="post" action="{{ url('books') }}">
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Nome do Livro">
            <select class="form-control" name="id_user" id="id_user">
                <option>Selecione</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <input class="form-control" type="text" name="pages" id="pages" placeholder="Paginas">
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço">
            <input class="btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection
