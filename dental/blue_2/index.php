<!DOCTYPE HTML>
<html lang="en-US">

<!-- Created by Hwebs Techonologies on Mon, 02 Dec 2013 14:57:57 IST -->
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
</head>
<body>
<div id="wrapper">
	<?php include"header.php"; ?>
	<section id="content" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="span9">
				<h1>Welcome to Shashi Shanti Dental &amp; Oral Care</h1>
				<span class="purchase">Dr Rajkumar Choubey is an Oral & Dental Surgeon and Implantologist, in Ghazipur.</span>
			</div>			
		</div>
		<div class="row">
			<div class="span12">
				<div class="row">
					<div class="span3">
						<a href="contact.php" class="link-block">
							<span class="move-item icon-1 move-bg-icon"></span>
							<h2 class="move-item">appointment</h2>
							<p class="move-item">Setting appointment with the us is just a click away. Alll we need is some information about you. We will get back to you as soon as possible.</p>
						</a>
					</div>
					<div class="span3">
						<a href="service.php" class="link-block">
							<span class="move-item icon-2 move-bg-icon"></span>
							<h2 class="move-item">Our Services</h2>
							<p class="move-item">The clinic is spacious, fully air conditioned with two state of the art computerized dental chairs for providing maximum comfort to the patient.</p>
						</a>
					</div>
					<div class="span3">
						<a href="about.php" class="link-block">
							<span class="move-item icon-3 move-bg-icon"></span>
							<h2 class="move-item">Meet our doctors</h2>
							<p class="move-item">Dr. Rajkumar Choubey is a highly qualified and experienced Consultant, Surgeon and Implantologist in India.</p>
						</a>
					</div>
					<div class="span3">
						<a href="#" class="link-block">
							<span class="move-item icon-4 move-bg-icon"></span>
							<h2 class="move-item">Our Mission</h2>
							<p class="move-item">Our mission is to provide you with the finest possible dental care, in the most comfortable environment possible.<br /><br /> </p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<p>Dr Rajkumar Choubey is an Oral & Dental Surgeon and Implantologist, practising in Ghazipur, India. This site is for patients who wish to learn more about dentistry and dental care, as well as for professionals who wish to refer cases.</p>
            <p>Our mission is to provide you with the finest possible dental care, in the most comfortable environment possible, with the highest degree of technical excellence, friendliness and respect keeping your priorities and expectations in mind. The rates for treatments are quite reasonable and our practice very ethical. Besides that, you will experience a respectful & confidential consultation and treatment from our team of doctors. The clinic has been certified for ISO 9001:2008 for its quality management system & implementation.</p>
		</div>
		<div class="row">
		<div class="title"><h2>News</h2></div>
		<fieldset style="border:#06F 1px solid; height:200px; margin-bottom:30px; padding:10px 30px 10px 30px;">
                <marquee direction="up" scrollamount="2">
<?php 
						include_once"db.php";
						$news = 'select * from notice1';
						$result1 = mysql_query($news);
						while($row = mysql_fetch_array($result1))
						{
							?>
                <h4><?php echo $row['heading']; ?></h4>
                <p><?php echo $row['dis']; ?></p>
                <span style="float:right;"><h5><?php echo $row['post_date']; ?></h5></span>
                
                <?php	} ?> 
                </marquee>
                </fieldset>
		</div>
		
		
	</div>
	
	</section>
	
</div>
<br />
<?php include"footer.php"; ?>

</body>

</html>
