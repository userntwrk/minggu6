@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
  <div class="card">
    <div class="card-header">{{ __('USER DATA') }}</div>
    <div class="card-body">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
      <a href="/users" class="btn btn-secondary">Back</a> <br><br>
      <div class="paragraf">
        ID : {{ $user->id }}<br>
        Name : {{ $user->name }}<br>
        E-Mail : {{ $user->email }}
      </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
