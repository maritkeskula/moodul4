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
  <h2 class="detail-h2-desktop">GOLDEN FIGHTERS EMBROIDERED BEANIE: STAY WARM IN STYLE</h2>
</div>
</section>

<div class="container detail-page-info-wrapper">
<div class="merchandise-item merchandise-item-detail">
  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="images/merchandise-beanie.png" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="images/beanie1.png" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="images/beanie2.png" style="width:100%">
    </div>

    <div class="prev-next">
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
  </div>

    <div >
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <div class="slide-shop-and-price">
      <div class="detail-colors">
        <div class="detail-color-black"></div>
        <div class="detail-color-white"></div>
      </div>
      <div class="slide-shop-and-wish shop-shop-and-wish">
        <img src="images/heart-green.png" alt="">
        <img src="images/nav-shopping-cart.svg" alt="">
      </div>
    </div>
    <div class="detail-price">
      <p>Price <em>40$</em></p>
    </div>
    <!-- different layout for phone and desktop -->
    <p class="color-white detail-background-p-desktop">Stay warm, look great, and showcase your Golden Fighters pride with every wear. The Golden Fighters Embroidered Beanie isn’t just an accessory – it’s a must-have for any true fan.</p>
    <div class="detail-addtocart-and-wish-wrapper-desktop">
      <div class="detail-addtocart-and-wish">
        <button type="button" name="button" class="detail-cta-btn">
          <span class="detail-cart">
            <span>Add to cart</span>
            <img src="images/shopping-cart-black.png"></img>
          </span>
        </button>
        <img src="images/heart-green.png" alt="">
      </div>
    </div>
</div>

<div class="product-description-wrapper">
  <h3 class="highlighted-title product-title">PRODUCT DESCRIPTION</h3>
  <article class="post">
    <div class="product-description">
      <p>Elevate your winter wardrobe with the Golden Fighters Embroidered Beanie, where cozy meets chic. Crafted from premium, ultra-soft fabric, this beanie promises to keep you warm while making a bold statement.
      <br><span class="hidden-content" id="hidden-content"><span class="description-underline">Key Features:</span>

<br><strong>High-Quality Embroidery:</strong> Show your support for the Golden Fighters with detailed, vibrant embroidery that stands out.
<br><strong>Versatile Style:</strong> Whether you're hitting the slopes, heading to a game, or simply strolling through town, this beanie complements any outfit with ease.
<br><strong>Durable Material:</strong> Made to withstand the elements, the beanie retains its shape and color wash after wash.</span></p>
    </div>
    <div class="actions">
      <a href="#" class="button big" id="toggle-button" data-state="less">See More</a>
    </div>
  </article>
</div>
</div>

<section class="detail-background-and-cta"> <!-- different layout for phone and desktop -->
<div class="container">
  <p class="color-white detail-background-p-phone">Stay warm, look great, and showcase your Golden Fighters pride with every wear. The Golden Fighters Embroidered Beanie isn’t just an accessory – it’s a must-have for any true fan.</p>
</div>
<div class="detail-addtocart-and-wish-wrapper-phone">
  <div class="detail-addtocart-and-wish">
    <button type="button" name="button" class="detail-cta-btn">
      <span class="detail-cart">
        <span>Add to cart</span>
        <img src="images/shopping-cart-black.png"></img>
      </span>
    </button>
    <img src="images/heart-green.png" alt="">
  </div>
  </div>
  </div>
</section>


      <script src="{{ asset('js/detail.js') }}"></script>

</body>
</html>


</x-public-layout>
