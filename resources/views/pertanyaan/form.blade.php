@extends('adminlte.master')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Question Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Question Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
<section class="content">
<div class="container-fluid">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Please fill out this form</h3>
        </div>
    <form action="{{ url("/pertanyaan")}}" method="POST">
    <div class="card-body"> 
    @csrf
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" aria-describedby="judulHelp" placeholder="Enter Judul">
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
    </div>
    <div class="form-group">
        <input hidden value="{{\Carbon\Carbon::now()}}" type="text" class="form-control" name="tanggal_dibuat">
    </div>
    <div class="form-group">
        <input hidden value="{{\Carbon\Carbon::now()}}" type="text" class="form-control" name="tanggal_diperbarui">
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
</div>
</section>
@endsection