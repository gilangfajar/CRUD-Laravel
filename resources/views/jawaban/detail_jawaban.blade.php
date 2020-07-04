@extends('adminlte.master')

@section('content')

<div class="card-body"> 
        <label for=""><h1>Pertanyaan</h1></label> <br>
        <label for="judul">Judul</label>
        <input type="text" disabled class="form-control" value="{{ $pertanyaan->judul }}" name="judul">
        <label for="isi">Isi</label>
        <input type="text" disabled class="form-control" value="{{ $pertanyaan->isi }}" name="isi">
        <label for="tanggal_dibuat">Tanggal dibuat</label>
        <input type="text" disabled class="form-control" value="{{ $pertanyaan->tanggal_dibuat }}" name="tanggal_dibuat">
        <label for="tanggal_diperbarui">Tanggal diperbarui</label>
        <input type="text" disabled class="form-control" value="{{ $pertanyaan->tanggal_diperbarui }}" name="tanggal_diperbarui">
        <label for=""><h1>Jawaban/s</h1></label> <br>
        @foreach($jawaban as $jawaban)
        <input type="text" disabled class="form-control" value="{{ $jawaban->isi }}" name="isi">
        @endforeach
</div>
@endsection