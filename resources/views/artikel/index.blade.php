@extends('layouts.app')

@section('css')    
  <link rel="stylesheet" href="{{asset('public/assets/dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/assest/dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection


@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
<li class="breadcrumb-item active">Artikel</li>
@endsection

@section('title-page')
    <h1 class="m-0 text-dark">Artikel</h1>
@endsection

@section('content')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Manajemen Artikel</h3>
      <a href="{{route('artikel.new')}}" class="btn btn-sm btn-primary float-right d-none d-sm-inline-block">
        <i class="fas fa-pencil-ruler"></i> 
        Buat Artikel Baru
      </a>
    </div>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th width='1%'>No</th>
          <th>Tanggal</th>
          <th>Artikel</th>
          <th>Penulis</th>
          <th>Sampul</th>
          <th>Kategori</th>
          <th>Status</th>
          <th>Pengunjung</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>1</td>
          <td>2 Agustus 2016</td>
          <td>Ulat Hongkong</td>
          <td>Syakil</td>
          <td>Ceritanya gambar</td>
          <td>Pelatihan</td>
          <td><span class="badge badge-warning right">Pending</span></td>
          <td>250</td>
          <td>

            <button class="btn btn-success">
              <i class="fas fa-eye"></i>
            </button>

            <button class="btn btn-warning">
              <i class="fas fa-pencil-alt"></i>
            </button>

            <button class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </button>

          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>2 Agustus 2016</td>
          <td>Ulat Hongkong</td>
          <td>Syakil</td>
          <td>Ceritanya gambar</td>
          <td>Pelatihan</td>
          <td><span class="badge badge-warning right">Pending</span></td>
          <td>250</td>
          <td>

            <button class="btn btn-success">
              <i class="fas fa-eye"></i>
            </button>

            <button class="btn btn-warning">
              <i class="fas fa-pencil-alt"></i>
            </button>

            <button class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </button>

          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>2 Agustus 2016</td>
          <td>Ulat Hongkong</td>
          <td>Syakil</td>
          <td>Ceritanya gambar</td>
          <td>Pelatihan</td>
          <td><span class="badge badge-danger right">Draft</span></td>
          <td>250</td>
          <td>

            <button class="btn btn-success">
              <i class="fas fa-eye"></i>
            </button>

            <button class="btn btn-warning">
              <i class="fas fa-pencil-alt"></i>
            </button>

            <button class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </button>

          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>2 Agustus 2016</td>
          <td>Ulat Hongkong</td>
          <td>Syakil</td>
          <td>Ceritanya gambar</td>
          <td>Pelatihan</td>
          <td><span class="badge badge-warning right">Pending</span></td>
          <td>250</td>
          <td>

            <button class="btn btn-success">
              <i class="fas fa-eye"></i>
            </button>

            <button class="btn btn-warning">
              <i class="fas fa-pencil-alt"></i>
            </button>

            <button class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </button>

          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>2 Agustus 2016</td>
          <td>Ulat Hongkong</td>
          <td>Syakil</td>
          <td>Ceritanya gambar</td>
          <td>Pelatihan</td>
          <td><span class="badge badge-warning right">Pending</span></td>
          <td>250</td>
          <td>

            <button class="btn btn-success">
              <i class="fas fa-eye"></i>
            </button>

            <button class="btn btn-warning">
              <i class="fas fa-pencil-alt"></i>
            </button>

            <button class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </button>

          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>15 Juni 2016</td>
          <td>Budidaya Ulat Hongkong</td>
          <td>Ahmad</td>
          <td>Ceritanya sampul</td>
          <td>Pelatihan</td>
          <td><span class="badge badge-success right">Publish</span></td>
          <td>1500</td>
          <td>

            <button class="btn btn-success">
              <i class="fas fa-eye"></i>
            </button>

            <button class="btn btn-warning">
              <i class="fas fa-pencil-alt"></i>
            </button>

            <button class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </button>

          </td>
        </tr>
        </tbody>
    </div>
    <!-- /.card-body -->
</div>
@endsection

@section('script')
    
<script src="{{asset('public/assets/dashboard/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/assets/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/assets/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>

<script>
  $('body').addClass('sidebar-collapse');
</script>

@endsection
