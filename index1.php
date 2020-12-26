<?php 
session_start();
include('databaseconnection.php');
$id=$_SESSION['id'];

$email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
     <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>
      
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <link rel="stylesheet" type="text/css" href="Home.css">
    <link rel="stylesheet" href="Homejs.js">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/EasePack.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
  <!--Navbar-->
 
      <nav class="navbar navbar-expand-md navbar-dark" style="z-index: 99;">
    <a href="#" class="navbar-brand navstyle"style="font-size: 28px;color: black; "> 
       <h1 class="ml7">
  <span class="text-wrapper">
    <span class="letters" style=" font-weight:700;color: white;">FASCINANT</span>
     <script>
    gsap.from(".text-wrapper",{duration:0.4,opacity:0,delay:1,ease:"power1",x:"-100vw"})
  </script> 
  </span>
</h1>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<script >
  
</script>
    </a>
    <div class="ml-4">
    <button type="button" class="navbar-toggler" style="height:20px; " data-toggle="collapse" data-target="#mymenu">  
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ml-auto" id="mymenu">
        <ul class="navbar-nav  ">
      <li class="nav-item home" style="border-bottom: 2px solid white;font-weight: bold; "><a href="C:\Users\Asus\Desktop\priyansh css\mini\standard.html" class="nav-link active">HOME</a></li>
      <li class="nav-item navother" ><a style="font-weight: bold;color: white;" style="" href="Rooms.html" class="nav-link navstyle">ROOMS</a> </li>
      <li class="nav-item navother" ><a style="font-weight: bold;color: white;" href="car rental home.html" class="nav-link navstyle">CAR RENTAL</a> </li>
      <li class="nav-item navother" ><a style="font-weight: bold;color: white;" href="About us.html" class="nav-link navstyle">ABOUT US</a> </li>
      <li class="nav-item navother" ><a style="font-weight: bold;color: white;" href="Contact.html" class="nav-link navstyle">CONTACT</a> </li>
      <li class="nav-item navother" ><a style="font-weight: bold;color: white;" href="logout.php" class="nav-link navstyle">Logout</a> </li>

        <li class="nav-item navother" style=""><a href="#" class="nav-link navstyle">
        <i class="fab fa-facebook" style="font-size:25px;color:white;"></i>
        <i class="fab fa-instagram"style="font-size:25px;color:white;"></i>
        <i class="fab fa-snapchat"style="font-size:25px;color:white;"></i>
        <i class="fab fa-twitter"style="font-size:25px;color:white;"></i></a>
        </li>
    </ul>
    </div>
  </div>
  <script>
    gsap.from(".nav-item",{duration:1.5,opacity:0,delay:1,ease:"bounce",x:"-100vw"})
  </script>
  </nav>

    <div class="bg">
      <script src="jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /* jssor slider loading skin spin css */
        
    </style>
    <div style="margin-top: -7px;">
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:690px;overflow:hidden;visibility:hidden;">
       
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:690px;overflow:hidden;">
            <div style="background-color:#d3890e;">
                <img data-u="image" style="opacity:0.8;" data-src="https://k6u8v6y8.stackpathcdn.com/blog/wp-content/uploads/2014/05/Luxury-Hotels-in-India.jpg" />
                <div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:120px;width:800px;height:300px;position:absolute;">
                    <div data-to="50% 50%" data-t="0" style="left:50px;top:520px;width:400px;height:100px;position:absolute;color:#f1ac3e;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">FASCINANT</div>
                    <div data-to="50% 50%" data-t="1" style="left:50px;top:540px;width:400px;height:100px;position:absolute;opacity:0.5;color:#f1ac3e;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">FASCINANT</div>
                    <div data-to="50% 50%" data-t="2" style="left:50px;top:560px;width:400px;height:100px;position:absolute;opacity:0.25;color:#f1ac3e;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">FASCINANT</div>
                    <div data-to="50% 50%" data-t="3" style="left:50px;top:580px;width:400px;height:100px;position:absolute;opacity:0.125;color:#f1ac3e;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">FASCINANT</div>
                    <div data-to="50% 50%" data-t="4" style="left:50px;top:600px;width:400px;height:100px;position:absolute;opacity:0.06;color:#f1ac3e;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">FASCINANT</div>
                    <div data-to="50% 50%" data-t="5" style="left:50px;top:710px;width:700px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">HOTEL</div>
                </div>
            </div>
            <div>
                <img data-u="image" data-src="2.jpg" />
                <div data-ts="flat" data-p="540" data-po="40% 50%" style="left:0px;top:100px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:350px;top:360px;width:900px;height:500px;position:absolute;">
                        <svg viewbox="0 0 800 60" data-to="50% 50%" width="800" height="60" data-t="7" style="left:0px;top:-70px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:700;letter-spacing:0.05em;overflow:visible;">
                            <text fill="#454447" stroke="#ff9500" stroke-width="2" text-anchor="middle" x="400" y="60">LUXURIOUS ROOMS
                            </text>
                        </svg>
                        <div data-to="50% 50%" data-t="8" style="filter:url('#jssor_1_flt_1');left:200px;top:0px;width:600px;height:60px;position:absolute;opacity:0;color:#C49D8F;font-family:Roboto Condensed, sans-serif;font-size:48px;line-height:1.2;letter-spacing:0.1em;text-align:center;">FOR STYLISH LIFE</div>
                        <svg viewbox="0 0 800 100" width="800" height="100" data-t="9" style="left:40px;top:250px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:100px;font-weight:900;letter-spacing:0.5em;overflow:visible;">
                            <text fill="rgba(255,255,255,0.7)" stroke="#ff9500" text-anchor="middle" x="400" y="100">RELAX & ENJOY
                            </text>
                        </svg>
                    </div>
                </div>
            </div>
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.8;" data-src="https://www.thegwenchicago.com/wp-content/uploads/2017/07/homepage-header.jpg" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:100px;width:1600px;height:560px;position:absolute;">
                    <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3" style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                        <g mask="url(#jssor_1_msk_3)">
                            <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:absolute;overflow:visible;"></path>
                        </g>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11" style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">24/7 Front Desk
                        </text>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12" style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">FOR DREAM HOLIDAYS
                        </text>
                    </svg>
                </div>
            </div>
            <div>
                <img data-u="image" data-src="https://cache.marriott.com/marriottassets/marriott/GOIWH/goiwh-living-room-3530-hor-clsc.jpg?downsize=1440px:*" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:150px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-t="13" style="left:100px;top:-20px;width:800px;height:200px;position:absolute;opacity:0;">
                        <div style="left:94px;top:35px;width:480px;height:90px;position:absolute;color:#c44b14;font-family:'Roboto Condensed',sans-serif;font-size:72px;line-height:1.2;">EXPERIENCE</div>
                        <div style="left:307px;top:115px;width:400px;height:50px;position:absolute;color:#c44b14;font-family:'Roboto Condensed',sans-serif;font-size:42px;line-height:1.1;text-align:center;background-color:rgba(72,77,76,0.5);">EPIC BEAUTY</div>
                    </div>
                </div>
            </div>
            <div>
                <img data-u="image" data-src="https://www.ubackground.com/_ph/84/535299686.jpg" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">European Royal<br />Your Drive With Our Care</div>
                    <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0;max-width:344px;" data-src="wine-atlantic-ocean.png" />
                    <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="" />
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
    
        <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:12px;height:12px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
       
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    </div>
    <br><br><br>
    
   
    <!--CHeck in-->
    <div style="background-color: #f8f9fa;">
      <div class="container" style="background-color: #f8f9fa;">
      <form >
      <div class="row">
     
        <div class="col-md-3 ch">
          <div class="card border-0" style="background-color:; height: 100px">
         
            <div>
              <label for="start" style="color: #7b6233; font-size:20px; font-weight: 600; display: block;"><span style="display:block;text-align: center; ">CHECK-IN DATE</span></label>
              <input
                class="form-control border-0"
                type="date"
                id="start"
                name="trip_start"
                value="DD/MM/YYYY" required
              />
            </div>
          </div>
        </div>
        <div class="col-md-3 ch">
          <div class="card border-0" style="background-color:; height: 100px">
            <div>
              <label for="start" style="display:block;text-align: center;color: #7b6233; font-size:20px; font-weight: 600; ">CHECK-OUT DATE</label>
              <input
                class="form-control border-0"
                type="date"
                id="start"
                name="trip_end"
                value="DD/MM/YYYY" required
                
              />
            </div>
          </div>
        </div>
        <div class="col-md-2 ch">
          <div class="card border-0" style="background-color:; height: 100px">
            <div class="form-group border-0">
              <label for="inputState"style="display:block;text-align: center;color: #7b6233; font-size:20px; font-weight: 600; ">Room</label>
              <select id="inputState" class="form-control border-0" name="room" required>
                <option selected>Suite</option>
                <option value="Family Room">Family Room</option>
                <option value="Deluxe Room">Delux Room</option>
                <option value="Classic Room">Classic Room</option>
                <option value="Superior Room">Superior Room</option>
                <option value="Luxury Room">Luxury Room</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-2 ch">
          <div class="card border-0" style="background-color:; height: 100px">
            <div class="form-group border-0">
              <label for="inputState" style="display:block;text-align: center;color: #7b6233; font-size:20px; font-weight: 600; ">Guests</label>
              <select id="inputState" class="form-control border-0" name="guests">
                <option value="1 Adult" selected>1 Adult</option>
                <option value="2 Adult">2 Adult</option>
                <option value="3 Adult">3 Adult</option>
                <option value="4 Adult">4 Adult</option>
                <option value="5 Adult">5 Adult</option>
                <option value="6 Adult">6 Adult</option>
                <option value="7 Adult">7 Adult</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="card border-0">
            <button
             type="submit"
             value="search"
              class="btn ch1"
              style="background-color: #7b6233; height: 100px; color: white;"onclick="window.location.href='Rooms.html';">
              Check Availability
      </button>
          </div>
        </div>
         </form>
        </div>
      </div>
      

		  
    <script>
       gsap.from(".ch", {
  scrollTrigger:{
    trigger:".ch",
     start:"-100px center",
  },
  x:"-100vw",
   opacity:0,
   duration:0.5,
   stagger:0.2,
   ease: "power3.out"
});
       gsap.from(".ch1", {
  scrollTrigger:{
    trigger:".ch1",
     start:"-100px center", 
  },
  x:"100vw",
   opacity:0,
   delay:0.8,
   duration:0.5,
   
   ease: "power3.out"
});

    </script>
    <!-- Check in end-->
    <br><br><br>

    <!-- 24/7 -->
 <div class="middle container-fluid " id="#div2" class="div1">
    <div class="div1 ">
      <div class="inner-width div1">
        <div class="col div1 fro">
          <i class="fas fa-concierge-bell div1" style="border-radius: 50%;padding: 10px; font-size: 80px; background-color: #f6f2ea;color: #a1895d"></i>
          
          <div style="font-size:25px;margin: 20px 0;color: black;"  class="div1">25/7 Front Desk</div>
          <span style="color: black;" class="div1">A small river named Duden flows by their place and supplies.</span>
        </div>

        <div class="col div1 fro">
          <i class="fas fa-utensils div1" style="border-radius: 70%;padding: 10px; font-size: 80px; background-color: #f6f2ea;color: #a1895d"></i>
          <div class="div1"style="font-size:25px;margin: 20px 0;color: black;" >Restaurant Bar</div>
          <span class="div1" style="color: black;">A small river named Duden flows by their place and supplies.</span>
        </div>

        <div class="col div1 fro">
          <i class="fas fa-car div1" style="border-radius: 50%;padding: 10px; font-size: 80px; background-color: #f6f2ea;color: #a1895d"></i>
          <div class="div1"style="font-size:25px;margin: 20px 0;color: black;" >Transfer Services</div>
          <span class="div1"style="color: black;">A small river named Duden flows by their place and supplies.</span>
        </div>
        <div class="col div1 fro">
          <i class="fas fa-spa div1" style="border-radius: 50%;padding: 10px; font-size: 80px; background-color: #f6f2ea;color: #a1895d"></i>
          <div class="div1" style="font-size:25px;margin: 20px 0;color: black;">Spa Suites</div>
          <span class="div1" style="color: black;">A small river named Duden flows by their place and supplies.</span>
        </div>
      </div>
    </div>
</div>
<div>
  <script>
       gsap.from(".fro", {
  scrollTrigger:{
    trigger:".fro",
     start:"80px center",
  
  },
  y:"-100px",
   opacity:0,
   rotate:360,
   duration:1,
   stagger:0.2,
   ease: "power3.out"

});

    </script>
</div>
<!-- 24/7  End-->
<br><br><br><br>

<!-- Rooms Card-->
<div class="container">
  <h1 style="text-align:center;" class="ou">Our Rooms</h1>
<script>
      gsap.from(".ou", {
  scrollTrigger:{
    trigger:".ou",
     start:"top center",
     
    
     
  },
  y:"-100px",
   opacity:0,
   duration:1.5,
   ease: "power3.out"

});
        
</script>
      <div class="row">
        
        <br><br>
        <div class="row">
          <div class="col-md-4 r1">
          <div class="card" >
              <img  class="card-img-top" src="https://www.gannett-cdn.com/presto/2020/05/18/USAT/9ae54ef7-217d-4877-a614-4760325f9a9b-Park-Hyatt-New-York-Manhattan-Sky-Suite-Master-Bedroom.jpg?width=2560" alt="Card image cap"style="height: 250px;">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Suite Room</h5>
                <p class="card-text"style="text-align: center;" >From ₹3500 <spna style="border-bottom: none; color:#b8b8b8; font-size: 12px;">per night</spna></p>
                <div style="text-align: center;"><i style="color:#8d703b;" class="fa fa-bath" aria-hidden="true"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-phone" style=></i></div>
                <button class="button vrbtn btn btn-block"style="background-color:#8d703b; color: white;"onclick="window.location.href='Rooms.html';"><span>View Room Details</span></button>
              </div>
          </div>
        </div>
        <div class="col-md-4 r2">
          <div class="card" >
              <img  class="card-img-top" src="https://a36c2e13a78ae1256a2f-1dc878dead8ec78a84e429cdf4c9df00.ssl.cf1.rackcdn.com/responsive/980/a36c2e13a78ae1256a2f-1dc878dead8ec78a84e429cdf4c9df00.ssl.cf1.rackcdn.com/u/park-hotel-hong-kong/room/Deluxe-Plus-Family-Room.jpg" style="height: 250px;">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Family Room</h5>
                <p class="card-text"style="text-align: center;" >From ₹4000 <spna style="border-bottom: none; color:#b8b8b8; font-size: 12px;">per night</spna></p>
                <div style="text-align: center;">
                  <i  style="color:#8d703b;" class="fa fa-bath" aria-hidden="true"></i>&nbsp;<i style="color:#8d703b;"class="fa fa-phone"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-wifi"></i>
                </div>
                <button class="button vrbtn btn btn-block"style="background-color:#8d703b; color: white;"onclick="window.location.href='Rooms.html';"><span>View Room Details</span></button>
              </div>
          </div>
        </div>
        <div class="col-md-4 r3">
          <div class="card" >
              <img class="card-img-top" src="https://cloudstorage.mosaic-collection.com/loeipalace/hotel-photos/deluxe-king-2.jpg" alt="Card image cap"style="height: 250px;">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Delux Room</h5>
                <p class="card-text"style="text-align: center;" >From ₹5000  <spna style="border-bottom: none; color:#b8b8b8; font-size: 12px;">per night</spna></p>
                <div style="text-align: center;"><i style="color:#8d703b;" class="fa fa-bath" aria-hidden="true"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-phone"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-wifi"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-tv"></i></div>
                <button class="button vrbtn btn btn-block"style="background-color:#8d703b; color: white;"onclick="window.location.href='Rooms.html';"><span>View Room Details</span></button>
              </div>
          </div>
        </div>
        </div>
        <script>
      gsap.from(".r1", {
  scrollTrigger:{
    trigger:".r1",
     start:"top center",
     
    
     
  },
  x:"-100vw",
   opacity:0,
   duration:0.5,
   ease: "power3.out"

});
      gsap.from(".r2", {
  scrollTrigger:{
    trigger:".r2",
     start:"top center",
     
    
     
  },
  y:"-100px",
   opacity:0,
   delay:0.5,
   duration:0.5,
   ease: "power3.out"
});
       gsap.from(".r3", {
  scrollTrigger:{
    trigger:".r3",
     start:"top center",
     
    
     
  },
  x:"100vw",
   opacity:0,
   delay:0.3,
   duration:0.4,
   ease: "power3.out"

});
       
      
</script>
        </script>
        <br><br>
        <div class="row">
          <div class="col-md-4 r4">
          <div class="card" >
              <img  style="height: 250px;" class="card-img-top" src="bj.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Classic Room</h5>
                <p class="card-text"style="text-align: center;" >From ₹5500  <spna style="border-bottom: none; color:#b8b8b8; font-size: 12px;">per night</spna></p>
                <div style="text-align: center;"><i style="color:#8d703b;" class="fa fa-bath" aria-hidden="true"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-phone"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-wifi"></i></div>
                <button class="button vrbtn btn btn-block"style="background-color:#8d703b; color: white;"onclick="window.location.href='Rooms.html';"><span>View Room Details</span></button>
              </div>
          </div>
        </div>
        <div class="col-md-4 r5">
          <div class="card" >
              <img  style="height: 250px;" class="card-img-top" src="https://1.bp.blogspot.com/-HjDx5aa0ksQ/UWbrbjEWBUI/AAAAAAAAOOE/4SPqEVJMkEk/s1600/fantastic+hotel+room.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Superior Room</h5>
                <p class="card-text"style="text-align: center;" >From ₹6500  <spna style="border-bottom: none; color:#b8b8b8; font-size: 12px;">per night</spna></p>
                <div style="text-align: center;"><i style="color:#8d703b;" class="fa fa-bath" aria-hidden="true"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-phone"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-wifi"></i>&nbsp;<i style="color:#8d703b;"class="fa fa-tv"></i>&nbsp;<i style="color:#8d703b;" class="fas fa-user"></i></div>
                <button class="button vrbtn btn btn-block"style="background-color:#8d703b; color: white;"onclick="window.location.href='Rooms.html';"><span>View Room Details</span></button>
              </div>
          </div>
        </div>
        <div class="col-md-4 r6">
          <div class="card" >
              <img  style="height: 250px;" class="card-img-top" src="https://cdn.cnn.com/cnnnext/dam/assets/140127103345-peninsula-shanghai-deluxe-mock-up.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">Luxury Room</h5>
                <p class="card-text"style="text-align: center;" >From ₹8000    <spna style="border-bottom: none; color:#b8b8b8; font-size: 12px;">per night</spna></p>
                <div style="text-align: center;"><i style="color:#8d703b;" class="fa fa-bath" aria-hidden="true"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-phone"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-wifi"></i>&nbsp;<i style="color:#8d703b;" class="fa fa-tv"></i>&nbsp;<i style="color:#8d703b;" class="fas fa-utensils"></i>&nbsp;<i style="color:#8d703b;" class="fas fa-user"></i></div>
                <button class="button vrbtn btn btn-block"style="background-color:#8d703b; color: white;"onclick="window.location.href='Rooms.html';"><span>View Room Details</span></button>
              </div>
          </div>
        </div>
        </div>
      </div>
    </div> 
    <script>
      gsap.from(".r4", {
  scrollTrigger:{
    trigger:".r1",
     start:"450px center",
     
    
     
  },
  x:"-100vw",
   opacity:0,
   duration:0.5,
   ease: "power3.out"

});
      gsap.from(".r5", {
  scrollTrigger:{
    trigger:".r2",
     start:"450px center",
     
    
     
  },
  y:"-100px",
   opacity:0,
   delay:0.3,
   duration:0.5,
   ease: "power3.out"
});
       gsap.from(".r6", {
  scrollTrigger:{
    trigger:".r3",
     start:"450px center",
     
    
     
  },
  x:"100vw",
   opacity:0,
   delay:0.3,
   duration:0.4,
   ease: "power3.out"

});
       
      
</script>
    <!--Room card End-->
<br><<br>
    <!-- number increasing-->
     <div class="middle">
    <div class="counting-sec">
      <div class="inner-width">
        <div class="col ico">
          <i class="far fa-smile-wink ico " style="color: white;"></i>
          <div class="num">50,000</div>
          Happy Guests
        </div>

        <div class="col ico">
          <i class="fas fa-bed ico" style="color: white;"></i>
          <div class="num">3,000</div>
          Rooms
        </div>

        <div class="col ico">
          <i class="fas fa-users ico" style="color: white;"></i>
          <div class="num">1,000</div>
          Staffs
        </div>
        <div class="col ico">
          <i class="fas fa-map-marked-alt ico" style="color: white;"></i>
          <div class="num">100</div>
          Destination
        </div>
      </div>
    </div>
  </div>
  <script>
    gsap.from(".ico", {
  scrollTrigger:{
    trigger:".r3",
     start:"100px center",
     
    
     
  },
  y:"-200px",
   opacity:0,
   duration:0.5,
   stagger:0.2,
   ease: "power3.out"

});
  </script>
  <!-- number increasing End -->
  
<br><br>
<!-- Reviews-->
    <div class="container-fluid" id="pool">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-4 re" style="margin-top: 40px;">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title"><img src="b.png" alt="" style="width: 160px;text-align: center; display: block;margin-left: auto;margin-right: auto;"></h5>
              <span class="card-text">
                <h3 style="text-align: center;">Perfect Stay</h3>
                <h5>Almost everything! The place looks very classic and the interiors are done creativity. We stayed in a female dorm which had a soft and cozy bed.I can say that this was one of our best backpacking room experience.
                  </h5>
              </span>
              <br>
              <img src="user_1.jpg" alt="" style="border-radius: 50%; text-align: center; display: block;margin-left: auto;margin-right: auto;">
              <h4 style="text-align: center;">Smartha Smith, Greece</h4>
            </div>
          </div>
        </div>

         <div class="col-md-4 re" style="margin-top: 40px;">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title"><img src="b.png" alt="" style="width: 160px;text-align: center; display: block;margin-left: auto;margin-right: auto;"></h5>
              <span class="card-text">
                <h3 style="text-align: center;">We loved it</h3>
                <h5>This small hotel is a really lovely place. It has a nice courtyard for some relaxation and the restaurant serves good food. Staff is very attentive and professional. Rooms are nicely maintained and clean. Internet is fast. </h5>
              </span>
              <br>
              <img src="user_2.jpg" alt="" style="border-radius: 50%; text-align: center; display: block;margin-left: auto;margin-right: auto;">
              <h4 style="text-align: center;">Michael Doe, Italy</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 re"style="margin-top: 40px;">
          <div class="card border-0">
            <div class="card-body">
              <h5 class="card-title"><img src="b.png" alt="" style="width: 160px;text-align: center; display: block;margin-left: auto;margin-right: auto;"></h5>
              <span class="card-text">
                <h3 style="text-align: center;">Wonderful experience</h3>
                <h5>Staff very friendly and helpful. Hotel' s location in a quiet neighborhood of the noisy city. Nice decoration and beautiful place. Nice breakfast and tasty food in the restaurant. Quite Clean. Comfortable bed.</h5>
                <br>
              <img src="user_3.jpg" alt="" style="border-radius: 50%; text-align: center; display: block;margin-left: auto;margin-right: auto;">
              <h4 style="text-align: center;">Louis Gracia, Spain</h4>
              </span>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      gsap.from("#pool", {
  scrollTrigger:{
    trigger:"#pool",
     start:"top center",
     
    
     
  },
  x:"-100vw",
  
   opacity:0,
   duration:0.5,
   
   ease: "power2.out"

});
       gsap.from(".re", {
  scrollTrigger:{
    trigger:".re",
     start:"-200px center",
     
    
     
  },
  y:"200px",
  
   opacity:0,
   duration:0.5,
   stagger:0.3,
   
   ease: "power2.out"

});
    </script>
    <br><br>
    <!-- Reviews End-->
<!--Instagram-->
    <h1 class="ml9 ig" style="text-align: center;">
  <span class="text-wrapper">
    <span class="letters" >INSTAGRAM</span>
  </span>
</h1>
    <script>
      var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml9 .letter',
    scale: [0, 1],
    duration: 1500,
    elasticity: 600,
    delay: (el, i) => 45 * (i+1)
  }).add({
    targets: '.ml9',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 2500
  });

    </script>
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(https://colorlib.com/preview/theme/harborlights/images/insta-3.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://colorlib.com/preview/theme/harborlights/images/insta-4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://colorlib.com/preview/theme/harborlights/images/insta-5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://colorlib.com/preview/theme/harborlights/images/insta-1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://colorlib.com/preview/theme/samira/images/gallery_5.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://colorlib.com/preview/theme/theriver/images/gallery_4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://colorlib.com/preview/theme/deluxe/images/insta-1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://colorlib.com/preview/theme/deluxe/images/insta-4.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://colorlib.com/preview/theme/samira/images/gallery_1.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(https://colorlib.com/preview/theme/theriver/images/gallery_3.jpg)"></div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <!--Instagram-->
  <!--Instagram script-->
  <script type="text/javascript">
    $(".num").counterUp({delay:10,time:11000});
  </script>
    <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
      gsap.from(".ig", {
  scrollTrigger:{
    trigger:".ig",
     start:"top center",
   
     
  },
  x:"-100vw",
   opacity:0,
   duration:1.5,
   ease: "circ.out"
});
  </script>
  <!--Instagram script End-->
  <br>
<!--Footer-->
<footer
      class="page-footer font-small unique-color-dark brown1"
      style="background-color: black"
    >
      <div style="background-color: #8d703b" class="brown">
        <div class="container">
          <!-- Grid row-->
          <div class="row py-4 d-flex align-items-center">
            <!-- Grid column -->
            <div
              class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 get"
            >
              <h6 class="mb-0">Get connected with us on social networks!</h6>
            
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 col-lg-7 text-center text-md-right">
              <!-- Facebook -->
              <a class="fb-ic">
                <i class="fab fa-facebook-f white-text mr-4 icon"> </i>
                
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter white-text mr-4 icon"> </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">
                <i class="fab fa-google-plus-g white-text mr-4 icon"> </i>
              </a>
              <!--Linkedin -->
              <a class="li-ic">
                <i class="fab fa-linkedin-in white-text mr-4 icon"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fab fa-instagram white-text icon"> </i>
              </a>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row-->
        </div>
           <script>
        gsap.from(".brown", {
  scrollTrigger:{
    trigger:".brown",
     start:"-35px center",
     end:"+=150",
     
     

    

     // start the animation when ".box" enters the viewport (once)
  },
  x:"-100vw",
   opacity:0,
   duration:1.3,
   ease:"cric.out"
});
         gsap.from(".get", {
  scrollTrigger:{
    trigger:".get",
     start:"-25px center",
     end:"+=150",
     

    

     // start the animation when ".box" enters the viewport (once)
  },
  x:"-100vw",
   opacity:0,
   dealay:1.3,
   duration:1.5,
   ease:"bounce.out"
});

gsap.from(".icon", {
  scrollTrigger:{
    trigger:".icon",
     start:"-100px center",
     end:"+=150",
     

    

     // start the animation when ".box" enters the viewport (once)
  },
  x:"100vw",
   opacity:0,
   rotate:360,
   stagger:0.3,
   duration:1.8
   
});
</script>
      </div>
      <br><br>

      <!-- Footer Links -->
      <div class="container-fluid ">
        <div
          class="container text-center text-md-left mt-5"
          style="color: white"
        >
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase font-weight-bold ft">FASCINANT HOTEL</h6>
              <hr
                class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto ft"
                style="width: 60px"
              />
              <p class="ft">
                fascinant's hotel search allows users to compare hotel prices in
                just a few clicks from more than 400 booking sites for 1.8
                million+ hotels in over 190 countries. With 1.4 billion visits
                annually to our site, travellers regularly use the hotel
                comparison to compare deals in the same city. Get information
                for weekend trips to cities like Mumbai or Bengaluru and you can
                find the right hotel on trivago quickly and easily. numerous
                hotels available..
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold ft">Products</h6>
              <hr
                class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px"
              />
              <p class="ft">
                <a href="Index.html">Hotels</a>
              </p>
              <p class="ft">
                <a href="Car rental.html">Car Rental</a>
              </p>
              <p class="ft">
                <a href="Rooms.html">Rooms</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold ft">Useful links</h6>
              <hr
                class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px"
              />
              <p class="ft">
                <a href="#!">Your Account</a>
              </p>
              <p class="ft">
                <a href="#!">Become an Affiliate</a>
              </p>
              <p class="ft">
                <a href="#!">Shipping Rates</a>
              </p>
              <p class="ft">
                <a href="About us.html">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold ft">Contact</h6>
              <hr
                class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px"
              />
              <p class="ft">
                <i class="fas fa-home mr-3"></i
                ><span style="font-family: 'Marcellus SC', serif"
                  >Noida Sec62,India</span
                >
              </p>
              <p class="ft">
                <i class="fas fa-envelope mr-3"></i
                ><span style="font-family: 'Marcellus SC', serif"
                  >Email: mail@mail.com</span
                >
              </p>
              <p class="ft">
                <i class="fas fa-phone mr-3"></i
                ><span style="font-family: 'Marcellus SC', serif"
                  >Phone: 9675303719</span
                >
              </p >
              <p class="ft">
                <i class="fas fa-print mr-3"></i>
                <span style="font-family: 'Marcellus SC', serif"
                  >+ 01 234 567 89</span
                >
              </p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <script>
        gsap.from(".brown1", {
  scrollTrigger:{
    trigger:".brown1",
     start:"top center",
     end:"+=150",
     
     
     // start the animation when ".box" enters the viewport (once)
  },
  x:"-100vw",
   opacity:0,
   dealay:0.5,
   duration:1.3,
   ease:"expo.out"
});

 gsap.from(".ft", {
  scrollTrigger:{
    trigger:".ft",
     start:"-190px center",
     end:"+=150",
     
     

    

     // start the animation when ".box" enters the viewport (once)
  },
  y:"100px",
   opacity:0,
   duration:1.5,
   stagger:0.2
   
});

      </script>
      <div
        class="footer-copyright text-center py-3 ft1"
        style="background-color: ; color: white"
      >
        Copyright © 2020 FASCINANT HOTEL Inc. All rights reserved.
      </div>
      <script>
        gsap.from(".ft1", {
  scrollTrigger:{
    trigger:".ft1",
     start:"-400px center",
     end:"+=150",
     
     

    

     // start the animation when ".box" enters the viewport (once)
  },
  x:"-100vw",
   opacity:0,
   delay:4,
   ease:"expo.out",
   duration:1.5
   
   
});
      </script>
      <!-- Copyright -->
    </footer>
    <!--footer End-->
</body>
</html>
