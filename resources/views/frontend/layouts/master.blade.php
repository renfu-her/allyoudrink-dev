<!doctype html>
<html lang="zh-TW">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="zh-TW" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NoMoreCrying</title>
    <meta name="author" content="" />
    <meta name="copyright" content="矽羽科技" />
    <meta name="description" content="這世界太負面 太複雜 我們都需要正面奶酥。 2018年9月登場，報章新聞媒體譽為奶酥界愛馬仕。" />
    <meta name="keywords" content="No More Crying,正面奶酥,奶酥醬,positiveyummy" />
    <meta property="fb:app_id" content="301378584445841" />
    <meta property="og:title" content="NoMoreCrying" />
    <meta property="og:description" content="這世界太負面 太複雜 我們都需要正面奶酥。 2018年9月登場，報章新聞媒體譽為奶酥界愛馬仕。" />
    <meta property="og:type" content="website" />
    <meta property="og:url"
        content="https://www.whyyoucry.com/?fbclid=IwAR0Bi2Gqz1Qm9JshILpeRLZ2UAvbLcRJ0ZaSMUsWyyQHPpsV4IMofLTEqu8" />
    <meta property="og:image" content="" />


    <link href="https://resource.sfec.cloud/vendor/jBox/0.3.2/jBox.min.css" type="text/css" rel="stylesheet"
        media="all" />
    <link href="https://resource.sfec.cloud/vendor/jAlert/v3/jAlert-v3.min.css" type="text/css" rel="stylesheet"
        media="all" />
    <link href="https://resource.sfec.cloud/vendor/jquery-loading/1.3.0/jquery.loading.min.css" type="text/css"
        rel="stylesheet" media="all" />
    <link href="https://resource.sfec.cloud/vendor/font-awesome/5.13.0/pro/css/fontawesome.min.css" type="text/css"
        rel="stylesheet" media="all" />
    <link href="https://resource.sfec.cloud/vendor/font-awesome/5.13.0/pro/css/light.min.css" type="text/css"
        rel="stylesheet" media="all" />
    <link href="https://resource.sfec.cloud/vendor/font-awesome/5.13.0/pro/css/brands.min.css" type="text/css"
        rel="stylesheet" media="all" />
    <link href="https://resource.sfec.cloud/vendor/font-awesome/5.13.0/pro/css/v4-shims.min.css" type="text/css"
        rel="stylesheet" media="all" />
    <link href="https://resource.sfec.cloud/vendor/bootstrap/4.6.0/css/bootstrap.min.css" type="text/css"
        rel="stylesheet" media="all" />
    <link href="https://resource.sfec.cloud/vendor/swiper/8.0.7/swiper-bundle.min.css" type="text/css" rel="stylesheet"
        media="screen" />
    <link href="https://www.whyyoucry.com/view/default/assets/bundles/app/app-neutral.bundle.css?v=cb31981a"
        type="text/css" rel="stylesheet" media="all" />
    <link href="https://www.whyyoucry.com/view/default/assets//css/toolbar/mobile-topnav-no-word.css" type="text/css"
        rel="stylesheet" media="screen">
    <script src="https://resource.sfec.cloud/vendor/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://resource.sfec.cloud/vendor/jquery.lazyload/1.9.7/jquery.lazyload.min.js" type="text/javascript">
    </script>
    <script src="https://resource.sfec.cloud/vendor/jquery.imgpreload/1.6.2/jquery.imgpreload.min.js"
        type="text/javascript"></script>
    <script src="https://resource.sfec.cloud/vendor/jBox/0.3.2/jBox.min.js" type="text/javascript"></script>
    <script src="https://resource.sfec.cloud/vendor/jAlert/v3/jAlert-v3.min.js" type="text/javascript"></script>
    <script src="https://resource.sfec.cloud/vendor/jquery-loading/1.3.0/jquery.loading.min.js" type="text/javascript">
    </script>
    <script src="https://resource.sfec.cloud/vendor/popper/1.16.0/popper.min.js" type="text/javascript"></script>
    <script src="https://resource.sfec.cloud/vendor/bootstrap/4.6.0/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://resource.sfec.cloud/vendor/swiper/8.0.7/swiper-bundle.min.js"></script><!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175828283-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        };
        gtag('js', new Date());
        gtag('config', 'UA-175828283-1');
    </script>
    <script type="text/javascript">
        $(function() {
            //顯示訊息
            var show_message = {
                "text": ""
            };
            if (show_message.text !== '') {
                toastMessage(show_message.text);
            };

            //cart
            $("body").on("cart_reload", function() {
                    var el = $(".cart_count");
                    $.get("https://www.whyyoucry.com/cart.php?action=count", function(data) {
                        if (data > 0) {
                            el.text(data);
                        } else {
                            el.text("0");
                        }
                    });
                })
                .trigger("cart_reload");

            //wish list
            $("body").on("wish_list_reload", function() {
                    var el = $(".wish_count");
                    $.get("https://www.whyyoucry.com/wish_list.php?action=count", function(data) {
                        if (data > 0) {
                            el.text(data);
                        } else {
                            el.text("0");
                        }
                    });
                })
                .trigger("wish_list_reload");
        });
    </script>
    <script src="https://www.whyyoucry.com/view/default/assets/bundles/app/app.bundle.js?v=cb31981a"></script>
    <script>
        $(function() {
            const slideshow = new Swiper('#slideshow-0', {
                // 循環
                loop: true,
                // 換頁轉場動畫速度
                speed: transitionSpeed,
                //轉場效果
                effect: 'fade',
                fadeEffect: {
                    crossFade: true,
                },
                //自動播放設定
                autoplay: {
                    delay: autoPlayDelay,
                },
                // 換頁圓點
                pagination: {
                    el: '#slideshow-0-pagination',
                    clickable: true,
                    bulletClass: 'sfec-swiper-pagination-bullet swiper-pagination-bullet',
                    bulletActiveClass: 'sfec-swiper-pagination-bullet-active swiper-pagination-bullet-active',
                },

                // 左右箭頭
                navigation: {
                    nextEl: '#slideshow-0-next',
                    prevEl: '#slideshow-0-prev',
                },

                on: {
                    afterInit(swiper) {
                        var firstSlideImage = swiper.slides[1].getElementsByTagName('img')[0]

                        // 錯誤狀態長寬比設為 3:2
                        var heightOnError = Math.round(swiper.width * 2 / 3 * 100) / 100

                        // 將指定高度參數代入所有 slider 圖片中
                        function addHeightToAllSliderImage(height = firstSlideImage.height) {
                            swiper.slides.forEach(function(slide) {
                                const imageList = slide.getElementsByTagName('img');
                                for (let imgNode of imageList) {
                                    imgNode.style.height = height + 'px'
                                }
                            })
                        }

                        // 第一張圖片讀取錯誤時，將高度設定為 slider 長寬比設為 3:2
                        firstSlideImage.onerror = function() {
                            addHeightToAllSliderImage(heightOnError);
                        }

                        // 判斷第一張圖片讀取完畢後執行函式
                        if (firstSlideImage.complete) {
                            addHeightToAllSliderImage();
                        } else {
                            firstSlideImage.onload = function() {
                                addHeightToAllSliderImage();
                            }
                        }
                    }
                }
            });
        });
    </script>
    <script>
        $(function() {
            //首頁 按下「逛更多商品」分類按鈕開啟側欄
            $('#seeMoreBtn').on('click', function() {
                modal_element_show(['sideNav', 'sideNavOverlay', 'sideNavCloseBtn']);
            });
        });
    </script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '301378584445841',
                autoLogAppEvents: true,
                xfbml: true,
                version: 'v9.0'
            });
            // FB相關程式綁定在 window.on("fbAsyncInit"), 確保在FB.init之後執行
            $(window).triggerHandler('fbAsyncInit');
        };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/zh_TW/sdk.js"></script>
</head>

<body>
    <script data-button="" data-link=""
        data-title="%E5%88%9D%E5%85%AD%E9%96%8B%E5%B7%A5%E5%A4%A7%E5%90%89%E6%BB%BF%F0%9F%90%B0%E7%BD%90%E5%85%8D%E9%81%8B"
        data-time="2023-01-27T20:00" data-cssBg="%23fffcf5" data-cssCounter="%23fc795b" data-cssCounterUnit="%23574a47"
        data-cssContent="%23574a47" data-cssBtn="%23fc795b" src="https://gag.sfec.cc/js/plugin/timer.js"></script>

    <nav class="sidenav">
        <div class="sidenav-wrapper hidden" id="sideNav">
            <ul class="sidenav-category-list">
                <li class="function-link d-flex d-lg-none">
                    <a href="https://www.whyyoucry.com/member.php?action=login" class="text-center mx-auto"><i
                            class="icon-function-link fal fa-fw fa-user"></i>登入&nbsp;&#47;&nbsp;註冊</a>
                </li>
                <li class="sidenav-search-bar-wrapper d-lg-none">
                    <form method="get" action="https://www.whyyoucry.com/search.php">
                        <label class="search-bar">
                            <input type="text" name="keyword" id="productSearch" placeholder="關鍵字搜尋" value=""
                                required autocomplete="off" />
                            <button type="submit"><i class="icon-btn fal fa-fw fa-search"></i></button>
                        </label>
                    </form>
                </li>
                <!--首頁按鈕-->
                <li class="function-link bg-white d-lg-none"><a href="https://www.whyyoucry.com"><i
                            class="icon-function-link fal fa-home"></i>首頁</a></li>
                <li class="category-wrapper" id="accordionSideNav0">
                    <div class="category">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T01"
                            class="category-link">正面奶酥｜經典款</a>
                    </div>
                </li>
                <li class="category-wrapper" id="accordionSideNav1">
                    <div class="category">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T04&token=408b7c8ad06e4d9954fa2d948a01f508"
                            class="category-link">正面奶酥｜腹黑可可抹醬</a>
                    </div>
                </li>
                <li class="category-wrapper" id="accordionSideNav2">
                    <div class="category">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T07"
                            class="category-link">正面奶酥｜深情伯爵抹醬</a>
                    </div>
                </li>
                <li class="category-wrapper" id="accordionSideNav3">
                    <div class="category">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T08"
                            class="category-link">正面奶酥｜苦情抹茶抹醬</a>
                    </div>
                </li>
                <!-- 會員功能 -->
                <li class="function-link d-lg-none"><a href="https://www.whyyoucry.com/wish_list.php"><i
                            class="icon-function-link fal fa-fw fa-heart"></i>收藏清單<i
                            class="fal fa-angle-right float-right"></i></a></li>
                <li class="function-link d-lg-none"><a href="https://www.whyyoucry.com/order.php"><i
                            class="icon-function-link fal fa-fw fa-list-alt"></i>我的訂單<i
                            class="fal fa-angle-right float-right"></i></a></li>
                <li class="function-link d-lg-none"><a href="https://www.whyyoucry.com/member.php?action=balance"><i
                            class="icon-function-link fal fa-fw fa-search-dollar"></i>我的錢包<i
                            class="fal fa-angle-right float-right"></i></a></li>
                <li class="function-link d-lg-none"><a href="https://www.whyyoucry.com/coupon.php"><i
                            class="icon-function-link fal fa-fw fa-gift-card"></i>COUPON<i
                            class="fal fa-angle-right float-right"></i></a></li>
                <li class="function-link d-lg-none"><a href="https://www.whyyoucry.com/member.php?action=edit"><i
                            class="icon-function-link fal fa-fw fa-file-user"></i>我的資料<i
                            class="fal fa-angle-right float-right"></i></a></li>
            </ul>
        </div>
        <!--關閉按鈕-->
        <button class="btn close-btn hidden" id="sideNavCloseBtn"><i class="icon-btn fal fa-times"></i></button>
        <div class="overlay hidden" id="sideNavOverlay"></div>
    </nav>
    <header class="top-nav-bar sticky-top">
        <nav class="top-nav-mobile" id="topNavMobile">
            <a role="button" id="sideNavOpenMobile" class="top-nav-link col" href="javascript:;">
                <i class="icon-function-link fal fa-bars"></i>
                <p>分類</p>
            </a>
            <a role="button" id="sideNavOpenAndSearchMobile" class="top-nav-link col" href="javascript:;">
                <i class="icon-function-link fal fa-search"></i>
                <p>搜尋</p>
            </a>

            <a href="https://www.whyyoucry.com" class="top-nav-link top-nav-mobile-shop-logo-wrapper">
                <img src="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvc2V0dGluZy8xNGMwYzgzYzkzNjc3MzYyZjZjYjE2YzNiODBiYTdhOS5qcGciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjIwNDgsImZpdCI6ImNvdmVyIn19fQ=="
                    alt="shop-logo" class="top-nav-mobile-shop-logo" style="height:90px">
            </a>
            <a href="https://www.whyyoucry.com/member.php" class="top-nav-link col">
                <i class="icon-function-link fal fa-user"></i>
                <p>會員</p>
            </a>
            <a href="https://www.whyyoucry.com/order.php" class="top-nav-link col">
                <i class="icon-function-link fal fa-list-alt"></i>
                <p>訂單</p>
            </a>
            <a href="https://www.whyyoucry.com/cart.php" class="top-nav-link col">
                <i class="icon-function-link fal fa-shopping-cart"></i>
                <div class="cart-item-num cart_count"></div>
                <p>購物車</p>
            </a>
        </nav>
        <nav class="top-nav-desktop container px-0" id="topNavDesktop">
            <div class="d-flex">
                <div class="top-nav-float-left-wrapper">
                    <button class="top-nav-link btn category-btn d-flex" id="sideNavOpen">
                        <i class="icon-function-link fal fa-bars"></i>
                    </button>
                    <div class="search-bar">
                        <form method="get" action="https://www.whyyoucry.com/search.php">
                            <input type="text" name="keyword" placeholder="關鍵字搜尋" value="" required
                                autocomplete="off" />
                            <button type="submit">
                                <i class="fal fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="top-nav-function-link-wrapper">
                    <a href="https://www.whyyoucry.com/member.php?action=login" class="top-nav-link d-flex">
                        <i class="icon-function-link fal fa-user"></i>
                        登入/註冊
                    </a>
                </div>
                <div class="top-nav-function-link-wrapper">
                    <a href="https://www.whyyoucry.com/cart.php" id="showDesktopCart"
                        class="top-nav-link d-flex pr-0">
                        <i class="icon-function-link fal fa-shopping-cart"></i>
                        購物車
                        <div class="cart-item-num cart_count"></div>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <header class="container text-center">
        <a href="https://www.whyyoucry.com">
            <img src="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvc2V0dGluZy8xNGMwYzgzYzkzNjc3MzYyZjZjYjE2YzNiODBiYTdhOS5qcGciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjIwNDgsImZpdCI6ImNvdmVyIn19fQ=="
                class="shop-logo-index" alt="shop-logo" style="max-height:90px" />
        </a>
    </header>
    <nav class="container px-0 category-title-list-wrapper" id="categoryListTopWrapper">
        <ul class="wrap-style category-title-list" id="categoryListTop">
            <li>
                <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T01" class="category-title">
                    正面奶酥｜經典款 </a>
            </li>
            <li>
                <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T04&token=408b7c8ad06e4d9954fa2d948a01f508"
                    class="category-title">
                    正面奶酥｜腹黑可可抹醬 </a>
            </li>
            <li>
                <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T07" class="category-title">
                    正面奶酥｜深情伯爵抹醬 </a>
            </li>
            <li>
                <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T08" class="category-title">
                    正面奶酥｜苦情抹茶抹醬 </a>
            </li>
        </ul>
    </nav>
    <main>
        <section class="index-img-slider-section-wrapper container px-0">
            <div class="sfec-swiper-slider sfec-swiper-slider-index-img">
                <div class="sfec-swiper swiper" id="slideshow-0">
                    <ul class="sfec-swiper-wrapper swiper-wrapper">
                        <li class="sfec-swiper-slide swiper-slide">
                            <a href="javascript:;" target="_self">
                                <img
                                    src="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvYWQvYjNiNDlkZTRiNGQ2ZWRjNzYwODkyM2M0ZDE4ZmE5MGEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjoyMDQ4LCJmaXQiOiJjb3ZlciJ9fX0=" />
                            </a>
                        </li>
                        <li class="sfec-swiper-slide swiper-slide">
                            <a href="javascript:;" target="_self">
                                <img
                                    src="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvYWQvNDJjN2FkZDdhMjRkZTAyOTE3OGMyMTMwM2U0YThjNDAuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjoyMDQ4LCJmaXQiOiJjb3ZlciJ9fX0=" />
                            </a>
                        </li>
                        <li class="sfec-swiper-slide swiper-slide">
                            <a href="javascript:;" target="_self">
                                <img
                                    src="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvYWQvMmI5YmVlMDBjM2FkNjliY2UwZTVmOGU0OGFhMGNiMTcuanBlZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MjA0OCwiZml0IjoiY292ZXIifX19" />
                            </a>
                        </li>
                    </ul>
                    <div class="sfec-swiper-pagination swiper-pagination" id="slideshow-0-pagination"></div>
                </div>
                <div class="sfec-swiper-button-prev swiper-button-prev" id="slideshow-0-prev">
                    <i class="icon-slider-navigation fa fal fa-chevron-left"></i>
                </div>
                <div class="sfec-swiper-button-next swiper-button-next" id="slideshow-0-next">
                    <i class="icon-slider-navigation fa fal fa-chevron-right"></i>
                </div>
            </div>
        </section>
        <section class="index-product-section-wrapper container">
            <div class="section-title row">
                <div class="col"></div>
                <div class="text-center">最新商品</div>
                <div class="col"></div>
            </div>
            <div class="card-wrappper row">
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T12"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMTIvYmE0ZTZlYmQzNGMzYTQ0NjQwNDMzNWUzZGNjNzRmZmEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0NTAsImhlaWdodCI6Njc1LCJmaXQiOiJjb3ZlciJ9fX0="
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T12" class="card-title">
                                (新品)深情伯爵小時候 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">390</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T11"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMTEvMjZkNDYwMjY2MjQzYWM5YTE2NDcxZDFjZWNiOGQxYWMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0NTAsImhlaWdodCI6Njc1LCJmaXQiOiJjb3ZlciJ9fX0="
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T11" class="card-title">
                                (新品)苦情抹茶小時候 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">380</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T10"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMTAvZjdmZmQ4ZDE0MGYyOTdmM2M1M2MyOTY4NmY2ZjYxYzIuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0NTAsImhlaWdodCI6Njc1LCJmaXQiOiJjb3ZlciJ9fX0="
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T10" class="card-title">
                                (新品)腹黑可可小時候 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">360</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T09"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMDkvMjJlNTJjY2Q4ODZkYmNiNzIyNmNiZmNiMjkwYzJjMTguanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0NTAsImhlaWdodCI6Njc1LCJmaXQiOiJjb3ZlciJ9fX0="
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T09" class="card-title">
                                (新品)經典原味小時候 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">350</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T08"
                            class="card-img-wrapper">
                            <div class="overlay-card sold-out">
                                <div><i class="icon-overlay-card fal fa-frown"></i>商品售完</div>
                            </div>
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMDgvMWRjMmVkZDM3YWFiNGU4ZDEzZTAzNzEwYzU0MTM2OTkuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0NTAsImhlaWdodCI6Njc1LCJmaXQiOiJjb3ZlciJ9fX0="
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T08" class="card-title">
                                苦情抹茶抹醬 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">680</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T07"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMDcvYWM1MjRiOGQ1MGNiOTllOWQ2MDAzMjUwZTZhOGU3YWQuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0NTAsImhlaWdodCI6Njc1LCJmaXQiOiJjb3ZlciJ9fX0="
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T07" class="card-title">
                                深情伯爵抹醬 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">800</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T04"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMDQvMzc3MmZiZmM2MGVhNmNkMDJlMDg0YThkOWEwNTM4NjQuanBlZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDUwLCJoZWlnaHQiOjY3NSwiZml0IjoiY292ZXIifX19"
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T04" class="card-title">
                                大人味可可抹醬 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">760</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T01"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMDEvZDYyODA4ODhkMGEzZTcyZmZjOWU4MTJiYzMyOTAxMTAuanBlZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6NDUwLCJoZWlnaHQiOjY3NSwiZml0IjoiY292ZXIifX19"
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T01" class="card-title">
                                經典原味抹醬 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">750</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T16"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMTYvMDE4N2E3M2Y1M2I3ZDliZjE0NmI2N2E2NTJmNjM5OTMuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0NTAsImhlaWdodCI6Njc1LCJmaXQiOiJjb3ZlciJ9fX0="
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T16" class="card-title">
                                (新品)冷凍厚片-深情伯爵 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">125</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T15"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMTUvY2JiYTIwNTc5NWZhY2MxNzcwNjljZDAwZDQ4NjI5YjUuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0NTAsImhlaWdodCI6Njc1LCJmaXQiOiJjb3ZlciJ9fX0="
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T15" class="card-title">
                                (新品)冷凍厚片-腹黑可可 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">110</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T14"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMTQvNjVkYjYzNjc3N2QyMmY3MDExNjdkZjE0NjI4ZDIwMmEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0NTAsImhlaWdodCI6Njc1LCJmaXQiOiJjb3ZlciJ9fX0="
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T14" class="card-title">
                                (新品)冷凍厚片-經典原味 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">100</span>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-3">
                    <div class="product-card">
                        <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T02"
                            class="card-img-wrapper">
                            <img src="https://www.whyyoucry.com/view/default/assets/images/spinner_with_bg.gif"
                                data-original="https://v2cdn.sfec.cloud/eyJidWNrZXQiOiJzZi1lYy1zdGF0aWMiLCJrZXkiOiJwb3NpdGl2ZXl1bW15XzA2ZjIzZDEyL3VwbG9hZHMvcHJvZHVjdC9UMDIvN2E3ZmFjZWFkYWI1YWU2NDRhNWYzY2RiYzFkYTBhZGEuanBnIiwiZWRpdHMiOnsicmVzaXplIjp7IndpZHRoIjo0NTAsImhlaWdodCI6Njc1LCJmaXQiOiJjb3ZlciJ9fX0="
                                onerror="this.style.display='none'" />
                        </a>
                        <div class="card-title">
                            <a href="https://www.whyyoucry.com/product.php?action=detail&pid=T02" class="card-title">
                                （新）正面又可愛!品牌提袋 </a>
                        </div>
                        <div class="card-content">
                            <span class="product-price">20</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col col-6 col-lg-2">
                    <a href="javascript:;" class="btn btn-block btn-custom primary-outline size-md"
                        id="seeMoreBtn">逛更多商品<i class="icon-btn fal fa-smile-wink"></i></a>
                </div>
            </div>
        </section>
    </main>
    <!--頁尾-->
    <footer class="container-fluid px-0">
        <div class="container px-0">
            <div class="footer-section-wrapper-list">
                <section class="footer-category-mobile col col-12 px-0">
                    <div class="footer-section-wrapper col col-12 px-0 accordion" id="footerAccordion0">
                        <div class="footer-mobile-header">
                            <a class="link-footer" href="https://www.whyyoucry.com/menu_footer.php?id=1">品牌故事</a>
                        </div>
                    </div>
                    <div class="footer-section-wrapper col col-12 px-0 accordion" id="footerAccordion1">
                        <div class="footer-mobile-header">
                            <a class="link-footer" href="https://www.whyyoucry.com/menu_footer.php?id=2">付款與運送</a>
                        </div>
                    </div>
                    <div class="footer-section-wrapper col col-12 px-0 accordion" id="footerAccordion2">
                        <div class="footer-mobile-header">
                            <a class="link-footer" href="https://www.whyyoucry.com/menu_footer.php?id=4">隱私權政策</a>
                        </div>
                    </div>
                    <div class="footer-section-wrapper col col-12 px-0 accordion" id="footerAccordion3">
                        <div class="footer-mobile-header">
                            <a class="link-footer" href="https://www.whyyoucry.com/menu_footer.php?id=5">退換貨政策</a>
                        </div>
                    </div>
                </section>
                <section class="footer-category-desktop col col-4">
                    <div class="footer-link-wrapper">
                        <a href="https://www.whyyoucry.com/menu_footer.php?id=1" class="link-footer">
                            品牌故事 </a>
                        <a href="https://www.whyyoucry.com/menu_footer.php?id=2" class="link-footer">
                            付款與運送 </a>
                        <a href="https://www.whyyoucry.com/menu_footer.php?id=4" class="link-footer">
                            隱私權政策 </a>
                        <a href="https://www.whyyoucry.com/menu_footer.php?id=5" class="link-footer">
                            退換貨政策 </a>
                    </div>
                </section>
                <section class="footer-section-wrapper col col-12 col-lg-4 order-lg-1">
                    <div class="footer-content">
                        <div class="fb-page" data-href="https://www.facebook.com/positiveyummy/" data-tabs=""
                            data-width="" data-height="" data-small-header="true" data-adapt-container-width="true"
                            data-hide-cover="false" data-show-facepile="true">
                            <blockquote class="fb-xfbml-parse-ignore" cite="https://www.facebook.com/positiveyummy/">
                                <a
                                    href="https://www.facebook.com/positiveyummy/">正面奶酥</a><br /><br /><br />客服信箱：bowbow00358@gmail.com
                            </blockquote>
                        </div>
                    </div>
                </section>
                <section class="footer-section-wrapper col col-12 col-lg-4">
                    <div class="social-icon-wrapper">
                        <a href="https://www.facebook.com/positiveyummy/" target="_blank" class="link-social-icon"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/positive_yummy/" target="_blank"
                            class="link-social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="https://line.me/ti/p/@nomorecrying" target="_blank" class="link-social-icon"><i
                                class="fab fa-line"></i></a>
                        <a href="mailto:bowbow00358@gmail.com" target="_blank" class="link-social-icon"><i
                                class="fal fa-envelope"></i></a>
                        <span class="d-lg-none link-social-icon" data-toggle="tooltip" data-placement="top"
                            data-html="true"
                            title="&lt;p&gt;&lt;strong&gt;NO MORE CRYING&lt;br /&gt;&lt;/strong&gt;Since 2018.Sep&lt;/p&gt;
&lt;p&gt;&amp;copy;NO MORE CRYING /&lt;br /&gt;本公司已投保1000萬產品責任險&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;客服信箱：bowbow00358@gmail.com&lt;/p&gt;"><i
                                class="fal fa-info-circle"></i></span>
                    </div>
                </section>

                <!--版權和技術提供-->
                <section class="footer-section-wrapper col col-12 col-lg-4">
                    <div class="copyright-wrapper">
                        <span class="d-none d-lg-inline-block info-tooltip" data-toggle="tooltip"
                            data-placement="top" data-html="true"
                            title="&lt;p&gt;&lt;strong&gt;NO MORE CRYING&lt;br /&gt;&lt;/strong&gt;Since 2018.Sep&lt;/p&gt;
&lt;p&gt;&amp;copy;NO MORE CRYING /&lt;br /&gt;本公司已投保1000萬產品責任險&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;客服信箱：bowbow00358@gmail.com&lt;/p&gt;"><i
                                class="icon-info-tooltip fal fa-info-circle"></i></span>
                        <span class="copyright">&copy;2023 www.whyyoucry.com&nbsp;</span><a
                            href="https://www.sysfeather.com/?ref_w=https%3A%2F%2Fwww.whyyoucry.com" target="_blank"
                            class="copyright link-copyright">矽羽智慧電商</a>
                    </div>
                </section>
            </div>
        </div>
    </footer>

    <!--浮動按鈕-->
    <button class="float-btn-cart btn" onclick="location.href='https://www.whyyoucry.com/cart.php'"><span
            class="cart-item-num cart_count"></span><i class="icon-btn fal fa-shopping-cart"></i></button>
    <button class="float-btn-totop btn d-none" id="btnToTop"><i class="icon-btn fal fa-arrow-to-top"></i></button>

    <script data-button="" data-link=""
        data-title="%E5%8D%81%E6%9C%88%E9%A0%90%E8%B3%BC%E5%80%92%E6%95%B8%EF%BC%81%EF%BC%81" data-time="2023-10-12T14:00"
        data-cssBg="%23fffcf5" data-cssCounter="%23fc795b" data-cssCounterUnit="%23574a47" data-cssContent="%23574a47"
        data-cssBtn="%23fc795b" src="https://gag.sfec.cc/js/plugin/timer.js"></script>

    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                line: "https://line.me/ti/p/@nomorecrying", // Line QR code URL
                call_to_action: "Message us", // Call to action
                button_color: "#FF318E", // Color of button
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = 'https:',
                host = "getbutton.io",
                url = proto + '//static.' + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->
</body>

</html>
