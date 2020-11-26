<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>FPV Life</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="static/index.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

</head>
<body>

<!--CodePen NavBar-->
  <section class="navbar">

	<div class="logo"><h2 id="logo"><a href="/" style="text-decoration: none;color: snow;font-family: haloween;font-size: 4vw;">FPV Life!</a></h2></div>


	<ul class="links">
		<li><a href="#" id="bold" class="hover-underline-animation">FPV</a></li>
		<li><a href="#" id="streched" class="hover-underline-animation">Community</a></li>
	</ul>


	<div class="right">
		<button>Dashboard</button>
	</div>

	<div class="toggle">
		<div class="line1"></div>
		<div class="line2"></div>
	</div>


  </section>


<main>
	
	<div class="content section section1">
        <div class="text1">
        		<h1 id="fullwidth-convered" class="title" style="color: snow;font-size:3rem;">Experience The Thrill Of The Skies</h1>
				<h2>FPV Life!</h2>
		</div>
		<img src="static/parrot.png" alt="demo drone">
	</div>

</main>


<section id="landingpage" class="section">
	<h1 id="fullwidth-convered" class="title" style="font-size:6.8vw;">Occupy The Skies</h1><br>
      <p class="subtitle">
        Welcome to <strong>FPV Life!</strong>!
      </p>
	<img src="" id="demo-drone">
</section>

<br>

<!--Codepen Product Slider-->
<section class="slider">
  <div>
    <img src="http://baronwatts.com/tuts/swipe/1.png">
    <div class="desc">
      <h2>BOSE QC35</h2>
      <p>$289.99 - $299.99</p>
      <a href="#" class="btn">Add to Cart</a>
    </div>
  </div>

  <div>
    <img src="http://baronwatts.com/tuts/swipe/2.png">
    <div class="desc">
      <h2>BOSE SoundLink II</h2>
      <p>$299.99 - $329.99</p>
      <a href="#" class="btn">Add to Cart</a>
    </div>
  </div>

  <div>
    <img src="http://baronwatts.com/tuts/swipe/3.png">
    <div class="desc">
      <h2>BOSE QC35</h2>
      <p>$289.99 - $299.99</p>
      <a href="#" class="btn">Add to Cart</a>
    </div>
  </div>

  <div>
    <img src="http://baronwatts.com/tuts/swipe/4.png">
    <div class="desc">
      <h2>BOSE SoundLink II</h2>
      <p>$299.99 - $329.99</p>
      <a href="#" class="btn">Add to Cart</a>
    </div>
  </div>

  <div>
    <img src="http://baronwatts.com/tuts/swipe/5.png">
    <div class="desc">
      <h2>BOSE QC35</h2>
      <p>$289.99 - $299.99</p>
      <a href="#" class="btn">Add to Cart</a>
    </div>
  </div>

  <div>
    <img src="http://baronwatts.com/tuts/swipe/6.png">
    <div class="desc">
      <h2>BOSE SoundLink II</h2>
      <p>$299.99 - $329.99</p>
      <a href="#" class="btn">Add to Cart</a>
    </div>
  </div>

</section>

<!--Jquery--><script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!--Slick--><script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

<!--Color this bg-black-->
<br>
<footer>Made with <b>love!</b> by <i>Keshav Sharma</i>.</footer>
<br>

<!--Codepen NAVBAR-->
  <script>
  window.console = window.console || function(t) {};
</script>



  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script id="rendered-js">
const navbar = document.querySelector('.navbar');

navbar.querySelector('.toggle').addEventListener('click', () => {

  navbar.classList.toggle('collapsed');

});



window.addEventListener('scroll', e => {

  let windowY = window.pageYOffset;

  let navbarHeight = document.querySelector('.navbar').offsetHeight;

  if (windowY > navbarHeight) navbar.classList.add('sticky');else
  navbar.classList.remove('sticky');




});
//# sourceURL=pen.js
</script>

<!--Codepen Product Slider-->
<script type="text/javascript">
function createSlick(){  

	$(".slider").not('.slick-initialized').slick({
		centerMode: true,
	    autoplay: true,
	    dots: true,
	
  		slidesToShow: 3,
	    responsive: [{ 
	        breakpoint: 768,
	        settings: {
	            dots: false,
	            arrows: false,
	            infinite: false,
	            slidesToShow: 1,
	            slidesToScroll: 1
	        } 
	    }]
	});	

}

createSlick();

//Will not throw error, even if called multiple times.
$(window).on( 'resize', createSlick );

</script>

</body>
</html>