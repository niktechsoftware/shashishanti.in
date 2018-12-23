

<link rel="stylesheet" type="text/css" media="all" href="style1.css" />
<link rel="stylesheet" href="prettyphoto/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto" charset="utf-8" />
<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis" rel="stylesheet" type="text/css" />
<!-- jQuery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Sortable -->
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/custom.quicksand.js"></script>
<!-- PrettyPhoto -->
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<!-- DropDownMenu -->
<script type="text/javascript" src="js/menu.js"></script>

<div>  
    
   <div class="content">

        <ul class="portfolio_items"> 
<?php
	include_once"db.php";
			
			$q = "select * from smile where cat='2'";
			$result = mysql_query($q);
			while($row = mysql_fetch_array($result))
			{
			?>
            
            <li class="left13 gym" data-id="id-1">
        	<div class="gallery_item">
                <img src="2/<?php echo $row['image']; ?>" alt="" title="" border="0" />
                <span><a href="2/<?php echo $row['image']; ?>" rel="prettyPhoto[gallery]" title="<?php echo $row['dis']; ?>"><img src="images/photo.png" alt="" title="" /></a></span>
                    <div class="gallery_caption">
                    <h3><?php echo $row['title']; ?></h3>
                    <p><?php echo $row['dis']; ?></p>
                    </div>
            </div>
        </li> 
            <?php
	}
?>
              
        
        </ul>	

     
     
    <div class="clear"></div>     
    </div>
   
   <div class="clear"></div>
</div>
