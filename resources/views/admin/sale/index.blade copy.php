@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
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
      </div>
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
                      <div class="card-body text-muted">
                          <x-input-error />

                          <form action="{{route('sale.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf

                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label>Customer Name <span class="text-danger">*</span></label>
                                          <input list="customers" name="customer_id" class="form-control" autocomplete="false">
                                          <datalist id="customers">
                                              @foreach($customers as $customer)
                                              <option value="{{$customer->name}}">
                                                  @endforeach
                                          </datalist>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label>Sale Date <span class="text-danger">*</span></label>
                                          <input type="date" name="sale_date" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label>Payment Type <span class="text-danger">*</span></label>
                                          <select name="payment_type" class="form-control">
                                              <option value="cash">Cash</option>
                                              <option value="bank">Bank</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-6">
                                      <div class="form-group">
                                          <label>Details</label>
                                          <textarea cols="10" rows="1" class="form-control" name="details"></textarea>
                                      </div>
                                  </div>
                              </div>

                              <table class="table table-bordered table-hover" id="tab_logic">
                                  <thead>
                                      <tr>
                                          <th><input class='check_all' type='checkbox' onclick="select_all()" /></th>
                                          <th>S.No</th>
                                          <th>Medicine Name</th>
                                          <th>Expire Date</th>
                                          <th>Qty</th>
                                          <th>Selling Price</th>
                                          <th>Total</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td><input type='checkbox' class='chkbox' /></td>
                                          <td><span id='sn'>1.</span></td>
                                          <td>
                                              <input class="form-control autocomplete_txt" type='text' data-type="medicine_name" id='medicine_name_1' name='medicine_name[]' />
                                          </td>
                                          <td><input class="form-control autocomplete_txt" type='text' data-type="expire_date" id='expire_date_1' name='expire_date[]' /></td>
                                          <td><input class="form-control qty autocomplete_txt" type='number' data-type="qty" id='qty_1' name='qty[]' /> </td>
                                          <td><input class="form-control selling_price autocomplete_txt" type='number' data-type="selling_price" id='selling_price_1' name='selling_price[]' /> </td>
                                          <td><input class="form-control total autocomplete_txt" type='number' data-type="total" id='total_1' name='total[]' readonly /> </td>
                                      </tr>
                                  </tbody>
                              </table>
                              <br>

                              <br>

                              <div class="row clearfix">
                                  <div class="col-md-12">
                                      <button type="button" class='btn btn-danger delete' id='delete_row'>- Delete</button>
                                      <button type="button" class='btn btn-success addbtn'>+ Add More</button>
                                  </div>
                              </div>
                              <div class="row clearfix" style="margin-top:20px">
                                  <div class="pull-right col-md-4">
                                      <div class="form-group row">
                                          <label class="col-form-label col-md-2">Sub Total</label>
                                          <div class="col-md-10">
                                              <input type="number" name='sub_total' placeholder='0.00' class="form-control" id="sub_total" readonly />
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-form-label col-md-2">Tax</label>
                                          <div class="col-md-10">
                                              <input type="number" class="form-control" id="tax" placeholder="0">
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-form-label col-md-2">Tax Amount</label>
                                          <div class="col-md-10">
                                              <input type="number" name='tax_amount' id="tax_amount" placeholder='0.00' class="form-control" readonly />
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-form-label col-md-2">Discount</label>
                                          <div class="col-md-10">
                                              <input type="number" class="form-control" id="discount" placeholder="0">
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-form-label col-md-2">Discount Amount</label>
                                          <div class="col-md-10">
                                              <input type="number" name='discount_amount' id="discount_amount" placeholder='0.00' class="form-control" readonly />
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-form-label col-md-2">Grand Total</label>
                                          <div class="col-md-10">
                                              <input type="number" name='total_amount' id="total_amount" placeholder='0.00' class="form-control" readonly />
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-form-label col-md-2">Paid Amount</label>
                                          <div class="col-md-10">
                                              <input type="number" name='paid_amount' id="paid_amount" placeholder='0.00' class="form-control" />
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <label class="col-form-label col-md-2">Due Amount</label>
                                          <div class="col-md-10">
                                              <input type="number" name='due_amount' id="due_amount" placeholder='0.00' class="form-control" readonly />
                                          </div>
                                      </div>
                                  </div>
                                  <div class="m-t-20 text-center">
                                      <button class="btn btn-primary submit-btn btn-sm" type="submit">Create Sale</button>
                                  </div>
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
@push('js')
<script>$(document).ready(function() {

  $(".delete").on('click', function() {
      $('.chkbox:checkbox:checked').parents("tr").remove();
      $('.check_all').prop("checked", false);
      updateSerialNo();
      calc();
  });
  var i = $('table tr').length;
  $(".addbtn").on('click', function() {
      count = $('table tr').length;
      var data = "<tr><td><input type='checkbox' class='chkbox'/></td>";
      data += "<td><span id='sn" + i + "'>" + count + ".</span></td>";
      data += "<td><input class='form-control autocomplete_txt' type='text' data-type='medicine_name' id='medicine_name_" + i + "' name='medicine_name[]'/></td>";
      data += "<td><input class='form-control autocomplete_txt' type='text' data-type='expire_date' id='expire_date_" + i + "' name='expire_date[]'/></td>";
      data += "<td><input class='form-control qty autocomplete_txt' type='number' data-type='qty' id='qty_" + i + "' name='qty[]'/></td>";
      data += "<td><input class='form-control selling_price autocomplete_txt' type='number' data-type='selling_price' id='selling_price_" + i + "' name='selling_price[]'/></td>";
      data += "<td><input class='form-control total autocomplete_txt' type='number' data-type='total' id='total_" + i + "' name='total[]'/></td></tr>";
      $('table').append(data);
      i++;
  });

  $('#tab_logic tbody').on('keyup change', function() {
      calc();
  });
  $('#tax').on('keyup change', function() {
      calc_total();
  });

  $('#discount').on('keyup change', function() {
      calc_total();
  });
  $('#paid_amount').on('keyup change', function() {
      calc_total();
  });


});

function select_all() {
  $('input[class=chkbox]:checkbox').each(function() {
      if ($('input[class=check_all]:checkbox:checked').length == 0) {
          $(this).prop("checked", false);
      } else {
          $(this).prop("checked", true);
      }
  });
}

function updateSerialNo() {
  obj = $('table tr').find('span');
  $.each(obj, function(key, value) {
      id = value.id;
      $('#' + id).html(key + 1);
  });
}
//autocomplete script
$(document).on('focus', '.autocomplete_txt', function() {
  type = $(this).data('type');

  if (type == 'medicine_name') autoType = 'medicine_name';
  if (type == 'expire_date') autoType = 'expire_date';
  if (type == 'qty') autoType = 'qty';
  if (type == 'selling_price') autoType = 'selling_price';

  $(this).autocomplete({
      minLength: 0,
      source: function(request, response) {
          $.ajax({
              url: "{{ route('product.search') }}",
              dataType: "json",
              data: {
                  term: request.term,
                  type: type,
              },
              success: function(data) {
                  var array = $.map(data, function(item) {
                      return {
                          label: item[autoType],
                          value: item[autoType],
                          data: item
                      }
                  });
                  response(array)
              }
          });
      },
      select: function(event, ui) {
          var data = ui.item.data;
          id_arr = $(this).attr('id');
          id = id_arr.split("_");
          elementId = id[id.length - 1];
          $('#medicine_name_' + elementId).val(data.medicine_name);
          $('#expire_date_' + elementId).val(data.expire_date);
          $('#qty_' + elementId).val(data.qty);
          $('#selling_price_' + elementId).val(data.selling_price);
      }
  });


});

function calc() {
  $('#tab_logic tbody tr').each(function(i, element) {
      var html = $(this).html();
      if (html != '') {
          var qty = $(this).find('.qty').val();
          var selling_price = $(this).find('.selling_price').val();
          $(this).find('.total').val(qty * selling_price);

          calc_total();
      }
  });
}

function calc_total() {
  total = 0;
  $('.total').each(function() {
      total += parseInt($(this).val());
  });
  $('#sub_total').val(total.toFixed(2));
  discount_sum = total / 100 * $('#discount').val();
  tax_sum = total / 100 * $('#tax').val();
  $('#tax_amount').val(tax_sum.toFixed(2));
  $('#discount_amount').val(discount_sum.toFixed(2));
  $('#total_amount').val((tax_sum + total - discount_sum).toFixed(2));
  $('#due_amount').val(((tax_sum + total - discount_sum) - $('#paid_amount').val()).toFixed(2));
}
</script>
@endpush 