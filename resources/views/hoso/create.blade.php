@extends('pages.layout.layouts')

@section('content')
<section class="content-header" style="background-color:#dcedc8">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create book Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('books.index')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('books.index')}}">User</a> </li>
              <li class="breadcrumb-item active">Create book Form</li>
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
              <form role="form" action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleid">Mã sách</label>
                    <input type="text" class="form-control" id="id_masach" placeholder="Nhập mã sách" name="id_masach" value="{{old('id_masach')}}">
                  </div>
                 <div class="form-group">
                    <label for="exampleName">Tên sách</label>
                    <input type="text" class="form-control" id="tensach" placeholder="Nhập tên sách" name="tensach" value="{{old('tensach')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tác giả</label>
                    <input type="text" class="form-control" id="tacgia" placeholder="Nhập tên tác giả" name="tacgia" value="{{old('tacgia')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Thể loại</label>
                    <select name="id_benhvien" class="browser-default custom-select">
                      @foreach($type as $value)
                        <option value="{{$value->id_theloai}}" >{{$value->tentheloai}}</option>  
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleDanhso">Nhà Xuất Bản</label>
                    <input type="text" class="form-control" id="nhaxuatban" placeholder="Nhập nhà xuất bản" name="nhaxuatban" value="{{old('nhaxuatban')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleNgaysinh">Năm xuất bản</label>
                    <input type="text" class="form-control" id="namxuatban" placeholder="Nhập năm xuất bản" name="namxuatban" value="{{old('namxuatban')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputGioitinh">Số lượng</label>
                    <input type="text" class="form-control" id="soluong" placeholder="Nhập số lượng" name="soluong" value="{{old('soluong')}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleNgaykham">Ngôn ngữ</label>
                    <input type="text" class="form-control" id="ngonngu" placeholder="Nhập ngôn ngữ" name="ngonngu" value="{{old('ngonngu')}}">
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
