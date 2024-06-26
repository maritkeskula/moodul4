<x-public-layout>
  <body>
    <section class="nav-and-hero nav-and-hero-shop">
    <div class="container"> <!-- container for centering -->
      <div class="navbar">
    <!-- only on phone -->
        <div class="phone-menu">
            <!-- dropdown open and close with js -->
          <img src="images/menu-black.png" class="menubtn" onclick="openNav()">
          <div class="menu">
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
      <h2 class="detail-h2-desktop">IMMERSE YOURSELF IN VICTORY WITH GOLDEN FIGHTERS HEADPHONES</h2>
    </div>
  </section>

  <div class="container detail-page-info-wrapper">
    <div class="merchandise-item merchandise-item-detail">
      <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="images/merchandise-headphones.png" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/headphones1.png" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/headphones2.png" style="width:100%">
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
          <p>Price <em>180$</em></p>
        </div>
        <!-- different layout for phone and desktop -->
        <p class="color-white detail-background-p-desktop">Unleash Your Inner Champion: With Golden Fighters Headphones, every sound is a victory. Get ready to conquer your audio world and immerse yourself in the ultimate auditory triumph.
  Elevate your sound experience today. Victory awaits with Golden Fighters Headphones.</p>
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
          <p>Step into a world where sound meets supremacy with the Golden Fighters Headphones. Designed for champions who demand the best, these headphones deliver an unparalleled audio experience that will elevate your gaming, music, and entertainment to new heights.
          <br><span class="hidden-content" id="hidden-content"><span class="description-underline">Key Features:</span>
  <br><strong>Superior Sound Quality:</strong> Equipped with advanced audio technology, Golden Fighters Headphones provide crystal-clear sound and booming bass, ensuring you hear every detail and feel every beat.

  <br><strong>Comfortable Design:</strong> Crafted with ergonomic precision, these headphones feature cushioned ear pads and an adjustable headband for hours of comfortable wear, whether you're in an intense gaming session or enjoying your favorite playlist.

  <br><strong>Stunning Aesthetics:</strong> With a sleek, golden finish and modern design, Golden Fighters Headphones not only sound incredible but look exceptional. Stand out in style and show off your taste for the extraordinary.

  <br><strong>Noise Cancellation:</strong> Block out distractions and immerse yourself fully in your audio experience. The active noise cancellation technology ensures that unwanted sounds stay out, and you stay focused.

  <br><strong>Built-In Microphone:</strong> Communicate clearly with your team or take calls effortlessly with the integrated high-definition microphone. Your voice will be heard loud and clear, without any distortion.

  <br><strong>Long Battery Life:</strong> Enjoy extended playtime with a powerful battery that keeps you connected for hours on end. The quick charge feature also ensures you're never left waiting.

  <br><strong>Wireless Connectivity:</strong> Experience the freedom of wireless listening with seamless Bluetooth connectivity. Pair easily with your devices and enjoy the convenience of wireless technology.
  </span></p>
        </div>
        <div class="actions">
          <a href="#" class="button big" id="toggle-button" data-state="less">See More</a>
        </div>
      </article>
    </div>
  </div>

  <section class="detail-background-and-cta"> <!-- different layout for phone and desktop -->
  <div class="container">
      <p class="color-white detail-background-p-phone">Unleash Your Inner Champion: With Golden Fighters Headphones, every sound is a victory. Get ready to conquer your audio world and immerse yourself in the ultimate auditory triumph.
  Elevate your sound experience today. Victory awaits with Golden Fighters Headphones.</p>
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

</body>
</html>
</x-public-layout>
@vite(['resources/js/detail.js'])
