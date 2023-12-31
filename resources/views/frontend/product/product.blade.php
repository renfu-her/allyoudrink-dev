@extends('frontend.layouts.master')

@section('content')
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">所有目録</h1>
                <ul class="list-unstyled templatemo-accordion">
                    @foreach ($categories as $category)
                        <li class="pb-3">
                            <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="/product?category={{ $data['category'] }}">
                                {{ $category->name }}
                                <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                            </a>
                            @if ($category->children->isNotEmpty())
                                <ul class="collapse list-unstyled pl-3">
                                    @foreach ($category->children as $child)
                                        <li>
                                            <a class="text-decoration-none" href="/product/?category={{ $data['category'] }}&child={{ $child->id }}">
                                                {{ $child->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-9">

                <div class="row">
                    @forelse($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0" style="height: 300px">
                                    <img class="card-img rounded-0 img-fluid"
                                        src="{{ asset('upload/images/' . $product['id'] . '/' . $product['image']) }}">
                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            {{-- <li><a class="btn btn-success text-white" href="shop-single.html"><i
                                                        class="far fa-heart"></i></a>
                                            </li>
                                            <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i
                                                        class="far fa-eye"></i></a>
                                            </li> --}}
                                            <li><a class="btn btn-success text-white mt-2" href="/product/detail/{{ $product['id'] }}"><i
                                                        class="fas fa-cart-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="shop-single.html" class="h3 text-decoration-none">{{ $product['name'] }}</a>
                                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">

                                        <li class="pt-2">
                                            <span
                                                class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                            <span
                                                class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                            <span
                                                class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                            <span
                                                class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                            <span
                                                class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                        </li>
                                    </ul>
                                    {{-- <ul class="list-unstyled d-flex justify-content-center mb-1">
                                        <li>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-muted fa fa-star"></i>
                                            <i class="text-muted fa fa-star"></i>
                                        </li>
                                    </ul> --}}
                                    <p class="text-center mb-0" style="color: red">$ {{ $product['price'] }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12">
                            <div class="card mb-4 product-wap rounded-0"
                                style="display: flex; align-items: center; justify-content: center; height: 200px;">
                                <div class="card rounded-0">
                                    尚未有任何商品
                                </div>
                            </div>
                        </div>
                    @endforelse

                </div>
                {{-- <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#"
                                tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark"
                                href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark"
                                href="#">3</a>
                        </li>
                    </ul>
                </div> --}}
            </div>

        </div>
    </div>
    <!-- End Content -->
@endsection

@section('js')
@endsection

@section('css')
@endsection
