@extends('layouts.master')
@section('title', 'Edit User')
@section('content')
    <div class="container-fluid px-4">
        <div class="card mt-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            <div class="card-header">
                <h4>Edit Post</h4>
                <a href="{{ url('admin/users') }}" class="btn btn-danger float-end">Back</a>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="">Full Name</label>
                    <p class="form-control">{{ $user->name }}</p>
                </div>
                <div class="mb-3">
                    <label for="">Email ID</label>
                    <p class="form-control">{{ $user->email }}</p>
                </div>
                <div class="mb-3">
                    <label for="">Created at</label>
                    <p class="form-control">{{ $user->created_at->format('d/m/y') }}</p>
                </div>
                <form action="{{ url('admin/update-user/'. $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">Role as</label>
                        <select name="role_as" id="" class="form-control">
                            <option value="1" {{$user->role_as == '1' ? 'selected' : ''}}>Admin</option>
                            <option value="0" {{$user->role_as == '0' ? 'selected' : ''}}>User</option>
                            <option value="2" {{$user->role_as == '2' ? 'selected' : ''}}>Blogger</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update User Role</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
