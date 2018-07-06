@extends('layout.admin')

@section('content')

<form action="{{ url('/admin/post/save') }}" method="POST">
    @csrf
    <div>
        <label for="titulo">Título do post</label>
        <input type="text" name="titulo">
    </div>
    <div>
        <label for="conteudo">Conteúdo do post</label>
        <textarea name="conteudo" id="" cols="30" rows="10"></textarea>
    </div>
    <button>Salvar</button>
</form>

@endsection