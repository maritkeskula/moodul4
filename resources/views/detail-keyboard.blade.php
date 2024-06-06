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
      <h2 class="detail-h2-desktop">GOLDEN FIGHTERS PRO GAMING KEYBOARD</h2>
    </div>
  </section>

  <div class="container detail-page-info-wrapper">
    <div class="merchandise-item merchandise-item-detail">
      <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="images/merchandise-keyboard.png" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="images/keyboard1.png" style="width:100%">
        </div>

        <div class="prev-next">
          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
        </div>
      </div>

        <div >
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
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
          <p>Price <em>90$</em></p>
        </div>
        <!-- different layout for phone and desktop -->
        <p class="color-white detail-background-p-desktop">Take your gaming experience to the next level with the Golden Fighters Pro Gaming Keyboard – where style meets substance and every keystroke leads to victory.</p>
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
          <p>Introducing the Golden Fighters Pro Gaming Keyboard, the ultimate tool for every serious gamer. Designed with precision and performance in mind, this keyboard is not just an accessory, but a game-changing asset in your arsenal.
          <br><span class="hidden-content" id="hidden-content"><span class="description-underline">Key Features:</span>
  <br><strong>Advanced Mechanical Switches<br></strong>
  Experience the pinnacle of gaming responsiveness with our state-of-the-art mechanical switches. Each key press is swift, accurate, and tactile, ensuring you stay ahead in every match.

  <br><strong>Customizable RGB Backlighting<br></strong>
  Illuminate your gaming setup with vibrant, customizable RGB lighting. Choose from a spectrum of colors and dynamic lighting effects to match your gaming mood or team colors. The Golden Fighters Pro allows for personalized lighting profiles, making your keyboard as unique as your playstyle.

  <br><strong>Durable, Gold-Plated Design<br></strong>
  Crafted with a sleek, gold-plated finish, this keyboard combines durability with style. The robust construction ensures longevity, even with the most intense gaming sessions, while the luxurious design makes a bold statement.

  <br><strong>Anti-Ghosting & N-Key Rollover<br></strong>
  Never miss a single command with anti-ghosting technology and full N-key rollover. Execute complex combos and multi-key commands with precision, knowing every keystroke will be registered accurately.

  <br><strong>Ergonomic Design<br></strong>
  Designed for comfort during long gaming sessions, the Golden Fighters Pro features an ergonomic layout that reduces strain and fatigue. The detachable wrist rest provides additional support, ensuring you stay comfortable and focused.

  <br><strong>Programmable Macros<br></strong>
  Gain a competitive edge with programmable macro keys. Customize your gameplay by assigning complex sequences to single keys, allowing for faster reactions and enhanced control.

  <br><strong>Dedicated Media Controls<br></strong>
  Easily manage your media without interrupting your game. The dedicated media controls let you adjust volume, skip tracks, and more, all at the touch of a button.

  <br><strong>Elevate Your Game<br></strong>
  With the Golden Fighters Pro Gaming Keyboard, you’re not just playing the game; you’re mastering it. Whether you’re in the heat of battle or strategizing your next move, this keyboard provides the precision, speed, and customization you need to dominate.</span></p>
        </div>
        <div class="actions">
          <a href="#" class="button big" id="toggle-button" data-state="less">See More</a>
        </div>
      </article>
    </div>
  </div>

  <section class="detail-background-and-cta"> <!-- different layout for phone and desktop -->
  <div class="container">
      <p class="color-white detail-background-p-phone">Take your gaming experience to the next level with the Golden Fighters Pro Gaming Keyboard – where style meets substance and every keystroke leads to victory.</p>
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
