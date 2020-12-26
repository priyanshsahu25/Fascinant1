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
      <li class="nav-item home" style="border-bottom: 2px solid white; "><a href="C:\Users\Asus\Desktop\priyansh css\mini\standard.html" class="nav-link active">HOME</a></li>
      <li class="nav-item navother" ><a style="" href="#" class="nav-link navstyle">ROOMS</a> </li>
      <li class="nav-item navother" ><a href="#" class="nav-link navstyle">CAR RENTAL</a> </li>
      <li class="nav-item navother" ><a href="#" class="nav-link navstyle">ABOUT US</a> </li>
      <li class="nav-item navother" ><a href="#" class="nav-link navstyle">CONTACT</a> </li>
      <li class="nav-item navother" ><a href="logout.php" class="nav-link navstyle">Logout</a> </li>
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
    <?php
      $query="select * from hotel3 where email='$email'";
      $result=mysqli_query($con,$query);
      $row=mysqli_fetch_array($result);
      $email=$row['email'];
      $address=$row['address'];
      $tripstart=$row['trip_start'];
      $tripend=$row['trip_end'];
      $mobile=$row['mobile'];
      $guests=$row['guests'];
      $name=$row['name'];
      $price=$row['price'];
      
      ?>
       
    <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
           <center><tr>
        <td><h1>Booking Detail </h1></td>
     </tr><center>
    
     <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
     <form action="" method="post">
     <tr>
         <td align='center'>Name:</td>
         <td><input type='text' name='name' value="<?php echo "$name";?>"></td>
     </tr>
     <tr> <td>&nbsp;</td> </tr>
   
     <tr>
         <td align='center'>Address:</td>
         <td><input type='text' name='address' value="<?php echo "$address";?>" ></td>
     </tr>
     <tr> <td>&nbsp;</td> </tr>
     <tr>
         <td align='center'>Phone:</td>
         <td><input type='text' name='mobile' value="<?php echo "$mobile";?>"></td>
     </tr>
     <tr> <td>&nbsp;</td> </tr>
     <tr>
         <td align='center'>Email:</td>
         <td><input type='text' name='email' value="<?php echo "$email";?>"></td>
     </tr>
     <tr> <td>&nbsp;</td> </tr>
     <tr>
         <td align='center'>Check in:</td>
         <td><input type='date'  name='trip_start' value="<?php echo "$tripstart"; ?> "></td>
     </tr>
     <tr> <td>&nbsp;</td> </tr>
     <tr>
         <td align='center'>Check out</td>
         <td><input type='date'  name='trip_end' value="<?php echo "$tripend"; ?>"></td>
     </tr>
     <tr> <td>&nbsp;</td> </tr>
     <tr>
         <td align='center'>Guests</td>
         <td><input type='text' disabled="disabled" name='guest' value="<?php echo "$guests"; ?>"></td>
     </tr>
     <tr> <td>&nbsp;</td> </tr>
     <tr>
         <td align='center'>Price</td>
         <td><input type='text' disabled="disabled" name='price' value="<?php echo "$price"; ?>"></td>
     </tr>
     <tr> <td>&nbsp;</td> </tr>
    
     
     </form>
     
     </table>
      
     </table>
       
    