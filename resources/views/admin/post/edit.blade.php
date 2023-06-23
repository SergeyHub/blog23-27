
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Post</h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-12">
           <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
               @csrf
               @method('PATCH')
               <div class="form-group">  <!-- Post title -->
                   <div class="col-6">
                       <input type="text" class="form-control" name="title"
                              placeholder="Enter Post Name" value="{{ $post->title }}">
                       @error('title')
                            <div class="text-danger">Required field</div>
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
                           {{ $post->content }}
                           </textarea>
                       @error('content')
                       <div class="text-danger">Required field</div>
                       @enderror
                   </div>
               </div>

               <div class="form-group w-50">
                   <label for="photo">Add Preview Image</label>
                   <div class="w-25 mb-2">
                       <img src="{{url('storage/' . $post->preview_image) }}" alt="preview_image" class="w-50">
                   </div>

                   <input type="file" class="form-control"
                          name="preview_image" id="preview_image">
                   @error('preview_image')
                   <div class="text-danger">Required field</div>
                   @enderror
               </div>

               <div class="form-group w-50">
                   <label for="photo">Add Main Image</label>
                   <div class="w-50 mb-2">
                       <img src="{{ url('storage/' . $post->main_image) }}" alt="main_image" class="w-50">
                   </div>
                   <input type="file" class="form-control"
                          name="main_image" id="main_image">
                   @error('main_image')
                   <div class="text-danger">Required field</div>
                   @enderror
               </div>

               <div class="form-group w-50">
                   <label>Select Category</label>
                   <select class="form-control" name="category_id">
                       @foreach($categories as $category)
                           <option value="{{ $category->id }}"
                               {{ $category->id == $post->category_id ? 'selected' : '' }}>
                               {{ $category->title }}
                           </option>
                       @endforeach
                   </select>
               </div>

               <!-- Select Tags -->
               <div class="form-group">
                   <label>Select Tag</label>
                   <div>
                       <select class="select2" name="tag_ids[]" multiple="multiple"
                               data-placeholder="Select Tags" style="width: 50%;">
                           @foreach($tags as $tag)
                               <option
                                   {{ is_array( $post->tags->pluck('id') ) && in_array($tag->id, $post->tags->plug('id')) ? 'selected' : '' }}
                                   value="{{ $tag->id }}" >
                                   {{ $tag->title }}
                               </option>
                           @endforeach

                       </select>
                   </div>
               </div>

               <div class="form-group">
                   <input type="submit" class="btn btn-primary" value="Edit">
               </div>
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
