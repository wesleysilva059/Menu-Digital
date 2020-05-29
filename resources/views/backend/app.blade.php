<!DOCTYPE HTML>
   <html>

	@include('backend.partials.htmlheader')

	<body>


	<div class="page-container">	
		<div class="left-content">
			<div class="mother-grid-inner">
				<!--header start here-->

				@include('backend.partials.mainheader')
				
	<!--inner block start here-->
	@yield('content')

	<!--inner block end here-->
	<!--copy rights start here-->
		@include('backend.partials.footer')
	<!--COPY rights end here-->
	</div>
	</div>
	<!--slider menu-->
		@include('backend.partials.sidebar')
		<div class="clearfix"> </div>
	</div>
<!--slide bar menu end here-->
<script>

$(document).ready(function() {
	var navoffeset=$(".header-main").offset().top;
	$(window).scroll(function(){
	var scrollpos=$(window).scrollTop(); 
	if(scrollpos >=navoffeset){
		$(".header-main").addClass("fixed");
	}else{
		$(".header-main").removeClass("fixed");
	}
	});
});

var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
		toggle = !toggle;
});

</script>
@yield('scripts')
<!--scrolling js-->
		<script src="/js/jquery.nicescroll.js"></script>
		<script src="/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     