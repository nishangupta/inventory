@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Products</h3>
              <a href="{{route('product.create')}}" class="btn btn-primary btn-sm float-right">Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <x-input-error/>
              <x-alert-msg/>

              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sn</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Qty</th>
                  <th>Cost Price</th>
                  <th>Type/Margin</th>
                  <th>Tax</th>
                  <th>Sale Price</th>
                  <th>Created at</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td><a href="{{route('product.show',$product->id)}}">{{$product->title}}</a></td>
                    <td>{{$product->productCategory->title}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->cost_price}}</td>
                    <td>{{$product->type.' ['.$product->margin.']'}}</td>
                    <td>{{$product->tax_type == 'excluded'?'13%':''}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->created_at->format('Y m d')}}</td>
                    <td>
                      <a href="{{route('product.edit',$product)}}" class="btn btn-sm btn-info">Edit</a>
                      <form action="{{route('product.destroy',$product)}}" method="POST">
                        @csrf @method('delete')
                        <button class="btn dltBtn btn-danger btn-sm">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>              
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@push('js')
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "searching": true,
      "paging":true,
      "sorting":false,
    });

    $('.dltBtn').click(function(e){
      e.preventDefault()
      if(confirm('Are you sure to delete')){
        this.form.submit();
      }
    })
  });
</script>
@endpush