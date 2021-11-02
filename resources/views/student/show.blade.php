@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
  <div class="card">
    <div class="card-header">{{ __('STUDENT DATA') }}</div>
    <div class="card-body">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
      <a href="/students" class="btn btn-secondary">Back</a> <br><br>
      <div class="paragraf">
        NIM : {{ $student->nim }}<br>
        Name : {{ $student->name }}<br>
        Class : {{ $student->kelas->class_name }}<br>
        Department : {{ $student->department }} <br>
        Phone Number : {{ $student->phone_number }} <br>
        Created at : {{ $student->created_at }} <br>
        Updated at : {{ $student->updated_at }} <br>
      </div>
    </div>
</div>
</div>
</div>
</div>
@endsection
