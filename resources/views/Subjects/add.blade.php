@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Classes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subjects</li>
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
                <h3 class="card-title">Add New Subject</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Subject</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('subjects.store') }}" method="post">
                    @csrf
                    <div class="card-body">
                      <div class="form-group">
                        <label for="class-name">Subject Name</label>
                        <input type="name" name="name" class="form-control" value="{{ old('name') }}" id="class-name" placeholder="Enter Subject Name">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectBorder">Class Name <code>(Assign Class)</code></label>
                        <select name="class_id" class="custom-select form-control-border" id="exampleSelectBorder">
                          <option value="">Select</option>
                          @foreach ($classes as $key => $class)
                          <option value="{{ $class->id}}">{{ $class->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      {{-- <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                    <!-- /.card-body -->
    
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