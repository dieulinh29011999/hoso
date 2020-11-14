@extends('pages.layout.layouts')

@section('content')
<section class="content-header" style="background-color:#dcedc8">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TẠO LOẠI SÁCH</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('loaiphong.index')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('loaiphong.index')}}">Loại sách</a> </li>
              <li class="breadcrumb-item active">Tạo loại sách</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>
    @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif
    <section class="content"   style="background-color:#dcedc8">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary"  style="background-color:#e8f5e9">
              <div class="card-header">
                <div class="card-title"> 
                  <strong>INFORMATION</strong>
                </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('loaiphong.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                 <div class="form-group">
                    <label for="exampleName">Mã loại hồ sơ</label>
                    <input type="text" class="form-control" id="id_loai" placeholder="Mã loại" name="id_loai" value="{{old('id_loai')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên loại hồ sơ</label>
                    <input type="text" class="form-control" id="id_phong" placeholder="Tên loại" name="id_phong" value="{{old('id_phong')}}">
                  </div>                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

@endsection
