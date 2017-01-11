
<!--
----------------------------------------------------------------------------------------
bxSlider
----------------------------------------------------------------------------------------

 <text>
	<p>bxSlider</p>
</text>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"/>
<script src="js/jquery.bxslider.min.js"/>
<link href="lib/jquery.bxslider.css" rel="stylesheet" />
<ul class="bxslider">
	<li>
		<img src="images/1.jpg" />
	</li>
	<li>
		<img src="images/2.jpg" />
	</li>
	<li>
		<img src="images/3.jpg" />
	</li>
</ul>

<script> $(document).ready(function(){
  $('.bxslider').bxSlider({
  auto: true,
  autoControls: true
});
});
</script>
-->

<!--
----------------------------------------------------------------------------------------
Owl carousel
----------------------------------------------------------------------------------------


<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
<link href="/slide/Owl/assets/css/bootstrapTheme.css" rel="stylesheet">
<link href="/slide/Owl/assets/css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="Owl/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="Owl/owl-carousel/owl.theme.css">
<script src="/slide/Owl/assets/js/jquery-1.9.1.min.js"></script>
<script src="/slide/Owl/owl-carousel/owl.carousel.js"></script>

<style>
#owl-demo .item{
  background: #3fbf79;
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}
.customNavigation{
  text-align: center;
}
//use styles below to disable ugly selection
.customNavigation a{
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
</style>


<div id="owl-demo" class="owl-carousel owl-theme">
	<div class="item">
		<h1>1</h1>
	</div>
	<div class="item">
		<h1>2</h1>
	</div>
	<div class="item">
		<h1>3</h1>
	</div>
	<div class="item">
		<h1>4</h1>
	</div>
	<div class="item">
		<h1>5</h1>
	</div>
	<div class="item">
		<h1>6</h1>
	</div>
	<div class="item">
		<h1>7</h1>
	</div>
	<div class="item">
		<h1>8</h1>
	</div>
	<div class="item">
		<h1>9</h1>
	</div>
	<div class="item">
		<h1>10</h1>
	</div>
	<div class="item">
		<h1>11</h1>
	</div>
	<div class="item">
		<h1>12</h1>
	</div>
	<div class="item">
		<h1>13</h1>
	</div>
	<div class="item">
		<h1>14</h1>
	</div>
	<div class="item">
		<h1>15</h1>
	</div>
	<div class="item">
		<h1>16</h1>
	</div>
</div>

<div class="customNavigation">
	<a class="btn prev">Previous</a>
	<a class="btn next">Next</a>
	<a class="btn play">Autoplay</a>
	<a class="btn stop">Stop</a>
</div>

<script>
$(document).ready(function() {

  var owl = $("#owl-demo");

  owl.owlCarousel({
      items : 10, //10 items above 1000px browser width
      itemsDesktop : [1000,5], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,3], // betweem 900px and 601px
      itemsTablet: [600,2], //2 items between 600 and 0
      itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
  });

  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })

});
</script>
-->


----------------------------------------------------------------------------------------
FlexSlider 2
----------------------------------------------------------------------------------------

<!--
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="/slide/flexslider/css/flexslider.css" type="text/css">
<script src="/slide/flexslider/js/jquery.flexslider.js"></script>


<script type="text/javascript" charset="utf-8">
 $(window).load(function() {
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
 
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});
</script>



<div id="slider" class="flexslider">
  <ul class="slides">
    <li>
      <img src="/slide/flexslider/img/1.jpg" />
    </li>
    <li>
      <img src="/slide/flexslider/img/2.jpg" />
    </li>
    <li>
      <img src="/slide/flexslider/img/3.jpg" />
    </li>
    <li>
      <img src="/slide/flexslider/img/4.jpg" />
    </li>

  </ul>
</div>
<div id="carousel" class="flexslider">
  <ul class="slides">
    <li>
      <img src="/slide/flexslider/img/1.jpg" />
    </li>
    <li>
      <img src="/slide/flexslider/img/2.jpg" />
    </li>
    <li>
      <img src="/slide/flexslider/img/3.jpg" />
    </li>
    <li>
      <img src="/slide/flexslider/img/4.jpg" />
    </li>

  </ul>
</div>
-->

<body>
  <section>
    <div class="flexslider">
      <ul class="slides">
        <li>
          <img style="height: 400px; width: 400px;" src="/slide/flexslider/img/1.jpg">
        </li>
        <li>
          <img style="height: 400px; width: 400px;" src="/slide/flexslider/img/2.jpg">
        </li>
        <li>
          <img style="height: 400px; width: 400px;" src="/slide/flexslider/img/3.jpg">
        </li>
      </ul>
    </div>
  </section>
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')
  </script>

  <!-- FlexSlider -->
  <script defer src="/slide/flexslider/js/jquery.flexslider.js"></script>

  <link rel="stylesheet" href="/slide/flexslider/css/flexslider.css" type="text/css" media="screen" />
   <script type="text/javascript">       
        $(document).ready(function () {
           $(window).load(function () {
              $('.flexslider').flexslider({
                animation: "slide"
              });
           });
        });
  </script>

</body>

</html>

<!--

</html>
----------------------------------------------------------------------------------------
FancyBox
----------------------------------------------------------------------------------------
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
			<title>FancyBox</title>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
			<link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
			<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
			<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
			<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
			<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
			<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
			<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
			<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
			<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		</head>
		<style>
			img{
			width: 30%;
			height: 30%;
			}
		</style>
		<body>

			<a id="single_1" href="http://www.mckennedy.org/blog/images/tutorials/online-photo-gallery.jpg" title="Morning on Camaret (Tony N.)">
				<img src="http://www.mckennedy.org/blog/images/tutorials/online-photo-gallery.jpg" alt="" />
			</a>
			<a id="single_2" href="http://farm1.staticflickr.com/756/22625719192_fdc3369588_b.jpg" title="Transparence (delphine.cury)">
				<img src="http://farm1.staticflickr.com/756/22625719192_fdc3369588_m.jpg" alt="" />
			</a>
			<a id="single_3" href="http://farm9.staticflickr.com/8542/29466009773_a809b99d19_b.jpg" title="aletsch (|| | | gamma | | ||)">
				<img src="http://farm9.staticflickr.com/8542/29466009773_a809b99d19_m.jpg" alt="" />
			</a>
			<a id="single_4" href="http://farm2.staticflickr.com/1514/23919332220_60b7867d60_b.jpg" title="the forest at dawn (Luca-Anconetani)">
				<img src="http://farm2.staticflickr.com/1514/23919332220_60b7867d60_m.jpg" alt="" />
			</a>
			<script>
				$(document).ready(function() {
				$("#single_1").fancybox({
				helpers: {
				title : {
				type : 'float'
				}
				}
				});

				$("#single_2").fancybox({
				openEffect	: 'elastic',
				closeEffect	: 'elastic',

				helpers : {
				title : {
				type : 'inside'
				}
				}
				});

				$("#single_3").fancybox({
				openEffect : 'none',
				closeEffect	: 'none',
				helpers : {
				title : {
				type : 'outside'
				}
				}
				});

				$("#single_4").fancybox({
				helpers : {
				title : {
				type : 'over'
				}
				}
				});
				});
			</script>
		</body>

-->
