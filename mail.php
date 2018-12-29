<?php 
$to = 'bob@example.com';

$subject = 'Website Change Request';

$headers = "From: " . strip_tags($_POST['nombre']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers = "Mensaje: " . strip_tags($_POST['mensaje']) . "\r\n";
$headers .= "CC: matiasaguirre18@hotmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Matías Aguirre</title>
  
  <link rel="icon" href="img/square.ico">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

  <link href="css/css_index.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">


    <link rel="stylesheet" href="css/css_site.css">


</head>


<body>
  

  
<div class="container" style="margin-top:50px">
	<div class="row">
		<div class="col-sm-12 wow fadeInDown" style="text-align:left;font-size:100px" data-wow-delay="0.3s">
			<a href="shit.html"><i class="fas fa-arrow-left" id="arrow" ></i></a>

		</div>
	</div>
</div>
 


 <div class="container" style="margin-top:150px">
 	<div class="row">
 		<div class="col-sm-12">
 			<p style="font-size:50px;text-align:center">¡Gracias por escribirme,en breve te respondo!</p>
 		</div>
 	</div>
 		
 </div>
  

</body>


  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script src="js/particles.js"></script>

  <script src="js/app_particle.js"></script>

 <script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>
 
  <script type="text/javascript" >new WOW().init();</script>

  <script type="text/javascript" >

$(document).ready(function(){
  
  
  // Initializing scrollspy
  
  
  // Initializing scroll snap
  $(function() {
    $.scrollify({
        section : ".landing-page-section",
        sectionName : "landing-page-section-scroll",
        setHeights: false,
        scrollSpeed: 600,
        touchScroll: true,
        interstitialSection: '.footer-main',
    });
  });
  
  $(".scrollify-action").on('click', function(){
    if ( $(this).data('scroll') == 'next' ) {
      $.scrollify.next();
    }
    else if ( $(this).data('scroll') == 'prev' ) {
      $.scrollify.previous();
    }
  });
  
  // Scrollspy on the floating nav
  $('body').scrollspy({ target: '.floating-scrollspy' });
  
  
  // Smooth scroll on hash
  $('.floating-scrollspy  a').on('click',  function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
  });
  
});

  </script>

</html>
