<x-public-layout>
  <body>

<section class="nav-and-hero nav-and-hero-shop">
<div class="container"> <!-- container for centering -->
  <div class="navbar">
<!-- only on phone -->
    <div class="phone-menu">
        <!-- dropdown open and close with js -->
      <img src="images/menu-black.png" class="menubtn" onclick="openNav()">
      <div id="phoneNav" class="menu">
        <img src="images/close.png" class="closebtn" onclick="closeNav()" alt="">
          <div class="dropdown">
            <div class="dropdown-links white-color">
              <a href="{{ route('home') }}">Home</a>
              <a href="{{ route('shop') }}">Merchandise Shop</a>
              <a href="{{ route('contact') }}">Contact</a>
            </div>
            <div class="dropdown-socials">
              <a id="instagram" href="instagram.com"></a>
              <a id="facebook" href="facebook.com"></a>
              <a id="twitter" href="twitter.com"></a>
            </div>
            <div class="nav-contact-info white-color">
              <p>General Inquiries: info@goldenfighters.com</p>
              <p>Support: support@goldenfighters.com</p>
              <p>Sales: sales@goldenfighters.com</p>
              <p>Customer Service: +1 (800) 123-4567</p>
              <p>Support Hotline: +1 (800) 765-4321</p>
            </div>
          </div>
        </div>
      </div>
<!--  -->

<!-- only on dekstop -->
    <div class="nav-links-desktop white-color other-pages">
      <a href="{{ route('home') }}">Home</a>
      <a href="{{ route('shop') }}">Merchandise Shop</a>
      <a href="{{ route('contact') }}">Contact</a>
    </div>
<!--  -->

    <img class="nav-logo" src="images/logo/logo-full-black.svg" alt="logo">

    <div class="nav-shop-and-wish">
      <img class="nav-wish" src="images/heart-green.png" alt="">
      <img class="nav-shop" src="images/nav-shopping-cart.svg" alt="">
    </div>
  </div>

<!-- title -->
    <h2>EXPLORE GOLDEN FIGHTERS OFFICIAL MERCHANDISE</h2>
  </div>
</section>

<!-- filters -->
<div class="container">
<section>
  <div class="filters-wrapper">
    <div class="filter">
      <p>Filter:</p>
      <button type="button" name="button" class="filter-btn" data-filter="Gadgets">Gadgets</button>
      <button type="button" name="button" class="filter-btn" data-filter="Clothes">Clothes</button>
    </div>
    <div class="sort">
      <p>Sort:</p>
      <button type="button" name="button" class="sort-btn" data-sort="Lowest price">Lowest price</button>
      <button type="button" name="button" class="sort-btn" data-sort="Highest price">Highest price</button>
    </div>
  </div>
  <!-- items -->
  <div class="shop-content-container">
    <div class="merchandise-item">
      <img src="images/merchandise-mouse.png" alt="">
      <div class="slide-content">
        <a href="{{ route('detail-mouse') }}">Experience Precision Gaming with the Golden Fighters Mouse</a>
        <div class="slide-shop-and-price">
          <div class="slide-shop-and-wish shop-shop-and-wish">
            <img src="images/nav-shopping-cart.svg" alt="">
            <img src="images/heart-green.png" alt="">
          </div>
          <p>Price <em>80$</em></p>
        </div>
      </div>
    </div>

    <div class="merchandise-item">
      <img src="images/merchandise-headphones.png" alt="">
      <div class="slide-content">
        <a href="{{ route('detail-headphones') }}">Immerse Yourself in Victory with Golden Fighters Headphones</a>
        <div class="slide-shop-and-price">
          <div class="slide-shop-and-wish shop-shop-and-wish">
            <img src="images/nav-shopping-cart.svg" alt="">
            <img src="images/heart-green.png" alt="">
          </div>
          <p>Price <em>180$</em></p>
        </div>
      </div>
    </div>

    <div class="merchandise-item">
      <img src="images/merchandise-shirt.png" alt="">
      <div class="slide-content">
        <a href="{{ route('detail-shirt') }}">Experience the Power of Victory with Our Golden Fighters Shirt</a>
        <div class="slide-shop-and-price">
          <div class="slide-shop-and-wish shop-shop-and-wish">
            <img src="images/nav-shopping-cart.svg" alt="">
            <img src="images/heart-green.png" alt="">
          </div>
          <p>Price <em>50$</em></p>
        </div>
      </div>
    </div>

    <div class="merchandise-item">
      <img src="images/merchandise-beanie.png" alt="">
      <div class="slide-content">
        <a href="{{ route('detail-beanie') }}">Golden Fighters Embroidered Beanie: Stay Warm in Style</a>
        <div class="slide-shop-and-price">
          <div class="slide-shop-and-wish shop-shop-and-wish">
            <img src="images/nav-shopping-cart.svg" alt="">
            <img src="images/heart-green.png" alt="">
          </div>
          <p>Price <em>40$</em></p>
        </div>
      </div>
    </div>

    <div class="merchandise-item">
      <img src="images/merchandise-controller.png" alt="">
      <div class="slide-content">
        <a href="{{ route('detail-controller') }}">Experience Ultimate Control with the Titan Elite Gaming Controller</a>
        <div class="slide-shop-and-price">
          <div class="slide-shop-and-wish shop-shop-and-wish">
            <img src="images/nav-shopping-cart.svg" alt="">
            <img src="images/heart-green.png" alt="">
          </div>
          <p>Price <em>200$</em></p>
        </div>
      </div>
    </div>

    <div class="merchandise-item">
      <img src="images/merchandise-keyboard.png" alt="">
      <div class="slide-content">
        <a href="{{ route('detail-keyboard') }}">Golden Fighters Pro Gaming Keyboard Pro Gaming</a>
        <div class="slide-shop-and-price">
          <div class="slide-shop-and-wish shop-shop-and-wish">
            <img src="images/nav-shopping-cart.svg" alt="">
            <img src="images/heart-green.png" alt="">
          </div>
          <p>Price <em>90$</em></p>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

      <script src="{{ asset('js/shop.js') }}"></script>
  </body>
</html>

    </x-public-layout>
