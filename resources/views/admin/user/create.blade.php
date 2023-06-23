
{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create User </h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-6">
           <form action="{{ route('admin.user.store') }}" method="POST" class="'w-25">
               @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Enter User Name">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
               <div class="form-group">
                   <input type="text" class="form-control" name="email" placeholder="Enter User Email">
                   @error('email')
                        <div class="text-danger">{{ $message }}</div>
                   @enderror
               </div>
               <div class="form-group">
                   <input type="text" class="form-control" name="password" placeholder="Password">
                   @error('password')
                        <div class="text-danger">{{ $message }}</div>
                   @enderror
               </div>
               <!-- Select User's roles -->
               <div class="form-group w-50">
                   <label>Select Role</label>
                   <select class="form-control" name="role">
                       @foreach($roles as $id => $role)
                           <option value="{{ $id }}"
                               {{ $id == old('role') ? 'selected' : '' }}>
                               {{ $role }}
                           </option>
                       @endforeach
                   </select>
                   @error('role')
                        <div class="text-danger">{{ $message }}</div>
                   @enderror
               </div>
                <input type="submit" class="btn btn-primary" value="Create User">
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
