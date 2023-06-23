
{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Post </h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
               <form method="POST" action="{{ route('admin.post.store') }}" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                        <div class="col-6">
                            <input type="text" class="form-control" name="title"
                                   placeholder="Enter Post Name" value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                   <div class="form-group">
                       <div class="col-6">
                           <label for="description">Content</label>
                           <textarea type="text" class="form-control"
                                     name="content"
                                     id="content" rows="5"
                                     placeholder="Enter post content">
                           </textarea>
                           @error('content')
                                <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>
                   </div>

                   <div class="form-group w-50">
                       <label for="photo">Add Preview Image</label>
                       <input type="file" class="form-control"
                              name="preview_image" id="preview_image">
                       @error('preview_image')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="form-group w-50">
                       <label for="photo">Add Main Image</label>
                       <input type="file" class="form-control"
                              name="main_image" id="main_image">
                       @error('main_image')
                            <div class="text-danger">{{ $message }}</div>
                       @enderror
                   </div>

                   <div class="form-group w-50">
                       <label>Select Category</label>
                       <select class="form-control" name="category_id">
                           @foreach($categories as $category)
                               <option value="{{ $category->id }}"
                                {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                  {{ $category->title }}
                               </option>
                           @endforeach
                       </select>
                       @error('category_id')
                       <div class="text-danger">{{ $message }}</div>
                       @enderror
                   </div>

                   <!-- Select Tags -->
                   <div class="form-group">
                       <label>Select Tag</label>
                       <div>
                           <select class="select2" name="tag_ids[]" multiple="multiple"
                                   data-placeholder="Select Tags" style="width: 50%;">
                               @foreach($tags as $tag)
                                   <option
                                       {{ is_array(old('tag_ids')) && in_array($tag->id, old('tags_ids')) ? 'selected' : '' }}
                                           value="{{ $tag->id }}" >
                                        {{ $tag->title }}
                                   </option>
                               @endforeach
                           </select>
                           @error('tag_ids')
                           <div class="text-danger">{{ $message }}</div>
                           @enderror
                       </div>
                   </div>

                   <div class="form-group">
                       <input type="submit" class="btn btn-primary" value="Create">
                   </div>
                </form>
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
