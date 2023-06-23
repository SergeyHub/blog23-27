
{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Post </h1>
@stop

@section('plugins.Summernote', true)

@section('content')

    @php
        $config = [
            'height' => '200',
            'toolbar' => [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                //['table', ['table']],
                //['insert', ['link', 'picture', 'video']],
                //['view', ['fullscreen', 'codeview', 'help']],
            ],
        ];
    @endphp

    <div class="col-md-6">
        <x-adminlte-card>
            <div class="row">
                <x-adminlte-input name="title" label="Title" placeholder="Post title"
                                  fgroup-class="col-md-12" disable-feedback />
                <x-adminlte-text-editor name="teConfig"
                                        label-class="text-danger" igroup-size="sm"
                                        placeholder="Write some text..." :config="$config"/>
            </div>
        </x-adminlte-card>
    </div>

@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-6">
           <form action="{{ route('admin.post.store') }}" method="POST">
               @csrf
                <div class="form-group" class="'w-25">
                    <input type="text" class="form-control" name="title" placeholder="Enter Post Name">
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
