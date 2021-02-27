
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Invoice Print</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
</head><body>
  <div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-12">
          <h2 class="page-header">
            AdminLTE, Inc.
            {{-- <small class="float-right">Date: 2/10/2014</small> --}}
          </h2>
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
        <!-- /.col -->
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
  
      <!-- Table row -->
      <div class="row">
        <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>Qty</th>
              <th>Product</th>
              <th>Qty</th>
              <th>Description</th>
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
          {{-- <p class="lead">Payment Methods:</p>
          <img src="../../dist/img/credit/visa.png" alt="Visa">
          <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="../../dist/img/credit/american-express.png" alt="American Express">
          <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
  
          <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr
            jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
          </p> --}}
        </div>
        <!-- /.col -->
        <div class="col-6">
          {{-- <p class="lead">Amount Due 2/22/2014</p> --}}
  
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
    </section>
    <!-- /.content -->
  </div>
  <!-- ./wrapper -->
  
  <script type="text/javascript"> 
    window.addEventListener("load", window.print());
  </script>
  </body>
  </html>