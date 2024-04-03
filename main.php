<?php
session_start();
if(!isset($_SESSION['logged_user'])){
   header("Location: pages/media.html");
}
if(isset($_SESSION['logged_user'])) {
            // Display an alert message if the user is successfully logged in
            echo "<script>alert('Hello " . $_SESSION['logged_user'] . ", you are successfully logged in!');</script>";

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <title>Landing Page</title>
</head>
<body>
    <div class="outer">
        <div class="page logo">
            <div class="logo1">
                <div class="image">
                    <img class="image1" src="./img/qhw5rnzk.png" alt="">
                </div>
            </div>
        </div>
        <div class="page nav1">
            <div class="searchbar">
               <!-- <input class="search" oninput="search();" type="search" placeholder="Search For Projects Here">-->
            </div>
        </div>
        <div class="page nav2">
            <div class="navigation-bar">
                <h2>WELCOME TO MANOS</h2>
                <nav>
                    <a class="" href="index.php">PAGES</a>
                    <a class="" href="./pages/form.html">FEEDBACK</a>
                    <a class="" href="./pages/terms.html">TERMS</a>
                    <a class="" href="logout.php">LOGOUT</a>
                    <button class="LOGIN"><a href="./pages/media.HTML">LOGIN/SIGN UP</a></button>
                  </nav>
            </div>
        </div>
        <div class="page nav3">
          <div class="home">
          <h2><a href="#">HOME</a></h2>
          </div>
        </div>
        <div class="page nav4">
            <div class="navigation1">
                <ul>
                    <li class="dom"><a href="exp.html">DOMAINS</a>
                      <div class="dropdown1">
                        <ul>
                        <li><a href="#">DOMAIN1</a></li>
                        <li><a href="#">DOMAIN2</a></li>
                        <li><a href="#">DOMAIN3</a></li>
                        <li><a href="#">DOMAIN4</a></li>
                        <li><a href="#">DOMAIN5</a></li>
                        <li><a href="#">DOMAIN6</a></li>
                        <li><a href="#">DOMAIN7</a></li>
                        <li><a href="#">DOMAIN8</a></li>
                        <li><a href="#">DOMAIN9</a></li>
                        <li><a href="#">DOMAIN10</a></li>
                        </ul>
                      </div>
                    </li>
                    <li><a href="./projectlandingpage/agriculture.html">AGRICULTURE</a></li>
                    <li><a href="./projectlandingpage/electronics.html">ELECTRONICS</a></li>
                    <li><a href="./projectlandingpage/Rasberrypie.html">RASBERRY PIE</a></li>
                    <li><a href="./projectlandingpage/ArtsandCraft.html">ARTS AND CRAFT</a></li>
                    <li><a href="./profilepage/profile.php">PROFILE</a></li>
                    <li><a href="./creating.php">MakeBlogs</a></li>
                </ul>
            </div>
        </div>
        <div class="page dash"></div>
        <div class="page main content1">
          <div class="section main1">
              <div class="main1con">
                <h1>WELCOME TO MANOS COMMUNITY</h1>
                <p>learn new things,share your project and connect with other using manos platform</p><br>
                <p>we manos provide a platform in good hope so that communities can grow together</p>
              </div>
              </div>
              
          <div class="section main2">
              <div class="main2con">
                <div class="pricing-container">
                  <div class="pricing-plan">
                    <div class="plan-title">CREATE</div>
                    <div class="plan-price">SHARE WITH COMMUNITY</div>
                    <ul class="plan-features">
                      <li>✅ </li>
                      <li>✅ </li>
                      <li>🚫 Support</li>
                    </ul>
                    <!--<button class="plan-button">Sign Up</a>-->
                  </div>
                  <div class="pricing-plan">
                    <div class="plan-title">LEARN</div>
                    <div class="plan-price">NEW PROJECTS FOR YOU</div>
                    <ul class="plan-features">
                      <li>✅ </li>
                      <li>✅ </li>
                      <li>✅ Phone &amp; Email Support</li>
                    </ul>
                    <!--<button class="plan-button">Sign Up</a>-->
                  </div>
                  <div class="pricing-plan">
                    <div class="plan-title">COMMUNITIES</div>
                    <div class="plan-price">NETWORK WITH OTHERS</div>
                    <ul class="plan-features">
                      <li>✅ </li>
                      <li>✅</li>
                      <li>✅GET SUPPORT</li>
                    </ul>
                    <!--<button class="plan-button">Sign Up</a>-->
                  </div>
              </div>
          </div>
          </div>
          <div class="section main3">
              <div class="main3con">
                <section id="tranding">
                  <div class="containerk">
                    <h3 class="text-center section-subheading">- Just Swip it -</h3>
                    <h1 class="text-center section-heading">Tranding Projects</h1>
                  </div>
                  <div class="container">
                    <div class="swiper tranding-slider">
                      <div class="swiper-wrapper">
                         Slide-start 
                        <div class="swiper-slide tranding-slide">
                          <div class="tranding-slide-img">
                            <img src="./img/half.jpg" alt="Tranding">
                          </div>
                          <div class="tranding-slide-content">
                            <h1 class="food-price">$20</h1>
                            <div class="tranding-slide-content-bottom">
                              <h2 class="food-name">
                                Methi
                              </h2>
                              <h3 class="food-rating">
                                <span>4.5</span>
                                <div class="rating">
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                </div>
                              </h3>
                            </div>
                          </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                          <div class="tranding-slide-img">
                            <img src="./img/img10.jpg" alt="Tranding">
                          </div>
                          <div class="tranding-slide-content">
                            <h1 class="food-price">$20</h1>
                            <div class="tranding-slide-content-bottom">
                              <h2 class="food-name">
                                Night Sky Lamp
                              </h2>
                              <h3 class="food-rating">
                                <span>4.5</span>
                                <div class="rating">
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                </div>
                              </h3>
                            </div>
                          </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                          <div class="tranding-slide-img">
                            <img src="./img/soldering-finished.jpg.webp" alt="Tranding">
                          </div>
                          <div class="tranding-slide-content">
                            <h1 class="food-price">$40</h1>
                            <div class="tranding-slide-content-bottom">
                              <h2 class="food-name">
                                Mini Robot
                              </h2>
                              <h3 class="food-rating">
                                <span>4.5</span>
                                <div class="rating">
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                </div>
                              </h3>
                            </div>
                          </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                          <div class="tranding-slide-img">
                            <img src="./img/STEAM-Project-Homopolar-motors-BABBLE-DABBLE-DO-title.jpg" alt="Tranding">
                          </div>
                          <div class="tranding-slide-content">
                            <h1 class="food-price" style="color: rgb(98, 98, 100)">$15</h1>
                            <div class="tranding-slide-content-bottom">
                              <h2 class="food-name" style="color: rgb(98, 98, 100) ">
                                Tiny Dancer
                              </h2>
                              <h3 class="food-rating">
                                <span style="color: rgb(98, 98, 100);">4.5</span>
                                <div class="rating">
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                </div>
                              </h3>
                            </div>
                          </div>
                        </div>
                        <!-- Slide-end 
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                          <div class="tranding-slide-img">
                            <img src="./img/Screenshot (132).png (132).png" alt="Tranding">
                          </div>
                          <div class="tranding-slide-content">
                            <h1 class="food-price" style="color: orangered">$15</h1>
                            <div class="tranding-slide-content-bottom">
                              <h2 class="food-name"  style="color: orangered">
                                Humanoid
                              </h2>
                              <h3 class="food-rating">
                                <span  style="color: orangered">4.5</span>
                                <div class="rating">
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                </div>
                              </h3>
                            </div>
                          </div>
                        </div>
                        <!-- Slide-end 
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                          <div class="tranding-slide-img">
                            <img src="./img/a31ba48afde97.jpg" alt="Tranding">
                          </div>
                          <div class="tranding-slide-content">
                            <h1 class="food-price">$20</h1>
                            <div class="tranding-slide-content-bottom">
                              <h2 class="food-name">
                                Glowing Gelatin
                              </h2>
                              <h3 class="food-rating">
                                <span>4.5</span>
                                <div class="rating">
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                </div>
                              </h3>
                            </div>
                          </div>
                        </div>
                        <!-- Slide-end 
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                          <div class="tranding-slide-img">
                            <img src="./img/a6ff5242b8bf9.jpg" alt="Tranding">
                          </div>
                          <div class="tranding-slide-content">
                            <h1 class="food-price"  style="color: orangered">$8</h1>
                            <div class="tranding-slide-content-bottom">
                              <h2 class="food-name"  style="color: orangered">
                                Mixing Magic
                              </h2>
                              <h3 class="food-rating">
                                <span  style="color: orangered">4.5</span>
                                <div class="rating">
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                  <ion-icon name="star"></ion-icon>
                                </div>
                              </h3>
                            </div>
                          </div>
                        </div>
                        <!-- Slide-end -->
                      </div>
            
                      <div class="tranding-slider-control">
                        <div class="swiper-button-prev slider-arrow">
                          <ion-icon name="arrow-back-outline"></ion-icon>
                        </div>
                        <div class="swiper-button-next slider-arrow">
                          <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <div class="swiper-pagination"></div>
                      </div>
            
                    </div>
                  </div>
                </section>

                
              
            
              </div>
          </div>
          <!--<div class="section main4">
            <div class="main4con"></div>
        </div>-->
      </div>
        <div class="page foot">
            <!--<footer>
                <div class="about-section" id="about">
                    <h1>About Us</h1>
                    <ul class="imp"><li>Contact us</li>
                    <li>Credits</li>
                    <li>TERMS AND CONDITIONS</li>
                    <li>FEEDBACK</li></ul>
                    <p>Resize the browser window to see that this page is responsive by the way.</p>
                  </div>
                  <center>
                  <h2>Our Team.<br>Feel free to contact any of our member in Case of Assistance/Help.Simply click on the icon </h2>
                  <div class="row">
                    <div class="column">
                      <div class="card">
                        <img src="./img/20220211_162527.jpg" alt="DEEPAK" style="width :150px">
                        <div class="container">
                          <h2>DEEPAK NAIR</h2>
                          <p class="title">FRONT END DEV.</p>
                          <p>B.TECH in COMP ENGG</p>
                          <p></p>
                          <div class="contact">
                          <img src="./img/icons8-twitter.gif"><br>
                          <img src="./img/icons8-instagram.gif"><br>
                          <img src="./img/icons8-telegram.gif"><br>
                          <a href="https://wa.me/918180022147/?text=Need%20your%20Help" target="_blank"><img src="./img/icons8-whatsapp.gif"></a><br>
                          <img src="./img/linkedin.png" style="width:33px">
                        </div>
                         
                
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="column">
                          <div class="card">
                            <img src="./img/20220211_162527.jpg" alt="Jane" style="width:150px">
                            <div class="container">
                              <h2>SOHAM MHATRE</h2>
                              <p class="title">BACK END DEV.</p>
                              <p>B.TECH in COMP ENGG</p>
                              <div class="contact">
                                <img src="./img/icons8-twitter.gif"><br>
                                <img src="./img/icons8-instagram.gif"><br>
                                <img src="./img/icons8-telegram.gif"><br>
                                <a href="https://wa.me/918180022147/?text=Need%20your%20Help" target="_blank"><img src="./img/icons8-whatsapp.gif"></a><br>
                                <img src="./img/linkedin.png" style="width:33px">
                              </div>
                            </div>
                          </div>
                        </div>
                    <div class="column">
                      <div class="card">
                        <img src="./img/20220211_162527.jpg" alt="Mike" style="width:150px">
                        <div class="container">
                          <h2>ASHWIN NAIR</h2>
                          <p class="title">FULL
                            STACK DEV.</p><br>
                          <p>B.TECH in COMP ENGG</p>
                          
                          <div class="contact">
                            <img src="./img/icons8-twitter.gif"><br>
                            <img src="./img/icons8-instagram.gif"><br>
                            <img src="./img/icons8-telegram.gif"><br>
                            <a href="https://wa.me/918180022147/?text=Need%20your%20Help" target="_blank"><img src="./img/icons8-whatsapp.gif"></a><br>
                            <img src="./img/linkedin.png" style="width:33px">
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="column">
                      <div class="card">
                        <img src="./img/20220211_162527.jpg" alt="John" style="width:150px">
                        <div class="container">
                          <h2>DHANISH NAIR</h2>
                          <p class="title">CONTENT CREATER</p>
                          <p>B.TECH in COMP ENGG</p>
                          <div class="contact">
                            <img src="./img/icons8-twitter.gif"><br>
                            <img src="./img/icons8-instagram.gif"><br>
                            <img src="./img/icons8-telegram.gif"><br>
                            <a href="https://wa.me/918180022147/?text=Need%20your%20Help" target="_blank"><img src="./img/icons8-whatsapp.gif"></a><br>
                            <img src="./img/linkedin.png" style="width:33px">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div></center></footer>-->
                  <!--<div class="waveWrapper waveAnimation">
                    <div class="waveWrapperInner bgTop">
                        <div class="wave waveTop"
                            style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
                    </div>
                    <div class="waveWrapperInner bgMiddle">
                        <div class="wave waveMiddle"
                            style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
                    </div>
                    <div class="waveWrapperInner bgBottom">
                        <div class="wave waveBottom"
                            style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
                    </div>
                </div>
            <section class="main-container">
                    <h1>Our Team</h1>
                    <div class="sub-container">
                        <div class="box">
                            <div class="image">
                                <img src="half.jpg">
                            </div>
                            <div class="content">
                                <center>
                                    <h3>Deepak Nair </h3>
                                    <p>Frontend Developer<br>(Founder)</p>
                                    <ul>
                                        <li><ion-icon name="logo-facebook"></ion-icon>Facebook</li>
                                        <li><ion-icon name="logo-instagram"></ion-icon>Instagram</li>
                                        <li><ion-icon name="logo-twitter"></ion-icon>Twitter</li>
                                        <li><ion-icon name="logo-linkedin"></ion-icon>Linkedin</li>
                                    </ul>
                                </center>
                            </div>
                        </div>
                                  <div class="box">
                            <div class="image">
                                <img src="img10.jpg">
                            </div>
                            <div class="content">
                                <center>
                                    <h3>Soham Mhatre</h3>
                                    <p>Database Developer<br>(CEO)</p>
                                    <ul>
                                        <li><ion-icon name="logo-facebook"></ion-icon>Facebook</li>
                                        <li><ion-icon name="logo-instagram"></ion-icon>Instagram</li>
                                        <li><ion-icon name="logo-twitter"></ion-icon>Twitter</li>
                                        <li><ion-icon name="logo-linkedin"></ion-icon>Linkedin</li>
                                    </ul>
                                </center>
                            </div>
                        </div>
                        <div class="box">
                            <div class="image">
                                <img src="soldering-finished.jpg.webp">
                            </div>
                            <div class="content">
                                <center>
                                    <h3>Ashwin Nair</h3>
                                    <p>Backend Developer<br>(President)</p>
                                    <ul>
                                        <li><ion-icon name="logo-facebook"></ion-icon>Facebook</li>
                                        <li><ion-icon name="logo-instagram"></ion-icon>Instagram</li>
                                        <li><ion-icon name="logo-twitter"></ion-icon>Twitter</li>
                                        <li><ion-icon name="logo-linkedin"></ion-icon>Linkedin</li>
                                    </ul>
                                </center>
                            </div>
                        </div>
                        <div class="box">
                            <div class="image">
                                <img src="a6ff5242b8bf9.jpg">
                            </div>
                            <div class="content">
                                <center>
                                    <h3>Dhanish Nair</h3>
                                    <p>Content Creator<br>
                                    (CFO)</p>
                                    <ul>
                                        <li><ion-icon name="logo-facebook"></ion-icon>Facebook</li>
                                        <li><ion-icon name="logo-instagram"></ion-icon>Instagram</li>
                                        <li><ion-icon name="logo-twitter"></ion-icon>Twitter</li>
                                        <li><ion-icon name="logo-linkedin"></ion-icon>Linkedin</li>
                                    </ul>
                                </center>
                            </div>
                        </div>
                    </div>
                </section>-->
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="team-box team-box1">
                        <div class="team-name">
                          <center>
                            <div class="team-content">
                              <h2>DEEPAK NAIR</h2>
                              <p>Web Developer</p>
                              <ion-icon name="logo-facebook" class="logo-facebook"></ion-icon>
                              <ion-icon name="logo-instagram" class="logo-instagram"></ion-icon>
                              <ion-icon name="logo-twitter" class="logo-twitter"></ion-icon>
                              <ion-icon name="logo-linkedin" class="logo-linkedin"></ion-icon>
                              <ion-icon name="logo-github" class="logo-github"></ion-icon>
                            </div>
                          </center>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="team-box team-box2">
                        <div class="team-name">
                          <center>
                            <div class="team-content">
                              <h2>ASHWIN PILLAI</h2>
                              <p>Web Designer</p>
                              <ion-icon name="logo-facebook" class="logo-facebook"></ion-icon>
                              <ion-icon name="logo-instagram" class="logo-instagram"></ion-icon>
                              <ion-icon name="logo-twitter" class="logo-twitter"></ion-icon>
                              <ion-icon name="logo-linkedin" class="logo-linkedin"></ion-icon>
                              <ion-icon name="logo-github" class="logo-github"></ion-icon>
                              
                            </div>
                          </center>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="team-box team-box3">
                        <div class="team-name">
                          <center>
                            <div class="team-content">
                              <h2>SOHAM MAHTRE</h2>
                              <p>Content Writer</p>
                              <ion-icon name="logo-facebook" class="logo-facebook"></ion-icon>
                              <ion-icon name="logo-instagram" class="logo-instagram"></ion-icon>
                              <ion-icon name="logo-twitter" class="logo-twitter"></ion-icon>
                              <ion-icon name="logo-linkedin" class="logo-linkedin"></ion-icon>
                              <ion-icon name="logo-github" class="logo-github"></ion-icon>
                              
                            </div>
                          </center>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="team-box team-box4">
                        <div class="team-name">
                          <center>
                            <div class="team-content">
                              <h2>DHANISH NAIR</h2>
                              <p>Social Media Manager</p>
                              <ion-icon name="logo-facebook" class="logo-facebook"></ion-icon>
                              <ion-icon name="logo-instagram" class="logo-instagram"></ion-icon>
                              <ion-icon name="logo-twitter" class="logo-twitter"></ion-icon>
                              <ion-icon name="logo-linkedin" class="logo-linkedin"></ion-icon>
                              <ion-icon name="logo-github" class="logo-github"></ion-icon>
                              
                            </div>
                          </center>
                        </div>
                      </div>
                    </div>
                      </div>
                    </div>
                  <div class="swiper-pagination"></div>
                </div>
            
        
    </div>
    <button onclick="topFunction()" id="mybtn" >top</button>
    <script> let mybutton = document.getElementById("mybtn");
      window.onscroll= function(){scrollFunction()};
      function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }</script>

    <script type="text/javascript">
      function search() {
      let filter = document.getElementById('find').value.toUpperCase();
      let item = document.querySelectorAll('.down');
      let l = document.getElementsByTagName('h1');
      for(var i = 0;i<=l.length;i++){
      let a=item[i].getElementsByTagName('h1')[0];
      let value=a.innerHTML || a.innerText || a.textContent;
      if(value.toUpperCase().indexOf(filter) > -1) {
      item[i].style.display="";
      }
      else
      	item[i].style.display="none";
      }
      };
      </script>
      <script src="slider.js"></script>

      <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: -100,
        depth: 500,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>

