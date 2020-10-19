@extends('layouts.admin-theme')

@section('title','Dashboard')

@section('content')

<div class="row">
	 <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
         <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Kas Masuk</h4>
          </div>
          <div class="card-body">
            59
          </div>
        </div>
      </div>
    </div>
          
           
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-dollar-sign"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Profit</h4>
          </div>
          <div class="card-body">
            $187,13
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card card-statistic-2">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-shopping-bag"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Sales</h4>
          </div>
          <div class="card-body">
            4,732
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection