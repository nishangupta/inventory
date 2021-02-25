@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sale</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('sale.index')}}">Sale</a></li>
            <li class="breadcrumb-item active">Create</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Create</h3>
              <a href="{{route('sale.index')}}" class="btn btn-sm btn-primary float-right">Go back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body text-muted">
              <x-input-error />

              <form action="{{route('sale.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="" >Title</label>
                  <input type="text" name="title" placeholder="title" value="{{old('title')}}" class="form-control" required autofocus>
                </div>
                
                <div class="form-group">
                  <label for="">Units</label>
                  <input type="text" name="unit" placeholder="Unit" value="{{1??old('price')}}" class="form-control" >
                </div>

                <div class="form-group">
                  <label for="">Total price</label>
                  <input type="text" name="price" placeholder="Price" value="{{old('price')}}" class="form-control" >
                </div>

                <div class="form-group">
                  <label for="">Choose a Product</label>
                  <select name="product_id" class="form-control">
                    @foreach($products as $product)
                    <option value="{{$product->id}}">{{$product->title}} - {{$product->actualPrice}}</option>
                    @endforeach
                  </select>
                </div>

                <br>
                
                <div class="form-group">
                  <label for="">Description</label>
                  <textarea class="textarea form-control" name="description" placeholder="Short Description here">{{ old('description')}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                
              </form>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
@endpush

@push('js')
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
 $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
@endpush