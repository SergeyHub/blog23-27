
{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Tag </h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-6">
           <form action="{{ route('admin.tag.store') }}" method="POST" class="'w-25">
               @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Enter Tag Name">
                    @error('title')
                        <div class="text-danger">Required field</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary" value="Create">
            </form>
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
