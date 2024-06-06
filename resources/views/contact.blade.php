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
      <h2 class="contacth2">GET IN TOUCH WITH US</h2>
      <div class="center-p">
        <p>We'd love to hear from you! Whether you have a question, feedback, or need assistance, feel free to reach out to us through any of the following methods:</p>
      </div>
    </div>
  </section>

  <div class="container">
  <section class="form-container-wrapper">
    <div class="form-container">
    <form action="/action_page.php">
      <div class="form-container-input">
        <label for="fname">Name</label>
        <input type="text" id="fname" name="firstname">
      </div>
      <div class="form-container-input">
        <label for="lname">Email</label>
        <input type="text" id="lname" name="lastname">
      </div>
      <div class="form-container-input">
        <label for="message">Message</label>
        <textarea id="message" name="message" style="height:20rem;"></textarea>
      </div>
      <div class="center-contact-button">
        <input class="white-color" type="submit" value="Send">
      </div>
    </form>
  </div>

    <div class="footer-contact-info contactc-info">
      <h4>EMAIL:</h4>
      <p>General Inquiries: info@goldenfighters.com<br>
  Support: support@goldenfighters.com<br>
  Sales: sales@goldenfighters.com</p>
      <h4>PHONE:</h4>
      <p>Customer Service: +1 (800) 123-4567<br>
  Support Hotline: +1 (800) 765-4321</p>
    </div>
  </section>
  </div>

      <script src="{{ asset('js/contact.js') }}"></script>
</body>
</html>

    </x-public-layout>
