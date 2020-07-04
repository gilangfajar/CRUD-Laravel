@extends('adminlte.master')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Question Update</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Question Update</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
<section class="content">
<div class="container-fluid">
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Please fill out this form</h3>
        </div>
    <form action="{{ url('/pertanyaan/' .$id)}}" method="POST">
{{ method_field('put') }}
    <div class="card-body">
    @csrf
    <div class="form-group">
        <input hidden name="id" value="{{ $id}}"
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" value="{{ $pertanyaan->judul}}" name="judul">
    </div>
    <div class="form-group">
        <label for="isi">Isi</label>
        <input type="text" class="form-control" id="isi" value="{{ $pertanyaan->isi}}" name="isi">
    </div>
    <div class="form-group">
        <input type="text" hidden value="{{ $pertanyaan->tanggal_dibuat}}" class="form-control" name="tanggal_dibuat">
    </div>
    <div class="form-group">
        <input hidden type="text" value="{{ \Carbon\Carbon::now() }}" class="form-control" name="tanggal_diperbarui">
    </div>
        <button type="submit" class="btn btn-warning">Update question</button>
    </div>
    </form>
    </div>
</div>
</section>
@endsection