{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Blog Post</h1>
@stop



@section('content')
    <div class="row">
        <div class="col-2 mb-3">
            <a href="{{ route('admin.post.create') }}" class="btn btn-bloc btn-primary">Create Post</a>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <div class="card">
                 <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap col-8">
                        <thead>
                        {{--@dd($post)--}}
                        <tr>
                            <th>ID</th>
                            <th>Titre de l'article</th>
                            <th>Le contenu de l'article</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th class="text-center" colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td><a href="{{ route('admin.post.show', $post->id) }}"><i class="far fa-eye"></i></a></td>
                                <td><a href="{{ route('admin.post.edit', $post->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                                <td>
                                    <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                           <i class="fas fa-trash text-danger" role="button"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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
