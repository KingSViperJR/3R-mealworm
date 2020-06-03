@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{asset('public/assets/dashboard/plugins/summernote/summernote-bs4.css')}}">
@endsection


@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('artikel')}}">Artikel</a></li>
<li class="breadcrumb-item active">Artikel Baru</li>
@endsection

@section('title-page')
    <h1 class="m-0 text-dark">
      Artikel
      <small style="color:grey">Tulis Artikel Baru</small>
    </h1>
@endsection

@section('content')
<div class="row">
  {{-- kolom editor --}}
  <div class="col-lg-9">
    <div class="card">
     <form action="" method="post">
      <div class="card-body pad">


        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Konten">
        </div>


        <div class="form-group">
        <label for="konten">Konten</label>
        <div class="mb-3">
          <textarea class="textarea" placeholder="Place some text here" id="konten" name="konten" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    {{-- card --}}
  </div>
  {{-- /col --}}
  {{-- /kolom editor --}}

  {{-- kolom kategori --}}
  <div class="col-lg-3">
    <div class="card">
      
      <div class="card-body">
        <div class="form-group">
          <label>Kategori</label>
            <select name = "kategori" class="custom-select">
              <option>option 1</option>
              <option>option 2</option>
              <option>option 3</option>
              <option>option 4</option>
              <option>option 5</option>
            </select>
        </div>
        <div class="form-group">
          <label for="sampul">Sampul Gambar</label>
          <input type="file" class="form-control" id="sampul" name="sampul">
        </div>

        <button type="button" class="btn btn-block btn-warning btn-sm">Draft</button>
        <button type="button" class="btn btn-block btn-success btn-sm">Publish</button>
      </div>
      <!-- /.card-body -->
    </div>
    </form> 
    {{-- /card --}}
  </div>
  {{-- /col --}}
  {{-- /kolom kategori --}}

</div>
{{-- /row --}}
@endsection

@section('script')

<script>
  $('body').addClass('sidebar-collapse');
</script>

<script src="{{asset('public/assets/dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    $('.textarea').summernote()
  });
</script>
@endsection
