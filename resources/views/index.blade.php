<x-public-layout>
<body>
<section  class="nav-and-hero" >
    <div class="container"> <!-- container for centering -->
        <div class="navbar">
            <!-- only on phone -->
            <div class="phone-menu">
                <!-- dropdown open and close with js -->
                <img src="images/menu-white.png" class="menubtn" onclick="openNav()">
                <div id="phoneNav" class="menu">
                    <img src="{{ asset('images/close.png') }}" class="closebtn" onclick="closeNav()" alt="">
                    <div class="dropdown">
                        <div class="dropdown-links white-color">
                            <a href="route('/')">Home</a>
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
            <div class="nav-links-desktop white-color only-homepage">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('shop') }}">Merchandise Shop</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
            <!--  -->

            <img class="nav-logo" src="images/logo/logo-full-white.svg" alt="logo">

            <div class="nav-shop-and-wish">
                <img class="nav-wish" src="images/heart-white.png" alt="">
                <img class="nav-shop" src="images/nav-shopping-cart.svg" alt="">
            </div>
        </div>

        <!-- hero -->
        <div class="hero white-color">
            <h1>UNLEASHING GOLDEN VICTORIES!</h1>
            <p>Experience the Power and Precision of the Golden Fighters as We Dominate the E-Sports Arena.</p>
            <a href="#scroll-to-team">
                <button type="button" name="button">Explore the Team</button></a>
        </div>
    </div>
</section>

<!-- team members section -->
<div class="container"> <!-- container for centering -->
    <section>
        <h2 id="scroll-to-team">OUR TEAM</h2>

        <div class="team-members-wrapper">
            <div class="team-members">
                <div class="team-member">
                    <img src="images/teammember1.png" alt="">
                </div>
                <div class="team-member-description">
                    <h3 class="team-members-name">ALEX “BLAZE" JOHNSON</h3>
                    <p>Role: Team Captain / DPS Specialist</p>
                </div>

                <div class="team-member-description description-right">
                    <h3 class="team-members-name">SARAH "SHADOW" WILLIAMS</h3>
                    <p>Role: Stealth Operations / Support</p>
                </div>
                <div class="team-member">
                    <img src="images/teammember2.png" alt="">
                </div>

                <div class="team-member">
                    <img src="images/teammember3.png" alt="">
                </div>
                <div class="team-member-description">
                    <h3 class="team-members-name">KEVIN "VORTEX" SMITH</h3>
                    <p>Role: Tank / Defense Expert</p>
                </div>

                <div class="team-member-description description-right">
                    <h3 class="team-members-name">jAKE "ROGUE" MARTINEZ</h3>
                    <p>Role: Scout / Flex Player</p>
                </div>
                <div class="team-member">
                    <img src="images/teammember4.png" alt="">
                </div>

                <div class="team-member">
                    <img src="images/teammember5.png" alt="">
                </div>
                <div class="team-member-description">
                    <h3 class="team-members-name">RYAN "FALCON" THOMSPON</h3>
                    <p>Role: Sniper / Long-Range Specialist</p>
                </div>
            </div>
        </div>
        <div class="line"></div>

    </section>
</div>

<!-- games team competes in section -->
<div class="container">
    <section>
        <div class="center-title">
            <h2 class="highlighted-title">GAMES WE COMPETE IN</h2>
        </div>

        <div class="games-compete">
            <div class="game-wrapper">
                <h3>LEAGUE OF LEGENDS</h3>
                <p class="games-p lol">The team has consistently ranked in the top tiers of regional tournaments, showcasing exceptional teamwork and strategic prowess. With multiple championship titles under their belt, the Golden Fighters are a force to be reckoned with in the highly competitive world of League of Legends.</p>
            </div>
            <div class="game-wrapper">
                <h3>COUNTER-STRIKE</h3>
                <p class="games-p counter-strike">Known for their precise aim and tactical coordination, the team has secured numerous victories in both online and offline tournaments. With a track record of dominating in regional and international competitions, the Golden Fighters continue to solidify their position as one of the top CS teams in the scene.</p>
            </div>
            <div class="game-wrapper">
                <h3>DOTA 2</h3>
                <p class="games-p dota2">Renowned for their adaptability and strategic depth, the team has achieved success in various Dota 2 tournaments. From securing top placements in prestigious events to showcasing innovative gameplay strategies, the Golden Fighters have proven themselves as formidable contenders in the ever-evolving landscape of Dota 2 esports.</p>
            </div>
        </div>

        <div class="line"></div>

    </section>
</div>

<!-- recent tournaments results section -->
<div class="container">
    <section>
        <h2>OUR RECENT TOURNAMENT RESULTS:</h2>

        <div class="tournament-results-wrapper">
            <div class="tournament">
                <h3>RIOT GAMES LCS SPRING SPLIT:</h3>
                <p>Golden Fighters placed 3rd overall in the regular season, advancing to the playoffs.
                    <br><br>
                    In the playoffs, the team made it to the semi-finals but narrowly lost to their opponents, finishing in 4th place overall.</p>
            </div>
            <div class="tournament">
                <h3>CS MAJOR CHAMPIONSHIP:</h3>
                <p>The team reached the quarter-finals but was defeated by a close margin, finishing in the top 8.</p>
            </div>
            <div class="tournament">
                <h3>DOTA 2 INTERNATIONAL INVITATIONAL:</h3>
                <p>Golden Fighters secured a top 16 placement in the group stage but unfortunately did not advance to the main event knockout stage.</p>
            </div>
        </div>

        <div class="line"></div>

    </section>
</div>

<!-- slider section -->
<div class="container">
    <section class="slider-wrapper">
        <h2 class="highlighted-title merch-title">EXPLORE OUR BESTSELLING MERCHANDISE</h2>
        <div class="slider">
            <div class="slide">
                <img src="images/merchandise-mouse.png" alt="">
                <div class="slide-content">
                    <a href="{{ route('detail-mouse') }}">Experience Precision Gaming with the Golden Fighters Mouse</a>
                    <div class="slide-shop-and-price">
                        <div class="slide-shop-and-wish">
                            <img src="images/nav-shopping-cart.svg" alt="">
                            <img src="images/heart-green.png" alt="">
                        </div>
                        <p>Price <em>80$</em></p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="images/merchandise-shirt.png" alt="">
                <div class="slide-content">
                    <a href="{{ route('detail-shirt') }}">Experience the Power of Victory with Our Golden Fighters Shirt</a>
                    <div class="slide-shop-and-price">
                        <div class="slide-shop-and-wish">
                            <img src="images/nav-shopping-cart.svg" alt="">
                            <img src="images/heart-green.png" alt="">
                        </div>
                        <p>Price <em>50$</em></p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="images/merchandise-keyboard.png" alt="">
                <div class="slide-content">
                    <a href="{{ route('detail-keyboard') }}">Golden Fighters Pro Gaming Keyboard</a>
                    <div class="slide-shop-and-price">
                        <div class="slide-shop-and-wish">
                            <img src="images/nav-shopping-cart.svg" alt="">
                            <img src="images/heart-green.png" alt="">
                        </div>
                        <p>Price <em>90$</em></p>
                    </div>
                </div>
            </div>
            <div class="slide">
                <img src="images/merchandise-beanie.png" alt="">
                <div class="slide-content">
                    <a href="{{ route('detail-beanie') }}">Golden Fighters Embroidered Beanie: StayWarm in Style</a>
                    <div class="slide-shop-and-price">
                        <div class="slide-shop-and-wish">
                            <img src="images/nav-shopping-cart.svg"alt="">
                            <img src="images/heart-green.png" alt="">
                        </div>
                        <p>Price <em>40$</em></p>
                    </div>
                </div>
            </div>
        </div>

        <a class="slider-button" href="{{ route('shop') }}" target="_blank">Explore more</a>

    </section>
</div>
      <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
    </x-public-layout>
