@extends('frontend.layouts.master')

@section('content')
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="gallery">
                        <!-- 大圖片 -->
                        <div class="main-image mb-3">
                            <img src="{{ asset('upload/images/' . $product->id . '/' . $productImages[0]['image']) }}"
                                class="img-fluid" />
                        </div>

                        <!-- 小圖的滑塊 -->

                        <div class="thumbnail-slider">
                            @foreach ($productImages as $image)
                                <div class="px-1"><img
                                        src="{{ asset('upload/images/' . $product->id . '/' . $image['image']) }}"
                                        alt="縮圖1"
                                        data-image="{{ asset('upload/images/' . $product->id . '/' . $image['image']) }}"
                                        class="img-fluid img-thumbnail" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $product->name }}</h1>
                            <p class="h3 py-2">$ {{ $product->price }}</p>
                            {{-- <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Easy Wear</strong></p>
                                </li>
                            </ul> --}}

                            <h6>產品說明:</h6>
                            <p>{!! $product->description !!}</p>
                            {{-- <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul> --}}

                            {{-- <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul> --}}

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    {{-- <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">S</span>
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">M</span>
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">L</span>
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span>
                                            </li>
                                        </ul>
                                    </div> --}}
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                數量
                                                <input type="hidden" name="product-quanity" id="product-quanity"
                                                    value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary"
                                                    id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success"
                                                    id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="buy">購 買</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit"
                                            value="addtocard">加入購物車</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        $(function() {
            // $('[data-fancybox="gallery"]').fancybox({
            //     // 當前顯示的圖片改變時，更新大圖片
            //     afterShow: function(instance, current) {
            //         $('#main-image img').attr('src', current.src);
            //     }
            // });

            // 初始化縮圖滑動功能，可以使用Slick或Owl Carousel
            $('.thumbnail-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true, // 如果你想要自動播放，設定為true
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                // 其他設定...
                // 其他適合您需求的設定
            });
            $('.thumbnail-slider img').on('click', function() {
                var imgSrc = $(this).data('image');
                $('.main-image img').attr('src', imgSrc);
            });
        })
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.min.css') }}">
    <style>
        .thumbnail-slider .px-1 {
            /* 給定一個固定比例的容器尺寸，例如 1:1 */
            width: 100px;
            /* 或其他寬度 */
            height: 100px;
            /* 高度與寬度相同 */
            overflow: hidden;
            /* 超出容器部分會被裁切 */
        }

        .thumbnail-slider .px-1 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* 裁切並覆蓋整個容器 */
        }
    </style>
@endsection
