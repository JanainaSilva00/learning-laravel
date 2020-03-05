@extends('templates.template')
@section('content')
    <h1 class="text-center">Cadastrar</h1>
    <hr>

    <div class="col-8 m-auto">
        @if (isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        <form name="form_cad" id="formCad" method="post" action="{{ url('books') }}">
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Nome do Livro" required>
            <select class="form-control" name="id_user" id="id_user" required>
                <option>Selecione</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <input class="form-control" type="text" name="pages" id="pages" placeholder="Paginas" required>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço" required>
            <input class="btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>
@endsection
