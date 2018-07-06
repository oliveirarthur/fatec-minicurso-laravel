@extends('layout.admin')

@section('content')
<table>
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Conteúdo</th>
        <th>Ações</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->titulo }}</td>
        <td>{{ $post->conteudo }}</td>
        <td>
            <a href="{{ url('/admin/post/' . $post->id) }}">
                <button>Editar</button>
            </a>
        </td>
    </tr>
    @endforeach
</table>
@endsection