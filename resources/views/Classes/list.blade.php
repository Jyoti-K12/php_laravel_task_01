@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Class Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Classes</li>
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
                <h3 class="card-title">Classes</h3>
                <div class="card-tools">
                  <ul class="float-right">
                    <a href="{{ route('classes.add') }}"><button class= "btn btn-primary">+ Add New</button></a>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th >#</th>
                      <th>Name</th>
                      <th>Created At</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($classes as $key => $class)
                    <tr>
                      <td>{{ $class->id }}</td>
                      <td><span class="badge {{ $key % 3 === 0 ? 'bg-success' : ($key % 3 === 1 ? 'bg-danger' : 'bg-warning') }}">{{ $class->name }}</span></td>
                      <td>{{ $class->created_at }}</td>
                    </tr>
                    @empty
                        <li>No data found</li>
                    @endforelse
                    
                  </tbody>
                </table>
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