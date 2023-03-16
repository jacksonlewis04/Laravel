@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <!-- /.info-box -->
                <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="fa fa-file"></i></span>
                    <!-- /.info-box content -->
                    <div class="info-box-content">
                        <span class="info-box-text">Sliders</span>
                        <span class="info-box-number">{{ number_format($sliders,0,",",".") }} Data</span>
                        <a href="/admin/sliders">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <!-- /.info-box -->
                <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="fa fa-file"></i></span>
                    <!-- /.info-box content -->
                    <div class="info-box-content">
                        <span class="info-box-text">Products</span>
                        <span class="info-box-number">{{ number_format($products,0,",",".") }} Data</span>
                        <a href="/admin/products">Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <!-- /.info-box -->
                <div class="info-box">
                    <span class="info-box-icon bg-blue"><i class="fa fa-file"></i></span>
                    <!-- /.info-box content -->
                    <div class="info-box-content">
                        <span class="info-box-text">Catalogs</span>
                        <span class="info-box-number">{{ number_format($catalogs,0,",",".") }} Data</span>
                        <a href="/admin/catalogs">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection