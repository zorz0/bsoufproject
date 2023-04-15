
    <link rel="stylesheet" href="{{ asset('assets/card/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  <body>

    <div class = "card-wrapper">
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">

            <div class = "img-showcase">

              <img src = "/storage/img/{{ $data->image}}" alt = "shoe image">

            </div>
          </div>






        <!-- card right -->

        <div class = "product-content">
          <h2 class = "product-title">{{ $data->name }}</h2>
          <a href = "{{ route('store') }}" class = "product-link"> المتجر</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price"> الخصم: <span>${{ $data->discount_price}}</span></p>
            <p class = "new-price"> السعر الجديد: <span>${{ $data->price}}</span></p>
          </div>

          <div class = "product-detail">
            <h2>تفاصيل المنتج </h2>
            <p>{{$data->description}}</p>

          </div>







@auth

<form action="{{route('card.store')}}" method="POST">
    @csrf
    <input type="text" name="product_id" value="{{$data["id"]}}" hidden>
    <input type="text" name="user_id" value="{{Auth::user()->id}}" hidden>
          <div class = "purchase-info">
            <input type = "number" min = "0" value = "1">
            <button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
            <button type = "button" class = "btn">Compare</button>
          </div>
</form>
@endauth


          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>


    <script src="{{ asset('assets/card/script.js') }}"></script>


