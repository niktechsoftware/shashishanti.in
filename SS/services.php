<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Create by hwebs.in, Fri, 13 Dec 2014 09:37:54 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SS Fitness</title>
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Twitter Feed -->
<script src="js/twitter/jquery.tweet.js" charset="utf-8"></script>
<!-- Flickr Feed -->
<script src="js/jflickrfeed.min.js"></script>
<!-- PrettyPhoto -->
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/custom.quicksand.js"></script>
<!-- DropDownMenu -->
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" charset="utf-8">
var $ = jQuery.noConflict();
  $(window).load(function() {
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
	$('#basicuse').jflickrfeed({
		limit: 6,
		qstrings: {
			id: '31408169@N04'
		},
		itemTemplate: '<li><a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
	});
	

  });
  
  jQuery(function($){
	$(".tweet").tweet({
	  modpath: 'js/twitter/',
	  join_text: "auto",
	  username: "famousthemes",
	  count: 2,
	  auto_join_text_default: "we said,",
	  auto_join_text_ed: "we",
	  auto_join_text_ing: "we were",
	  auto_join_text_reply: "we replied",
	  auto_join_text_url: "we were checking out",
	  loading_text: "loading tweets..."
	});
  });
</script>
</head>
<body>
<div id="main_container">
 
  <?php include"header.php"; ?><!-- End of Header-->
  
  <div class="page_header pagebg1">
      <h1>Join Our Fitness Club</h1>
      <?php if($temp != 0)
				{
				?>
               <a href="contact.php" class="header_bt">Hi <?php echo $name; ?></a>                     
            <?php
				}				
			else
			{
			?>
            	<a href="register.php" class="header_bt">Join Now!</a>
            <?php
			}
			?>

   </div>
    
   <div class="content">

   
   		<div class="left23 left_content">
        
        <?php
			$p = $_GET['p'];
			switch($p)
			{
				case 1:
				{
					?>
                    <h2>Body Building</h2>
                	<div class="gmap">
           	<p>Bodybuilding is the use of progressive resistance exercise to control and develop one's musculature. An individual who engages in this activity is referred to as a bodybuilder. In competitive amateur and professional bodybuilding, bodybuilders appear in lineups doing specified poses, and later perform individual posing routines, for a panel of judges who rank competitors based on criteria such as symmetry, muscularity, and conditioning. Bodybuilders prepare for competition through a combination of dehydration, fat loss, oils, and tanning (or tanning lotions) which make their muscular definition more distinct. </p>
            <p>&nbsp;</p>
            <div class="gallery_item">
            <img src="prettyphoto/bb.jpg" width="690" />
            </div>
            </div>
                    <?php
					break;
				}
				case 2:
				{
					?>
                    <h2>Cardiac Exercise</h2>
                	<div class="gmap">
                                       <p>Cardio is one of the most important things you can do for your body, whether you want to lose weight, burn fat or improve your health.  The great thing is, there are plenty of choices for cardio exercise.  Anything that gets your heart rate into your target heart rate zone will work, but there are some exercises that give you a little more bang for your buck.</p> 
<p>There's no 'right' cardio exercise and the best choice is the one you enjoy and the one you'll work hardest at, but there are some that work best if your goal is to blast calories and get in great shape.</p>
					<div class="gallery_item">
            <img src="prettyphoto/cardic.jpg" width="690" />
            </div>
                </div>
                    <?php
					break;
				}
				case 3:
				{
					?>
                    <h2>Aerobics</h2>
                	<div class="gmap">
                                           <p>Aerobics is a form of physical exercise that combines rhythmic aerobic exercise with stretching and strength training routines with the goal of improving all elements of fitness (flexibility, muscular strength, and cardio-vascular fitness). It is usually performed to music and may be practiced in a group setting led by an instructor (fitness professional), although it can be done solo and without musical accompaniment. With the goal of preventing illness and promoting physical fitness, practitioners perform various routines comprising a number of different dance-like exercises. Formal aerobics classes are divided into different levels of intensity and complexity. Aerobics classes may allow participants to select their level of participation according to their fitness level. Many gyms offer a variety of aerobic classes. Each class is designed for a certain level of experience and taught by a certified instructor with a specialty area related to their particular class.</p>
                         <div class="gallery_item">
                            <img src="prettyphoto/themen_pilates.jpg" width="690" />
                         </div>
                </div>
                    <?php
					break;
				}
				case 4:
				{
					?>
                    <h2>Strength Exercise</h2>
                	<div class="gmap">
                                                             <p>Strength Exercise is a type of physical exercise specializing in the use of resistance to induce muscular contraction which builds the strength, anaerobic endurance, and size of skeletal muscles.</p>
<p>When properly performed, strength training can provide significant functional benefits and improvement in overall health and well-being, including increased bone, muscle, tendon and ligament strength and toughness, improved joint function, reduced potential for injury, increased bone density, increased metabolism, improved cardiac function, and elevated HDL ("good") cholesterol. Training commonly uses the technique of progressively increasing the force output of the muscle through incremental weight increases and uses a variety of exercises and types of equipment to target specific muscle groups. Strength training is primarily an anaerobic activity, although some proponents have adapted it to provide the benefits of aerobic exercise through circuit training.</p>
						<div class="gallery_item">
                            <img src="prettyphoto/205559image001.jpg" width="690" />
                         </div>

                </div>
                    <?php
					break;
				}
				case 5:
				{
					?>
                    <h2>Musceles Toning</h2>
                	<div class="gmap">
                                           <p>In physiology, medicine, and anatomy, muscle tone (residual muscle tension or tonus) is the continuous and passive partial contraction of the muscles, or the muscle's resistance to passive stretch during resting state. It helps to maintain posture and declines during REM sleep.</p>

<h3>Purpose </h3>
<p>If a sudden pull or stretch occurs, the body responds by automatically increasing the muscle's tension, a reflex which helps guard against danger as well as helping to maintain balance. Such near-continuous innervation can be thought of as a "default" or "steady state" condition for muscles. There is, for the most part, no actual "rest state" insofar as activation is concerned. Both the extensor and flexor muscles are involved in the maintenance of a constant tone while "at rest." In skeletal muscles, this helps maintain a normal posture.</p>
<p>Although cardiac muscle and smooth muscle are not directly connected to the skeleton, they also have tonus in the sense that although their contractions are not matched with those of antagonist muscles, the non-contractile state is characterized by (sometimes random) enervation.</p>
						<div class="gallery_item">
                            <img src="prettyphoto/uchr_03_img0302.jpg" width="690" />
                         </div>

                </div>
                    <?php
					break;
				}
				case 6:
				{
					?>
                    <h2>Stretching</h2>
                	<div class="gmap">
                                 <p>Stretching is a form of physical exercise in which a specific muscle or tendon (or muscle group) is deliberately flexed or stretched in order to improve the muscle's felt elasticity and achieve comfortable muscle tone. The result is a feeling of increased muscle control, flexibility and range of motion. Stretching is also used therapeutically to alleviate cramps.</p>
<p>In its most basic form, stretching is a natural and instinctive activity; it is performed by humans.  Stretching often occurs instinctively after waking from sleep, after long periods of inactivity, or after exiting confined spaces and areas.</p>
<p>Increasing flexibility through stretching is one of the basic tenets of physical fitness. It is common for athletes to stretch before and after exercise in order to reduce injury and increase performance.</p>
<p>Stretching can be dangerous when performed incorrectly. There are many techniques for stretching in general, but depending on which muscle group is being stretched, some techniques may be ineffective or detrimental, even to the point of causing permanent damage to the tendons, ligaments and muscle fiber.</p>
							<div class="gallery_item">
                            <img src="prettyphoto/back-pain-stretches.jpg" width="690" />
                         </div>
                </div>
                    <?php
					break;
				}
				case 7:
				{
					?>
                    <h2>Body Massage</h2>
                	<div class="gmap">
                                                         <p>Massage is the manipulation of superficial and deeper layers of muscle and connective tissue using various techniques, to enhance function, aid in the healing process, decrease muscle reflex activity, inhibit motor-neuron excitability, promote relaxation and well-being, and as a recreational activity.</p>
                                             <p>Massage involves working and acting on the body with pressure – structured, unstructured, stationary, or moving – tension, motion, or vibration, done manually or with mechanical aids. Target tissues may include muscles, tendons, ligaments, fascia, skin, joints, or other connective tissue, as well as lymphatic vessels, or organs of the gastrointestinal system. Massage can be applied with the hands, fingers, elbows, knees, forearm, or feet.</p>
						<div class="gallery_item">
                            <img src="prettyphoto/message.jpg" width="690" />
                         </div>
                </div>
                    <?php
					break;
				}
				case 8:
				{
					?>
                    <h2>Steam Bath</h2>
                	<div class="gmap">
                                    <p>A steam bath opens pores, soothes sore muscles, increases circulation, and provides a generally relaxing and healthy experience. People have indulged in steam baths for centuries, as the has practice spread across and among contintents. Now, modern technology has enabled the installation of efficient, carefully controlled baths at spas, fitness centers, meditation rooms, and in personal residences.</p>
<p>For a very wet and hot health treatment, people often seek out a peaceful steam bath. This usually takes place in a sealed room with wooden benches, similar to a sauna, which is kept at an even temperature and filled with mist. There is a narrow range of optimum temperature for humans, around 112° F (44° C), that raises our body temperature without causing overheating. The circulating vapor must be replenished so the humidity remains near saturation for maximum benefits.You may find a steam bath at your yoga studio, local spa, health clinic, or stand-alone establishment that may also have hot tubs, saunas, or wading pools.</p><div class="gallery_item">
                            <img src="prettyphoto/steambath.jpg" width="690" />
                         </div>



                </div>
                    <?php
					break;
				}
				case 9:
				{
					?>
                    <h2>Chilled Shower</h2>
                	<div class="gmap">
                    	<p>Cold Water Massage Therapy is the one of the healthiest and inexpensive of therapies. Simply massage the body with almond oil before taking a shower. Shower in cold water until your body temperature rises and no longer feels cold, but toasty and warm. Make sure the bathroom is heated. Never get out of a cold shower into a cold room.</p>
<p><strong>Cold showers have the following positive effects:</strong></p>
<ul>
    <li> Brings blood to the capillaries, therefore increasing circulation throughout the body.</li>
    <li> Cleans the circulatory system.</li>
    <li> Reduces blood pressure on internal organs.</li>
    <li> Provides flushing for the organs and provides a new supply of blood.</li>
    <li> Strengthens the parasympathetic and sympathetic nervous systems.</li>
    <li> Contracts the muscles to eliminate toxins and poisonous wastes.</li>
    <li> Strengthens the mucous membranes, which help resist hay fever, allergies, colds, coughs.</li>
</ul>
<p>Many health problems are reduced or even eliminated over time by providing proper circulation of the blood to the affected area using the cold shower massage.</p>
<div class="gallery_item">
                            <img src="prettyphoto/CS.jpg" width="690" />
                         </div>
                </div>
                    <?php
					break;
				}
				case 10:
				{
					?>
                    <h2>Cafeteria Facilities</h2>
                	<div class="gmap">
                                <p> <strong>"Every man should eat and enjoy the fruit of all his labour; it is the gift of god"</strong></p>
 
<p>The administration of these cafeteria is given to experienced, proficient and committed contractors. All these cafeteria are open on all working days. Besides, they provide food at a very nominal price. </p>
<p>'Cafeteria-I', common to SCT and TPT is housed in a separate sophisticated building with an area of about 301.36 m2 near the entrance of the campus.</p>

<p>For the convenience of the students and staff, Cafeteria – I has been allowed by our Management to open its new counter in a built up area of 246.24 m2 inside the main block of Sona College of Technology. </p>
<h3>Special Features</h3> 
<ul>
    <li>Well manpowered cafeteria</li>
    <li>A hygienic catering</li>
    <li>Purified Drinking water</li>
    <li>Well equipped with modernized cooking appliances</li>
    <li>An Audio & Visual Display Room, an annexe to the Dining Hall. A recreation for the Sonarians.</li>
</ul>

                </div>
                    <?php
					break;
				}
				case 11:
				{
					?>
                    <h2>Locker Facilities</h2>
                	<div class="gmap">
                	<p> <strong>"Locker Facility is provided to every member"</strong></p>
 
<p>You need to carry your articles when to come to gym. You can keep them in locker provided to you</p>
<div class="gallery_item">
                            <img src="prettyphoto/locker.jpg" width="690" />
                         </div>
              
                </div>
                    <?php
					break;
				}
				case 12:
				{
					?>
                    <h2>Separate Ladies Section</h2>
                	<div class="gmap">
                        <p>For more privacy there are separate ladies  sections where you will find all of the latest cardio and strength training equipment, selectorized, plate loaded and resistance machines including a free weight area featuring full racks of dumbbells, bar bells and benches. <br /></p>
                         <div class="gallery_item">
                            <img src="prettyphoto/linkers_fitnessfirst.jpg" width="690" />
                         </div>
                </div>
                    <?php
					break;
				}
				case 13:
				{
					?>
                    <h2>Changing Room</h2>
                	<div class="gmap">
                          <p>There is Changing room facality also.</p>
						<div class="gallery_item">
                            <img src="prettyphoto/room4.jpg" width="690" />
                         </div>
                </div>
                    <?php
					break;
				}
				case 14:
				{
					?>
                    <h2>Boxing</h2>
                	<div class="gmap">
                          <p> Boxing fitness will have the skills include training with punching mitts, hit the sandbags, the reaction of the speed ball & double end ball, the target up to the most of the muscles involved in, especially use the most of lower part body muscles with the least to the arms and most powerful punches as the rule of thumb. Achieve strengthen of the body from the top to bottom, left and right body coordination. 
 Boxer Training will have the skills include sparring, slip and weave, hit resistance and counter attack, training focus on how to hit opponent but not getting hit. Finally focus on a respiratory rhythm and density to achieve the hand, eye, body movement & foot work coordination.</p>
 <div class="gallery_item">
            <img src="prettyphoto/boxing.jpg" width="690" />
            </div>

                </div>
                    <?php
					break;
				}
				case 15:
				{
					?>
                    <h2>Exercises with Medicine Ball & Gym Ball</h2>
                	<div class="gmap">
             <p> A medicine ball (also known as an exercise ball, a med ball, or a fitness ball) is a weighted ball roughly the diameter of the shoulders (approx. 13.7 inches), and is often used for rehabilitation and strength training. The medicine ball also serves an important role in the field of sports medicine. However, it should not be confused with the larger, inflated exercise ball.
Medicine balls are usually sold as 2–25 lb (0.91–11 kg) balls and are used effectively in plyometric weight training to increase explosive power in athletes in all sports. Some medicine balls are in the form of weighted basketballs.

An gym ball is a ball constructed of soft elastic with a diameter of approximately 35 to 85 centimeters (14 to 34 inches) and filled with air. The air pressure is changed by removing a valve stem and either filling with air or letting the ball deflate. It is most often used in physical therapy, athletic training and exercise. It can also be used for weight training. The ball, while often referred to as a Swiss ball, is also known by a number of different names, including balance ball, birth ball, body ball, ball, fitness ball, gym ball, gymnastic ball, physioball, pilates ball, Pezzi ball, sports ball, stability ball, Swedish ball, therapy ball, or yoga ball.</p>

<div class="gallery_item">
            <img src="prettyphoto/MB.jpg" width="690" />
            </div>

                </div>
                    <?php
					break;
				}
				default:
				{
					?>
                    <h2>Body Building</h2>
       	  <div class="gmap">
           	<p>Bodybuilding is the use of progressive resistance exercise to control and develop one's musculature. An individual who engages in this activity is referred to as a bodybuilder. In competitive amateur and professional bodybuilding, bodybuilders appear in lineups doing specified poses, and later perform individual posing routines, for a panel of judges who rank competitors based on criteria such as symmetry, muscularity, and conditioning. Bodybuilders prepare for competition through a combination of dehydration, fat loss, oils, and tanning (or tanning lotions) which make their muscular definition more distinct. </p>
            <p>&nbsp;</p>
            <div class="gallery_item">
            <img src="prettyphoto/bb.jpg" width="690" />
            </div>
            </div>
            
                    <?php
					break;
				}
			}
		
		?>
        		
                
        </div>
        
   		<div class="left13 sidebar">
        
        
                <h2>Services</h2>
                
                <ul>
                    <li><a href="services.php?p=1">Body Building</a></li>
                    <li><a href="services.php?p=2">Cardiac Exercise</a></li>
                    <li><a href="services.php?p=3">Aerobics</a></li>
                    <li><a href="services.php?p=4">Strength Exercise</a></li>
                    <li><a href="services.php?p=5">Muscles Toning</a></li>
                    <li><a href="services.php?p=6">Stretching</a></li>
                    <li><a href="services.php?p=7">Body Massage</a></li>
                    <li><a href="services.php?p=8">Steem Bath</a></li>
                    <li><a href="services.php?p=9">Chilled Shower</a></li>
                    <li><a href="services.php?p=10">Cafeteria Facilities</a></li>
                    <li><a href="services.php?p=11">Locker Facilities</a></li>
                    <li><a href="services.php?p=12">Separate Ladies Section</a></li>
                    <li><a href="services.php?p=13">Changing Room</a></li>
                    <li><a href="services.php?p=14">Boxing</a></li>
                    <li><a href="services.php?p=15">Exercises with Medicine Ball & Gym Ball</a></li>
            	</ul>           

        </div>
        
        <div class="left_full">
        <h2>Bodybuilding Supplements</h2>
	        
	        <?php include"marque.php" ?>
	        <br/><br/>
	        
	         <h2>Bodybuilding Accessories</h2>
	        
	        <?php include"marque1.php" ?>
        </div>
     
     
    <div class="clear"></div>     
    </div>
  
   
   
   <?php include"footer.php"; ?>
   
   <div class="clear"></div>
</div>

<script type="text/javascript">
var main_menu=new main_menu.dd("main_menu");
main_menu.init("main_menu","menuhover");
</script>
</body>

<!-- Create by hwebs.in, Fri, 13 Dec 2014 09:37:54 GMT -->
</html>