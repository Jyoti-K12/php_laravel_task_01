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
                  <form action="{{ route('students.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="col-md-6">
                    <label for="name">Email:</label>
                    <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" class="form-control" value="{{ old('age') }}" required>
                    @error('age')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <label for="image">Image:</label>
                    <input type="file" id="image" class="form-control" name="image">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleSelectBorder">Class Name <code>(Assign Class)</code></label>
                      <select name="class_id" class="custom-select form-control-border" id="exampleSelectBorder">
                        <option value="">Select</option>
                        @foreach ($classes as $key => $class)
                        <option value="{{ $class->id}}">{{ $class->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="roll_number">Roll Number:</label>
                    <input type="text" id="roll_number" class="form-control" name="roll_number" value="{{ old('roll_number') }}" required>
                    @error('roll_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                    <input type="hidden" name="role" value="student">
                    </div>
                    <div class="card-footer">
                      <input type="submit" class="btn btn-primary" value="Submit"/>
                    </div>
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