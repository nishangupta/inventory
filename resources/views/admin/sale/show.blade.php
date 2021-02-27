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

      <x-input-error />
      <x-alert-msg />

        <div class="row">
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> AdminLTE, Inc.
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Admin, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    Phone: (804) 123-5432<br>
                    Email: info@almasaeedstudio.com
                  </address>
                </div>
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>{{$sale->customer->name}}</strong><br>
                    {{$sale->customer->address}}<br>
                    Phone: {{$sale->customer->phone}}<br>
                    Email: {{$sale->customer->email}}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #{{$sale->id}}</b><br>
                  <b>Payment Date:</b>{{$sale->created_at->format('Y/m/d')}}<br>
                </div>

              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Sn</th>
                      <th>Title</th>
                      <th>Qty</th>
                      <th>Price</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($sale->saleProducts as $key=>$p)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$p->title}}</td>
                        <td>{{$p->qty}}</td>
                        <td>{{number_format($p->price)}}</td>
                        <td>{{number_format($p->total)}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                 
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>Rs.{{number_format($sale->sub_total)}}</td>
                      </tr>
                      <tr>
                        <th>Discount:</th>
                        <td>{{number_format($sale->discount_amount)}}</td>
                      </tr>
                      <tr>
                        <th>Tax</th>
                        <td>{{number_format($sale->tax_amount)}}</td>
                      </tr>
                      <tr>
                        <th>Grand Total</th>
                        <td>{{number_format($sale->total_amount)}}</td>
                      </tr>
                      <tr>
                        <th>Due:</th>
                        <td>{{number_format($sale->due_amount)}}</td>
                      </tr>
                      <tr>
                        <th>Paid:</th>
                        <td>{{number_format($sale->paid_amount)}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-6">
                  <a href="{{route('sale.printInvoice',$sale->id)}}" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                </div>
                <div class="col-6">
                  <div class="d-flex justify-content-end">
                    <a href="{{route('sale.edit',$sale)}}" class="btn btn-info mr-3">Edit</a>
                    <form action="{{route('sale.destroy',$sale)}}" method="POST">
                      @csrf @method('delete')
                      <button type="submit" class="dltBtn btn btn-danger">Delete</button>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      
      
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