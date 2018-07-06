@extends('layout.admin')

@section('content')

<form action="{{ url('/admin/post/save/' . $post->id) }}" method="POST">
    @csrf
    <div>
        <label for="titulo">Título do post</label>
        <input type="text" name="titulo" value="{{ old('titulo', $post->titulo) }}">
    </div>
    <div>
        <label for="conteudo">Conteúdo do post</label>
        <textarea name="conteudo" id="" cols="30" rows="10">{{ old('conteudo', $post->conteudo) }}</textarea>
    </div>
    <button>Salvar</button>
</form>

@endsection