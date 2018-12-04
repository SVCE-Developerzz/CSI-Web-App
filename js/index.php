<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/materialize.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
    $('.sidenav').sidenav();
  	});
	
	$(document).ready(function(){
    $('.collapsible').collapsible();
  	});

  	$(document).ready(function(){
    $('.carousel').carousel();
  	});

  	$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  	});

  	$(document).ready(function(){
	$('.slider').slider({
		interval:3000,
		indicators: false
	});
	});
</script>

