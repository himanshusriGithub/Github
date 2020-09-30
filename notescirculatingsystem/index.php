<?php include 'includes/connection.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/navbar.php';?>

<br><br>
<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
<br><br><body style="background-color:#DCDCDC;">
     <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="#"><img src="images/slider/notes20.jpeg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><div style="background-color:black;color:white;">
<h2 style="color:white;">&nbsp&nbsp&nbspEasy Notes Management</h2><p style="color:white;">&nbsp&nbsp&nbsp&nbspNow easily manage all kind of notes by uploading them here.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/note20.gif" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2 style="color:white;">&nbsp&nbsp&nbspUpload Various Files</h2><p style="color:white;">&nbsp&nbsp&nbspUser can upload various types of files like PDF, PPT, DOC etc..</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/notes1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2 style="color:white;">&nbsp&nbsp&nbspControled By Admin</h2><p style="color:white;">&nbsp&nbsp&nbspEverying is managed and controled by administrator</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="#"><img src="images/slider/slide4.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2 style="color:white;">&nbsp&nbsp&nbspLogin For Both Teacher and Student</h2><p style="color:white;">&nbsp&nbsp&nbspBoth teacher and student can login and upload notes </p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>
    </div>  
</div>

</body>
</html>









































<?php include 'includes/footer.php';?>

        