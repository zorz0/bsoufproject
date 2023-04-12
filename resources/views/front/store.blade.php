@extends('layouts.master')
@section('content')
<section class="u-clearfix u-section-1">
    <div>
        <div class="u-align-center u-carousel u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-on-hover u-gallery-2"
            data-interval="5000" data-u-ride="carousel" id="carousel-2a64">
            <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                <li data-u-target="#carousel-2a64" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle"
                    style="width: 10px; height: 10px;"></li>
                <li data-u-target="#carousel-2a64" data-u-slide-to="1" class="u-grey-70 u-shape-circle"
                    style="width: 10px; height: 10px;"></li>
            </ol>
            <div class="u-carousel-inner u-gallery-inner" role="listbox" style="border-radius: 0;">
                <div class="u-active u-carousel-item u-effect-fade u-gallery-item u-carousel-item-1">
                    <div class="u-back-slide" data-image-width="100%" data-image-height="836">
                        <img class="u-back-image u-expanded lazyload"
                            data-src="{{asset('/assets/bks')}}/images/iStock-1081560570-1591947820.jpg">
                    </div>
                </div>
                <div class="u-carousel-item u-effect-fade u-gallery-item u-carousel-item-2">
                    <div class="u-back-slide" data-image-width="100%" data-image-height="836">
                        <img class="u-back-image u-expanded lazyload"
                            data-src="{{asset('/assets/bks')}}/images/iStock-1081560570-1591947820.jpg">
                    </div>
                </div>
            </div>
            <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1"
                href="#carousel-2a64" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.847 451.847">
                        <path
                            d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.847 451.847">
                        <path
                            d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z">
                        </path>
                    </svg>
                </span>
            </a>
            <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2"
                href="#carousel-2a64" role="button" data-u-slide="next">
                <span aria-hidden="true">
                    <svg viewBox="0 0 451.846 451.847">
                        <path
                            d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
                <span class="sr-only">
                    <svg viewBox="0 0 451.846 451.847">
                        <path
                            d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z">
                        </path>
                    </svg>
                </span>
            </a>
        </div>
    </div>
</section>

<section class="u-clearfix u-section-1">
    <div class="row store">
        <div class="container">

            <div class="col-md-2 box3">
                <h3>
                    أمان
                </h3>
                <p class="font-weight-bolder">
                    الدفع عند التوصيل
                </p>
            </div>
            <div class="col-md-2 box">
                <h3>
                    صحي
                </h3>
                <p class="font-weight-bolder">
                    بدون مواد حافظة
                </p>
            </div>
            <div class="col-md-2 box">
                <h3>
                    النظافة
                </h3>
                <p class="font-weight-bolder">
                    طعام بيتي صحي
                </p>
            </div>
            <div class="col-md-2 box">
                <h3>
                    الجودة
                </h3>
                <p class="font-weight-bolder">
                    ضمان جودة المنتجات
                </p>
            </div>
            <div class="col-md-2 box2">
                <h3>
                    توصيل سريع
                </h3>
                <p class="font-weight-bolder">
                    لجميع انحاء المملكة
                </p>
            </div>
        </div>
    </div>
</section>

<section class="u-clearfix u-section-1">
    <div class="row store">
        <div class="ct-blog col-sm-6 col-md-2">
            <div class="fauxcrop">
                <a href="#"><img class="category" alt="khayba" src="{{asset('/assets/bks')}}/images/khayba.jpg"></a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="ct-blog col-sm-6 col-md-1">
            <div style="margin-top: 130%;">
                <a class="smore" href="#">مشاهدة المزيد</a>
            </div>
        </div>
    </div>
    <div class="row store">
        <div class="ct-blog col-sm-6 col-md-2">
            <div class="fauxcrop">
                <a href="#"><img class="category" alt="khayba" src="{{asset('/assets/bks')}}/images/khayba.jpg"></a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="ct-blog col-sm-6 col-md-1">
            <div style="margin-top: 130%;">
                <a class="smore2" href="#">مشاهدة المزيد</a>
            </div>
        </div>
    </div>
    <div class="row store">
        <div class="ct-blog col-sm-6 col-md-2">
            <div class="fauxcrop">
                <a href="#"><img class="category" alt="khayba" src="{{asset('/assets/bks')}}/images/khayba.jpg"></a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="ct-blog col-sm-6 col-md-1">
            <div style="margin-top: 130%;">
                <a class="smore2" href="#">مشاهدة المزيد</a>
            </div>
        </div>
    </div>
    <div class="row store">
        <div class="ct-blog col-sm-6 col-md-2">
            <div class="fauxcrop">
                <a href="#"><img class="category" alt="khayba" src="{{asset('/assets/bks')}}/images/khayba.jpg"></a>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="ct-blog col-sm-6 col-md-1">
            <div style="margin-top: 130%;">
                <a class="smore2" href="#">مشاهدة المزيد</a>
            </div>
        </div>
    </div>
</section>

<section class="u-clearfix u-section-1">
    <div class="u-mostsell">

    </div>
    <div class="row store " style="justify-content: center">
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="product">
                <h3>مربى فراولة</h3>
                <p>مربى الفراولة مع الحبيبات، شهي ولذيذ ..</p>
                <hr class="myhr">
                <a href="#"><img class="myimg" alt="product" src="{{asset('/assets/bks')}}/images/product.jpg"></a>
                <hr class="myhr">
                <h3>
                    أ.د 100
                </h3>
            </div>
        </div>
        <div class="ct-blog col-sm-6 col-md-1">
            <div style="margin-top: 130%;">
                <a class="smore2" href="#">مشاهدة المزيد</a>
            </div>
        </div>
    </div>
</section>
@endsection
