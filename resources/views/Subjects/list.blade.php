@extends('layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subjects Tables</h1>
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
                <h3 class="card-title">Subjects</h3>
                <div class="card-tools">
                  <ul class="float-right">
                    <a href="{{ route('subjects.add') }}"><button class= "btn btn-primary">+ Add New</button></a>
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
                      <th>Available Languages</th>
                      <th>Created At</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($subjects as $key => $subject)
                    <tr>
                      <td>{{ $subject->id }}</td>
                      <td>{{ $subject->name }}</td>
                      <td>
                        @if(count($subject->languages) > 0)
                        @foreach ($subject->languages as $k1 => $language)
                        <span class="badge {{ $k1 % 3 === 0 ? 'bg-success' : ($k1 % 3 === 1 ? 'bg-danger' : 'bg-warning') }}">{{ $language->name }}</span>
                        @endforeach
                        @else
                          {{'---'}}
                        @endif
                      </td>
                      <td>{{ $subject->created_at }}</td>
                    </tr>
                    @empty
                        <tr>No data found</tr>
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