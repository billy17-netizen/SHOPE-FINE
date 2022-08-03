@extends('layouts.app')

@section('title', 'Store Home Page')

@section('content')
    <div class="page-content page-home">
        <section class="store-carousel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" data-aos="zoom-in">
                        <div class="carousel slide" data-ride="carousel" id="storeCarousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#storeCarousel"></li>
                                <li data-slide-to="1" data-target="#storeCarousel"></li>
                                <li data-slide-to="2" data-target="#storeCarousel"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img alt="banner" class="d-block w-100" src="images/banner.jpg">
                                </div>
                                <div class="carousel-item ">
                                    <img alt="banner" class="d-block w-100" src="images/banner2.jpg">
                                </div>
                                <div class="carousel-item ">
                                    <img alt="banner" class="d-block w-100" src="images/banner3.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>All Categories</h5>
                    </div>
                </div>
                <div class="row">
                    @php
                        $increment = 0;
                    @endphp
                    @forelse($categories as $category)

                        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{$increment += 100}}">
                            <a class="component-categories d-block"
                               href="{{route('categories.detail',$category->slug)}}">
                                <div class="categories-image">
                                    <img alt="" class="w-100"
                                         src="{{Storage::url($category->photo)}}">
                                </div>
                                <p class="categories-text">
                                    {{$category->name}}
                                </p>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5 " data-aos="fade-up" data-aos-delay="100">
                            <h5>No Categories Found</h5>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>All Product</h5>
                    </div>
                </div>
                <div class="row">
                    @php
                        $increment = 0;
                    @endphp
                    @forelse($products as $product)
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{$increment += 100}}">
                            <a class="component-products d-block" href="{{route('details',$product->slug)}}">
                                <div class="products-thumbnail">
                                    <div class="products-image" style="
                                    @if($product->galleries->count())
                                    background-image: url('{{Storage::url($product->galleries->first()->photos)}}');
                                    @else
                                    background-color: #eee;
                                    @endif"></div>
                                </div>
                                <div class="products-text">
                                    {{$product->name}}
                                </div>
                                <div class="products-price"> ${{$product->price}}</div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5 " data-aos="fade-up" data-aos-delay="100">
                            <h5>No Products Found</h5>
                        </div>
                    @endforelse
                    {{$products->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </section>
    </div>
@endsection

