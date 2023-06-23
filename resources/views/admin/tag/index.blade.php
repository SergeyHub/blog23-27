{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Blog Tags</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-2 mb-3">
            <a href="{{ route('admin.tag.create') }}" class="btn btn-bloc btn-primary">Create Tag</a>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="card">
                 <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        {{--@dd($category)--}}
                        <tr>
                            <th>ID</th>
                            <th>Nom de la balise</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th class="text-center" colspan="2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->title }}</td>
                                <td>{{ $tag->created_at }}</td>
                                <td>{{ $tag->updated_at }}</td>
                                <td><a href="{{ route('admin.tag.show', $tag->id) }}"><i class="far fa-eye"></i></a></td>
                                <td><a href="{{ route('admin.tag.edit', $tag->id) }}" class="text-success"><i class="fas fa-pencil-alt"></i></a></td>
                                <td>
                                    <form action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
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
