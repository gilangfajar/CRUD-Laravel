@extends('adminlte.master')

@section('content')
@foreach($jawaban as $key => $jawaban)
<div class="card-body"> 
        <label for="jawaban">Answer</label>
        <input type="text" disabled class="form-control" value="{{ $jawaban->isi }}" name="jawaban">
</div>
    @endforeach
@endsection