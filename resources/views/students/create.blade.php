@extends('layouts.layout')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Student</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <div>
    <a href="{{ route('students.index') }}" class="btn btn-primary">View</a>
    </div>
      <form method="post" action="{{ route('students.store') }}">
          @csrf
          <div class="form-group">    
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="adm_no">Admission Number:</label>
              <input type="text" class="form-control" name="adm_no"/>
          </div>
          <div class="form-group">
              <label for="gender">Gender:</label>
              <input type="text" class="form-control" name="gender"/>
          </div>
          <div class="form-group">
              <label for="date_of_birth">Date Of Birth:</label>
              <input type="date" class="form-control" name="date_of_birth"/>
          </div>
          <div class="form-group">
              <label for="enrollment_date">Enrollment Date:</label>
              <input type="date" class="form-control" name="enrollment_date"/>
          </div>   
          <div class="form-group">
              <label for="home_address">Home Address:</label>
              <input type="text" class="form-control" name="home_address"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Add student</button>
      </form>
  </div>
</div>
</div>
@endsection