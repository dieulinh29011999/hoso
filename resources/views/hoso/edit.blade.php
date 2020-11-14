@extends('pages.layout.layouts')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Book: {{$book->tensach}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('books.index')}}">Book</a> </li>
              <li class="breadcrumb-item active">Edit Book </li>
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
    <section class="content">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {!! Form::model($books, ['method' => 'PATCH','route' => ['books.update', $book->id_masach], 'files'=>true]) !!}
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleMa">Mã Sách</label>
                    <input type="text" class="form-control" id="id_masach" placeholder="Mã Sách" name="id_masach" value="{{$book->id_masach}}">
                  </div>
                 <div class="form-group">
                    <label for="exampleName">Tên Sách</label>
                    <input type="text" class="form-control" id="tensach" placeholder="Tên Sách" name="tensach" value="{{$book->tensach}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleTacgia">Tác Giả</label>
                    <input type="text" class="form-control" id="tacgia" placeholder="Tác giả" name="tacgia" value="{{$book->tacgia}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Loại sách</label>
                    <select name="id_benhvien" class="browser-default custom-select">
                      @foreach($type as $value)
                        <option value="{{$value->id_theloai}}" >{{$value->tentheloai}}</option>  
                      @endforeach
                    </select>
                  </div>
                  <label for="exampleDanhso">Nhà Xuất Bản</label>
                  <input type="text" class="form-control" id="nhaxuatban" placeholder="Nhập Nhà Xuất Bản" name="nhaxuatban" value="{{$book->nhaxuatban}}">
                </div>
                <div class="form-group">
                  <label for="exampleNgaysinh">Năm Xuất Bản</label>
                  <input type="text" class="form-control" id="nagysinh" placeholder="Enter ngày sinh" name="ngaysinh" value="{{$book->namxuatban}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputGioitinh">Số Lượng</label>
                  <input type="text" class="form-control" id="soluong" placeholder="Số Lượng" name="soluong" value="{{$book->soluong}}">
                </div>
                <div class="form-group">
                  <label for="exampleNgaykham">Ngôn Ngữ</label>
                  <input type="text" class="form-control" id="ngongnu" placeholder="Ngôn Ngữ" name="ngongngu" value="{{$book->ngonngu}}">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              {!! Form::close()!!}
            </div>
            <!-- /.card -->
          </div>
         
        </div>
      </div>
    </section>

@endsection
