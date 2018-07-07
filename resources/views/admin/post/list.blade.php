@extends('layout.admin')

@section('content')
<table class="table">
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Conteúdo</th>
        <th>Apagado?</th>
        <th>Ações</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->titulo }}</td>
        <td>{{ $post->conteudo }}</td>
        <td>{{ $post->deleted_at == null ? 'Não' : 'Sim' }}</td>
        <td>
            <a href="{{ url('/admin/post/' . $post->id) }}">
                <button class="btn btn-primary">Editar</button>
            </a>
            <button class="btn btn-danger" onclick="apagar('{{ url('/admin/post/' . $post->id .'/delete') }}')">Apagar</button>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ url('/admin/post/') }}">Criar um novo post</a>

<script>
function apagar(url) {
    if (confirm('Deseja apagar esse post?')) {
        location.href = url;
    }
}
</script>

@endsection