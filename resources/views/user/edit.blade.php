@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
<form action="/users/{{$user->id}}" method="post">
    {{csrf_field()}}
    @method('PUT')
    <input type="hidden" name="id" value="{{$user->id}}"></br>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"></br>
    </div>

    <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="text" class="form-control" required="required" name="email" value="{{$user->email}}"></br>
    </div>

    <button type="submit" name="edit" class="btn btn-primary float-right">Save Changes</button>
</form>

</div>
</div>
@endsection
