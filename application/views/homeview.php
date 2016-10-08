<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<title>.::Official Website IBGF</title>
	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

	<!-- font awesome -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" />
  <script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>

	<!-- animate.css -->
	<link rel="stylesheet" href="<?= base_url('assets/animate/animate.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('assets/animate/set.css') ?>" />

  <!--galery-->
  <link rel="stylesheet" type='text/css' href="<?= base_url('assets/gallery/blueimp-gallery.min.css') ?>" />

    <!-- favicon -->
	

    <!--pure css-->
	<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">

  <!--jquery-->
  <script src="<?= ('assets/galery2/jquery-1.11.3.min.js') ?>" type="text/javascript"></script>
  <script src="<?= ('assets/galery2/jssor.slider-21.1.6.mini.js') ?>" type="text/javascript"></script>
      <script type="text/javascript">
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
              {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Rows: 2,
                $Cols: 6,
                $SpacingX: 14,
                $SpacingY: 12,
                $Orientation: 2,
                $Align: 156
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 960);
                    refSize = Math.max(refSize, 300);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
        
    </script>
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('assets/images/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        
        /* jssor slider thumbnail navigator skin 01 css */
        /*
        .jssort01-99-66 .p            (normal)
        .jssort01-99-66 .p:hover      (normal mouseover)
        .jssort01-99-66 .p.pav        (active)
        .jssort01-99-66 .p.pdn        (mousedown)
        */
        .jssort01-99-66 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 99px;
            height: 66px;
        }
        
        .jssort01-99-66 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .jssort01-99-66 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        
        .jssort01-99-66 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 95px;
            height: 62px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url('assets/images/t01.png') -800px -800px no-repeat;
            _background: none;
        }
        
        .jssort01-99-66 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 95px;
            height: 62px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }
        
        .jssort01-99-66 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 97px;
            height: 64px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }
        
        .jssort01-99-66 .p.pdn .c {
            background-position: 50% 50%;
            width: 95px;
            height: 62px;
            border: #000 2px solid;
        }
        
        * html .jssort01-99-66 .c, * html .jssort01-99-66 .pdn .c, * html .jssort01-99-66 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 99px;
            height /**/: 66px;
        }
        
    </style>
	
</head>
<body>
<div id="preloader">
            <div class="loder-box">
              <div class="battery"></div>
            </div>
    </div>
	<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="assets/images/s.png" alt="logo" width="250" height="60"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">Home</a></li>
                 <li ><a href="#about">About</a></li>
                 <li ><a href="#bg">Bujang & Gadis</a></li>
                 <li ><a href="#works">Galery</a></li>
                 <li ><a href="#partners">Partners</a></li>
                 <li ><a href="#contact">Contact</a></li>
                 <li ><a href="#login" class="fa glyphicon glyphicon-log-in">Login</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->


<p>
<center>
<section id="home">
<!-- Slider Starts -->
<script type="text/javascript">
        jQuery(document).ready(function ($) {
            
            var jssor_2_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];
            
            var jssor_2_SlideoTransitions = [
              [{b:0,d:1160,x:783,y:3}],
              [{b:260,d:780,x:-869,y:18}],
              [{b:1160,d:840,x:667,y:2}],
              [{b:2020,d:760,x:-11,y:-315}],
              [{b:2780,d:520,x:-272,y:-6}],
              [{b:3300,d:640,x:-3,y:-145}],
              [{b:0,d:700,x:307,y:-1,i:2}],
              [{b:0,d:700,x:-851,y:-5,i:1}],
              [{b:700,d:800,x:-827,y:-11}],
              [{b:1500,d:500,x:-10,y:-114}],
              [{b:2000,d:500,x:-9,y:141}],
              [{b:2000,d:420,x:14,y:-158}],
              [{b:2500,d:1100,x:-281}],
              [{b:0,d:800,x:-870,y:3}],
              [{b:800,d:500,x:7,y:112}],
              [{b:800,d:500,x:103,y:-202}],
              [{b:1300,d:900,x:12,y:-264}],
              [{b:2200,d:1000,x:-450,y:5}]
            ];
            
            var jssor_2_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_2_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_2_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_2_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 870);
                    jssor_2_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
        
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('assets/images/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
        
        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('assets/images/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>
    <div id="jssor_2" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1000px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('assets/images/curved.png') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1000px; height: 500px; overflow: hidden;">
            <div data-p="141.75" style="display: none;">
                <img data-u="image" src="assets/images/slider/1.jpg" />
            </div>
            <div data-p="141.75" style="display: none;">
                <img data-u="image" src="assets/images/slider/2.jpg" />
            </div>
            <div data-p="141.75" style="display: none;">
                <img data-u="image" src="assets/images/slider/3.jpg" />
            </div>
            <div data-p="141.75" style="display: none;">
                <img data-u="image" src="assets/images/slider/4.jpg" />
            </div>
            <div data-p="141.75" style="display: none;">
                <img data-u="image" src="assets/images/slider/5.JPEG" />
            </div>
            <div data-p="141.75" style="display: none;">
                <img data-u="image" src="assets/images/slider/6.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
<!-- #Slider Ends -->
</section></center>

<!-- Cirlce Starts -->
<div id="about"  class="container spacer about">
<h2 class="text-center wowload fadeInUp">Ikatan Bujang Gadis Fasilkom Unsri</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa glyphicon glyphicon-road"></i> Sejarah </h4>
    <p>Berawal ditahun 2014 secara langsung BEM KM Fasilkom Universitas Srwijaya menyuarakan agar adanya perhatian dan bimbingan secara khusus, untuk masyarakat difakultas agar dapat lebih giat dalam meningkatkan wawasan,berkepribadian dan ilmu pengetahuan bagi setiap individu guna mempersiapkan diri dalam persaingan di era modern seperti sekarang, yang nantinya diharapkan dapat berperan aktif dalam lingkungan, sosial budaya, teknologi dan masyarakat. untuk itulah ajang "Pemilihan Bujang dan Gadis Fakultas Ilmu Komputer" diadakan. diharapkan nantinya acara tahunan ini dapat menjadikan seluruh mahasiswa fasilkom agar lebih giat dalam memumupuk diri sedini mungkin agar nantinya dapat berguna bagi bangsa dan negara.</p>
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="fa glyphicon glyphicon-flag"></i>Visi & Misi</h4>
  <p><strong>Visi:</strong> Menjadi duta Fakultas ilmu Komputer Universitas Sriwijaya yang selalu mengebangkan dan mengimplementasikan pendidikan, teknologi dan budaya.</p>
  <p>
  <strong>Misi:</strong>
  <br>
  <strong>1</strong>.Memasyaratkan arti penting teknologi pendidikan dan budaya dalam kehidupan sehari-hari.
  <br>
  <strong>2</strong>. Berpastisipasi aktif dalam pembangunan berwawasan lingkungan dan teknologgi dan meningkatkan kualitas SDM.
  <br>
  <strong>3</strong>. Mempupuk dan menumbuh kembangkan rasa persatuan dan kesatuan anggotanya.
  <br>
  <strong>4</strong>. Mengharumkan nama Fakultas dengan mengembangkan potensi pribadi serta turut aktif dalam kegiatan yang aktif, kreatif dan positif.
  <br>
  </p>      
  </div>
  </div>

  <div class="services">
  <h3 class="text-center wowload fadeInUp">Program Kerja</h3>
	<ul class="row text-center list-inline  wowload bounceInUp">
   		<li>
            <span><i class="fa fa-bell"></i><b>PBGF</b></span>
        </li>
        <li>
            <span><i class="fa fa-plane"></i><b>On Duty</b></span>
        </li>
        <li>
            <span><i class="fa fa-graduation-cap"></i><b>Delegasi</b></span>
        </li>
        <li>
            <span><i class="fa fa-heart"></i><b>Sosial Budaya</b></span>
        </li>        
        <li>
            <span><i class="fa fa-sitemap"></i><b>IT</b></span>
        </li>
  	</ul>
  </div>
</div>
<!-- #Cirlce Ends -->

<!--Bujang Gadis-->
<div id="bg">
  Bujang dan gadis
</div>
<!--#bg-->

<!-- works --> 
<div id="works"  class=" clearfix grid"> 

    <p></p>
      <h2>Galery IBGF</h2>
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1000px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('assets/images/curved.png') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/1.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/1.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/2.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/2.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/3.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/3.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/4.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/4.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/5.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/5.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/6.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/6.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/7.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/7.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/8.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/8.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/9.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/9.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/10.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/10.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/11.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/11.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/12.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/12.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/13.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/13.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/14.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/14.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/15.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/15.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/16.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/16.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/17.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/17.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/18.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/18.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/19.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/19.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/20.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/20.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/21.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/21.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/22.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/22.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/23.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/23.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/24.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/24.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/25.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/25.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/26.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/26.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/27.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/27.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/28.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/28.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/29.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/29.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/30.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/30.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/31.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/31.jpg" />
            </div>
             <div data-p="150.00" style="display: none;">
                <img data-u="image" src="assets/images/portfolio/31.jpg" />
                <img data-u="thumb" src="assets/images/portfolio/31.jpg" />
            </div>

        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
    </div>
     
</div>
<!-- works -->


<div id="partners" class="container spacer ">
	<h2 class="text-center  wowload fadeInUp">Terima Kasih Untuk Semua Rekan-rekan Yang Sudah Mensupport Kami</h2>
  <div class="clearfix">
    <div class="col-sm-6 partners  wowload fadeInLeft">
         <img src="assets/images/partners/" alt="partners">
         <img src="assets/images/partners/" alt="partners">
         <img src="assets/images/partners/" alt="partners">
         <img src="assets/images/partners/" alt="partners">
    </div>
    <div class="col-sm-6">


    <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight" data-ride="carousel">
    <div class="carousel-inner">  
      <div class="item active animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="assets/images/team/1.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. </p>      
      <span>Angel Smith - <b>eshop Canada</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="assets/images/team/2.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
      <span>John Partic - <b>Crazy Pixel</b></span>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
      <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="assets/images/team/3.jpg" width="100" class="img-circle img-responsive"></div>
      <div  class="col-xs-10">
      <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue.</p>
      <span>Harris David - <b>Jet London</b></span>
      </div>
      </div>
  </div>

   <!-- Indicators -->
   	<ol class="carousel-indicators">
    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
  	</ol>
  	<!-- Indicators -->
  </div>



    </div>
  </div>


<!-- team -->
<h3 class="text-center  wowload fadeInUp">Ketua Kepengurusan</h3>
<p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
<div class="row grid team  wowload fadeInUpBig">	
	<div class=" col-sm-3 col-xs-6">
 
	</div>
<!-- team -->

</div>


<!-- About Starts -->
<!-- About Ends -->



<div id="contact" class="spacer">
<!--Contact Starts-->
<div class="container contactform center">
<h2 class="text-center  wowload fadeInUp">Get in touch to start your project</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-sm-6 col-sm-offset-3 col-xs-12">      
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Company">
        <textarea rows="5" placeholder="Message"></textarea>
        <button class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
      </div>
  </div>


<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#">
<i class="fa fa-facebook fa-2x"></i></a> <a href="#">
<i class="fa fa-instagram fa-2x"></i></a> <a href="#">
<i class="fa fa-twitter fa-2x"></i></a> <a href="#">
<i class="fa fa-flickr fa-2x"></i></a> </p>
Follow our media sosial
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>



<!-- jquery -->
	<script src="<?= base_url('assets/jquery.js') ?>"></script>

	<!-- wow script -->
	<script src="<?= base_url('assets/wow/wow.min.js') ?>"></script>


	<!-- boostrap -->
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.js') ?>" type="text/javascript" ></script>

	<!-- jquery mobile -->
	<script src="<?= base_url('assets/mobile/touchSwipe.min.js') ?>"></script>
	<script src="<?= base_url('assets/respond/respond.js')?>"></script>

	<!-- gallery -->
	<script src="<?= base_url('assets/gallery/jquery.blueimp-gallery.min.js') ?>"></script>

	<!-- custom script -->
	<script src="<?= base_url('assets/script.js') ?>"></script>
</body>
</html>