@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
  <div class="card">
    <div class="card-header">{{ __('STUDENT REPORT') }}</div>
    <div class="card-body">
      <a href="/students" class="btn btn-secondary">Back</a> <br><br>
          <b></b>NIM : {{ $student->nim }}<br>
          <b></b>Name : {{ $student->name }}<br>
          <b></b>Class : {{ $student->kelas->class_name }}<br><br>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Course Name</th>
                <th>Semester</th>
                <th>SKS</th>
                <th>Score</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($student->courses as $sc)
              <tr>
                <td>{{$sc->course_name}}</td>
                <td>{{$sc->semester}}</td>
                <td>{{$sc->sks}}</td>
                <td>{{$sc->pivot->nilai}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <a href="/students/{{$student->id}}/report" class="btn btn-primary" target="_blank">PRINT PDF</a>
    </div>
</div>
</div>
</div>
</div>
@endsection
