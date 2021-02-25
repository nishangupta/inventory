@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  <x-alert-msg />

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>5300<sup style="font-size: 20px">Rs</sup></h3>

              <p>Sales</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>2300<sup style="font-size: 20px">Rs</sup></h3>

              <p>Expenses</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-navy">
            <div class="inner">
              <h3>2300<sup style="font-size: 20px">Rs</sup></h3>

              <p>Profit</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      
      
      
      
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box shadow-hover">
              <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-book-open"></i></span>
              <div class="info-box-content">
                <a href="route('course.index')}}">
                  <span class="info-box-text text-dark">Products</span>
                  <span class="info-box-number text-dark">
                      {{$productCount}}
                    <small>+</small>
                  </span>
                </a>
            </div>
          </div>
        </div>
        
        
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box shadow-hover">
            <span class="info-box-icon bg-green elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>

            <div class="info-box-content">
              <a href="{route('exam.index')}}">
                <span class="info-box-text text-dark">Customers</span>
                <span class="info-box-number text-dark">
                  {{$expenseCount}}
                </span>
              </a>
            </div>
          </div>
        </div>
    

        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 shadow-hover">
            <span class="info-box-icon bg-navy elevation-1"><i class="fas fa-globe-americas"></i></span>

            <div class="info-box-content">
              <a href="{route('country.index')}}">
                <span class="info-box-text text-dark">Admins</span>
                <span class="info-box-number text-dark">{{$incomeCount}}</span>
              </a>
            </div>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3 shadow-hover">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-envelope-open-text"></i></span>

            <div class="info-box-content">
              <a href="{route('appointment.index')}}">
                <span class="info-box-text text-dark">Customers</span>
                <span class="info-box-number text-dark">{{$customerCount}}</span>
              </a>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection

@push('css')
<style>
  .shadow-hover:hover{
    transition: .35s ease;
    box-shadow: 0px 0px 15px 3px rgba(0,0,0,0.25);
  }
</style>
@endpush
