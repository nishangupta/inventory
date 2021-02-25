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
            <li class="breadcrumb-item active">Show</li>
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
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">{{$sale->title}}</h3>
              <a href="{{route('sale.printInvoice',$sale->id)}}" target="_blank" class="btn btn-primary btn-sm float-right">Print invoice</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <x-input-error />

              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="mb-3">
                    <p>Product Title: {{$sale->product->title}} </p>
                  </div>

                  <div class="mb-3">
                    <p>Unit: {{$sale->unit}}</p>
                  </div>
                  
                  <div class="mb-3">
                    <p>Total Price: Rs {{$sale->price}}</p>
                  </div>
                  
                  <div class="mb-3">
                    <p>Created at: {{$sale->created_at}}</p>
                  </div>
    
                  <div class="mb-3">
                    <p>Updated at:{{$sale->updated_at}}</p>
                  </div>

                  <div class="d-flex">
                    <a href="{{route('sale.edit',$sale)}}" class="btn btn-info mr-3">Edit</a>
                    <form action="{{route('sale.destroy',$sale)}}" method="POST">
                      @csrf @method('delete')
                      <button type="submit" class="dltBtn btn btn-danger">Delete</button>
                    </form>
  
                  </div>
                  
                </div>

                <div class="col-12 col-md-6">
                  <div class="mb-3">
                    <p>Description: {!!$sale->description!!}</p>
                  </div>
                  <hr>
                </div>
            
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

@push('js')
<script>
  $(document).ready(function(){
    $('.dltBtn').click(function(e){
      e.preventDefault();
      if(confirm('Are you sure to delete!')){
        this.form.submit();
      }
    })
  })
</script>
@endpush