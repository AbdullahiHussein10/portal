@extends('layouts.layout')


@section('main')
<div class="row">
    <div class="col-sm-5 col-sm-2">
        <h1 class="text-muted, display=6">Update a student</h1>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('students.update', $students->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $students->first_name }} />
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" name="last_name" value={{ $students->last_name }} />
            </div>

            <div class="form-group">
                <label for="adm_no">adm_no:</label>
                <input type="text" class="form-control" name="adm_no" value={{ $students->adm_no }} />
            </div>
            <div class="form-group">
                <label for="gender">gender:</label>
                <input type="text" class="form-control" name="gender" value={{ $students->gender }} />
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date Of Birth:</label>
                <input type="date" class="form-control" name="date_of_birth" value={{ $students->date_of_birth }} />
                </div>
            <div class="form-group">
                <label for="enrollment_date">Enrollment Date:</label>
                <input type="date" class="form-control" name="enrollment_date" value={{ $students->enrollment_date }} />
            </div>
            <div class="form-group">
                <label for="home_address">Home Address:</label>
                <input type="text" class="form-control" name="home_address" value={{ $students->home_address }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection