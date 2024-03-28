@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Students</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <form action="{{ route('students.search') }}" method="GET">
            <input type="text" value="<?= isset($_GET['query']) ? $_GET['query']: ''?>" name="query" class="p-1" placeholder="Search by name">
            <select name="class" class="p-1" style="background-color:#fff; color:#000">
              <option value="">Select Class</option>
              @foreach ($classes as $k1 => $class)
              <option value="{{$class->id}}" <?= (isset($_GET['class']) && $_GET['class'] == $class->id ? 'selected' : '')?>>{{$class->name}}</option>
              @endforeach
            </select>
            <button type="submit" class="btn btn-secondary">Search</button>
            <a  href="{{ route('students.list') }}" class="btn btn-secondary">Clear Filter</a>
        </form>
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
                <h3 class="card-title">Students</h3>

                <div class="card-tools">
                  <ul class="float-right">
                    <a href="{{ route('students.add') }}"><button class= "btn btn-primary">+ Add New</button></a>
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
                      <th>Email</th>
                      <th>Age</th>
                      <th>Roll Number</th>
                      <th>Class</th>
                      <th>Image</th>
                      <th>Created At</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($students as $key => $student)
                    <tr>
                      <td>{{ $student->id }}</td>
                      <td>{{ $student->name }}</td>
                      <td>{{ $student->email }}</td>
                      <td>{{ $student->age }}</td>
                      <td>{{ $student->roll_number }}</td>
                      <td><span class="badge {{ $key % 3 === 0 ? 'bg-success' : ($key % 3 === 1 ? 'bg-danger' : 'bg-warning') }}">{{ $student->student_class->name }}</span></td>
                      <td>
                        @if(!empty($student->image))
                        <img src="{{ url('/' . $student->image) }}" style="height:50px; width:50px; border-radius:50%" alt="User Image">
                        @else
                        {{"---"}}
                        @endif
                    </td>
                      <td>{{ $student->created_at }}</td>
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