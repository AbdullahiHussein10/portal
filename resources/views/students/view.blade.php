@extends('layouts.layout')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">students</h1>
    <div>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Create</a>
    </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Admission Number</td>
          <td>Gender</td>
          <td>Date Of Birth</td>
          <td>Enrollment Date</td>
          <td>Home Address</td>
          <td>Tasks</td>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->first_name}} {{$student->last_name}}</td>
            <td>{{$student->adm_no}}</td>
            <td>{{$student->gender}}</td>
            <td>{{$student->date_of_birth}}</td>
            <td>{{$student->enrollment_date}}</td>
            <td>{{$student->home_address}}</td>
            <td>
                <a href="{{ route('students.edit',$student->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('students.destroy', $student->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection