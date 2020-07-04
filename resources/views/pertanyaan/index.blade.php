@extends('adminlte.master')


@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataPertanyaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataPertanyaan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <tr>
                <td>
                <a href="{{ url('/pertanyaan/create')}}"><button type="button" class="btn btn-block btn-default float-right" >Create Question</button></a>
                </td>
                </tr>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>List Questions</th>
                    <th>Form Answer</th>
                    <th>Detail Actions</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($pertanyaan as $key => $pertanyaan)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $pertanyaan->judul }}</td>
                    <td>{{ $pertanyaan->isi }}</td>
                    <td>
                <form action="{{ url('/jawaban/'.$pertanyaan->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="isi" placeholder="Enter Answer">
                    </div>
                    <div class="form-group">
                        <input hidden value="{{$pertanyaan->id}}" type="text" class="form-control" name="pertanyaan_id">
                    </div>
                    <div class="form-group">
                        <input hidden value="{{\Carbon\Carbon::now()}}" type="text" class="form-control" name="tanggal_dibuat">
                    </div>
                    <div class="form-group">
                        <input hidden value="{{\Carbon\Carbon::now()}}" type="text" class="form-control" name="tanggal_diperbarui">
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                    </td>
                    <td><a href="{{ url('/jawaban/'. $pertanyaan->id)}}"><button type="button" class="btn btn-block btn-info btn-sm">Detail answer</button></a> <br> <a href="{{ url('/pertanyaan/'. $pertanyaan->id)}}"><button type="button" class="btn btn-block btn-info btn-sm">Detail question</button></a></td>
                    <td><a href="{{ url('/pertanyaan/'.$pertanyaan->id. '/edit')}}"><button type="button" class="btn btn-block btn-warning btn-sm">Update</button></a> <br> <form action="{{ url('/pertanyaan/'. $pertanyaan->id)}}" method="POST"> @csrf {{ method_field('delete') }} <button type="submit" class="btn btn-block btn-danger btn-sm">Delete question</button></form></td>
                  </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
<script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush