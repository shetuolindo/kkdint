@extends('front.master')

@section('title', 'KKD EBike 2')

@section('content')
<section class="page-content">
    <div class="container">
        <div class="shop-page">
            <div class="row">
                <div class="col-lg-9">
                    <div class="shop-product-details">
                        <div class="shop-product-image">
                            <img src="{{ asset('assets/images/resources/product8.jpg') }}" alt="">
                        </div>
                        <div class="shop-product-info">
                            <h3>KKD EBike 2</h3>
                            
                            <p>&#9830;  60V 20Ah Battery Capacity</p>
                            <p>&#9830;  14" Tubeless Tire</p>
                            <p>&#9830;  1000W Motor</p>
                            <p>&#9830;  Top Speed: 60/h</p>
                            <p>&#9830;  Range: 60+km</p>
                            <p>&#9830;  Hydraulic Brakes</p>
                        </div>
                    </div>
                   
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar shop-sidebar">
                    
                        <div class="widget widget-products">
                            <h3 class="widget-title">Similar Products</h3>
                            <ul class="products-list">
                                <li>
                                    <div class="wd-product">
                                        <div class="wd-product-thumb">
                                            <img src="{{ asset('assets/images/resources/product2.jpg') }}" alt="" style="height: 90px">
                                            {{-- <span class="sale">Sale</span> --}}
                                            <a href="{{ route('kkd-ebike-1') }}" title="" class="ext-link"></a>
                                        </div>
                                        <div class="wd-product-info">
                                            <h3><a href="{{ route('kkd-ebike-2') }}" title="">KKD EBike 1</a></h3>
                                            <ul class="pd-rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-alt"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wd-product">
                                        <div class="wd-product-thumb">
                                            <img src="{{ asset('assets/images/resources/product3.jpg') }}" alt="" style="height: 90px">
                                            <a href="{{ route('kkd-ebike-3') }}" title="" class="ext-link"></a>
                                        </div>
                                        <div class="wd-product-info">
                                            <h3><a href="{{ route('kkd-ebike-3') }}" title="">KKD EBike 3</a></h3>
                                            <ul class="pd-rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-alt"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wd-product">
                                        <div class="wd-product-thumb">
                                            <img src="{{ asset('assets/images/resources/product7.jpg') }}" alt="" style="height: 90px">
                                            <a href="{{ route('kkd-ebike-4') }}" title="" class="ext-link"></a>
                                        </div>
                                        <div class="wd-product-info">
                                            <h3><a href="{{ route('kkd-ebike-4') }}" title="">KKD EBike 4</a></h3>
                                            <ul class="pd-rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-alt"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul><!--products-list end-->
                        </div><!--widget-products end-->
                    </div><!--sidebar end-->
                </div>
            </div>
        </div><!--shop-page end-->
    </div>
</section><!--page-content end-->

@include('front.common.partner')


@endsection