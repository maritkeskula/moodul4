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
      <h2 class="detail-h2-desktop">EXPIERENCE PRECISION GAMING WITH THE GOLDEN FIGHTERS MOUSE</h2>
    </div>
  </section>

  <div class="container detail-page-info-wrapper">
    <div class="merchandise-item merchandise-item-detail">
      <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="images/merchandise-mouse.png" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/mouse1.png" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/mouse2.png" style="width:100%">
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
          <p>Price <em>80$</em></p>
        </div>
        <!-- different layout for phone and desktop -->
        <p class="color-white detail-background-p-desktop">Join the ranks of elite gamers and take your gaming to the next level with the Golden Fighters Mouse. Precision, performance, and personalization—all in one exceptional package.</p>
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
          <p>Elevate your gaming to the next level with the Golden Fighters Mouse, designed for gamers who demand the best in performance, precision, and style. Whether you're navigating the battlefield or executing complex strategies, this mouse is engineered to meet your every need.
          <br><span class="hidden-content" id="hidden-content"><span class="description-underline">Key Features:</span>
    <br><strong>High-Precision Sensor:</strong> Equipped with a state-of-the-art optical sensor offering up to 16,000 DPI, ensuring pinpoint accuracy and responsiveness for every movement.
    <br><strong>Customizable RGB Lighting:</strong> Personalize your gaming experience with dynamic RGB lighting. Choose from a spectrum of colors and effects to match your setup and mood.
    <br><strong>Ergonomic Design:</strong> Designed for comfort during extended gaming sessions, the Golden Fighters Mouse fits perfectly in your hand, reducing fatigue and improving control.
    <br><strong>Programmable Buttons:</strong> Take full control with 8 programmable buttons. Customize macros and commands to execute complex actions with ease.
    <br><strong>Durable Build:</strong> Built to withstand the rigors of intense gaming, this mouse features high-quality materials and switches rated for 50 million clicks.
    <br><strong>Adjustable Weight System:</strong> Fine-tune the mouse weight to your preference with the included adjustable weight system, enhancing your gaming precision.<br>
    <br><strong>Technical Specifications:</strong>
    <br><strong>Sensor Type:</strong> Optical
    <br><strong>DPI Range:</strong> 100 to 16,000 DPI
    <br><strong>Polling Rate:</strong> 1000Hz
    <br><strong>Connectivity:</strong> Wired USB
    <br><strong>Buttons:</strong> 8 programmable buttons
    <br><strong>Lighting:</strong> Customizable RGB
    <br><strong>Dimensions:</strong> [Dimensions in mm/inches]
    <br><strong>Weight:</strong> [Weight in grams/pounds]
    <br><strong>Cable Length:</strong> [Length in meters/feet]
    <br><strong>Compatibility:</strong> Windows, Mac OS, Linux
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
      <p class="color-white detail-background-p-phone">Join the ranks of elite gamers and take your gaming to the next level with the Golden Fighters Mouse. Precision, performance, and personalization—all in one exceptional package.</p>
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
