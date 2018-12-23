<!DOCTYPE HTML>
<html lang="en-US">

<!-- Created by Hwebs on Mon, 02 Dec 2013 14:57:57 GMT -->
<head>
	<title>Shashi Shanti</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="skins/red-blue/blue.css" id="colors" /> 
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon"/>
	<script src="jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.color.js"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
	<script src="js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>
		<!--switcher-->
		<link rel="stylesheet" href="css/switcher.css">	
		<script src="js/jquery.cookie.js"></script>
		<script src="js/switcher.js"></script>
		<!--switcher and-->
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
	<script type='text/javascript'>
	    
	    $(function(){
	    
	        var iFrames = $('iframe');
	      
	    	function iResize() {
	    	
	    		for (var i = 0, j = iFrames.length; i < j; i++) {
	    		  iFrames[i].style.height = iFrames[i].contentWindow.document.body.offsetHeight + 'px';}
	    	    }
	    	    
	        	if ($.browser.safari || $.browser.opera) { 
	        	
	        	   iFrames.load(function(){
	        	       setTimeout(iResize, 0);
	               });
	            
	        	   for (var i = 0, j = iFrames.length; i < j; i++) {
	        			var iSource = iFrames[i].src;
	        			iFrames[i].src = '';
	        			iFrames[i].src = iSource;
	               }
	               
	        	} else {
	        	   iFrames.load(function() { 
	        	       this.style.height = this.contentWindow.document.body.offsetHeight + 'px';
	        	   });
	        	}
	        
	        });
	
	</script>
</head>
<body>
<div id="wrapper">
	<?php include"header1.php"; ?>
	<section id="content" class="container-fluid">
	<div class="container">
		<div id="headline-page">
			<h1>Our Photos</h1>
		</div>
		<div class="row post">
        <?php 
			
				echo "<h1>Virtual Tour</h1>";
			
		?>
        </div>
	<iframe src="../../SS/gallery_test.php" class="iframe" width="1000" height="800" scrolling="no" frameborder="0"></iframe>
	
	</div>
	</section>
</div>
<?php include"footer.php"; ?>
</body>

<!-- Created by Hwebs on Mon, 02 Dec 2013 14:57:57 GMT -->
</html>