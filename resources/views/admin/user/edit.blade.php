
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-6">
           <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="'w-25">
               @csrf
               @method('PATCH')
               <div class="form-group">
                   <input type="text" class="form-control" name="name" placeholder="Enter User Name">
                   @error('name')
                        <div class="text-danger">{{ $message }}</div>
                   @enderror
               </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" placeholder="Email"
                    value="{{ $user->email }}">

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
               <!-- Select User's roles -->
               <div class="form-group w-50">
                   <label>Select Role</label>
                   <select class="form-control" name="role">
                       @foreach($roles as $id => $role)
                           <option value="{{ $id }}"
                               {{ $id == $user->role ? 'selected' : '' }}>
                               {{ $role }}
                           </option>
                       @endforeach
                   </select>
                   @error('role')
                        <div class="text-danger">{{ $message }}</div>
                   @enderror
               </div>
               <div class="form-group w-50">
                   <input type="hidden" name="user_id" value="{{ $user->id }}">
               </div>
                <input type="submit" class="btn btn-primary" value="Edit">
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
