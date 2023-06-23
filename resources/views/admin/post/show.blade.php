{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="col-sm-6 d-flex align-items-center">
    <h1 class="m-0 mr-4">{{ $post->title }}</h1>
    <a href="{{ route('admin.post.edit', $post->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i>/Edit Article</a>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-8">
            <div class="card">
                 <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Titre de l'article</th>
                            <th>Le contenu de l'article</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                        </tr>
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td><a href="{{ route('admin.post.show', $post->id) }}"></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
