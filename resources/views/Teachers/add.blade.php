@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Student</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('teachers.store') }}" method="POST">
                    @csrf
                    <label for="name">Teacher Name:</label>
                    <input type="text" id="name" class="form-control" name="name" required>
                    <label for="name">Teacher Email:</label>
                    <input type="email" id="email" class="form-control" name="email" required>
                    <label for="name">Teacher Age:</label>
                    <input type="text" id="age" class="form-control" name="age" required>
                    <label for="name">Teacher Gender:</label>
                    <select  id="gender" class="form-control" name="sex" required>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select>
                    <label for="classes">Select Classes:</label>
                    <select name="classes[]" class="form-control" id="classes" multiple>
                        @foreach($classes as $class)
                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                        @endforeach
                    </select>
                
                    <label for="subjects">Select Subjects:</label>
                    <select name="subjects[]" class="form-control" id="subjects" multiple>
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                    </select>
                
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
                
                </div>
                <!-- /.card -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
  