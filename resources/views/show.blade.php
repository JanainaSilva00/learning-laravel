@extends('templates.template')
@section('content')
    <h1 class="text-center">Visualizar</h1>
    <hr>

    <div class="col-8 m-auto">
        @php
        $user = $book->find($book->id)->relUsers
        @endphp
        <span>Titulo: {{ $book->title }}</span><br>
        <span>Paginas: {{ $book->pages }}</span><br>
        <span>Preço: {{ $book->price}}</span><br>
        <span>Autor: {{ $user->name }}</span><br>
        <span>Autor: {{ $user->email }}</span><br>
    </div>
@endsection
