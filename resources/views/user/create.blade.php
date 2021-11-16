@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
<form action="/users" method="post" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" required="required" name="username"></br>
    </div>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" required="required" name="name"></br>
    </div>

    <div class="form-group"><label for="email">Email</label>
        <input type="text" class="form-control" required="required" name="email"></br>
    </div>

    <div class="form-group"><label for="role">Role</label>
        <select class="form-control" name="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
    </div><br>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" required="required" name="password"></br>
    </div>

    <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
</form>
</div>
</div>
@endsection
