<!DOCTYPE html>
<html>
    <head>
   
        <link href="Test.css" rel="stylesheet" type="text/css"/>
        <title>Medina County Auditor</title>
        <link rel="shortcut icon" href="Images/AuditorSeal.png" />
        <meta charset="UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />  
        <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css' />
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="elastislide.css" rel="stylesheet" type="text/css"/>
        
        <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
    </head>
<body style="">
       <?php include 'Header.php';?>              
        <div class="BodyContainer" >
            <?php include 'MHeader.php';?> 
            <h1 class="PageHeader">Videos</h1>
            <hr />           
                <div id="videoDiv" style="display: flex; flex-grow: 1; justify-content: space-around; flex-wrap: wrap">
                    <iframe style="margin: 5px;" width="560" height="315" src="https://www.youtube.com/embed/bNg1ANpAZuU" frameborder="0" allowfullscreen></iframe>
                <iframe style="margin: 5px;" width="420" height="315" src="https://www.youtube.com/embed/RzuJGArD1jk" frameborder="0" allowfullscreen></iframe>
                </div>
            <br />
            <h1 class="PageHeader">Pictures</h1>
            <hr />
            <div id="picDiv" style="width: 50%; margin: auto;">
                <div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								
							</div>
							<div class="es-carousel">
								<ul style="width: 1738px; display: block; margin-left: 0px;">
									<li class="selected" style="margin-right: 3px; width: 69px;"><a style="border-width: 2px;" href="#"><img src="Images/thumbs/1.jpg" data-large="Images/thumbs/1.jpg" alt="image01" data-description="From off a hill whose concave womb reworded"></a></li>
									<li style="margin-right: 3px; width: 69px;"><a style="border-width: 2px;" href="#"><img src="http://www.medinacountyauditor.org/images/2015MemorialDay/104.JPG" data-large="http://www.medinacountyauditor.org/images/2015MemorialDay/104.JPG" alt="image02" data-description="A plaintful story from a sistering vale"></a></li>
                                                                        <li style="margin-right: 3px; width: 69px;"><a style="border-width: 2px;" href="#"><img src="http://www.medinacountyauditor.org/images/2015MemorialDay/Best%20group%20shot%20(3).JPG" data-large="http://www.medinacountyauditor.org/images/2015MemorialDay/Best%20group%20shot%20(3).JPG" alt="image02" data-description="A plaintful story from a sistering vale"></a></li>
								<li style="margin-right: 3px; width: 69px;"><a style="border-width: 2px;" href="#"><img src="http://www.medinacountyauditor.org/images/2015MemorialDay/JoshCogar.JPG" data-large="http://www.medinacountyauditor.org/images/2015MemorialDay/JoshCogar.JPG" alt="image02" data-description="A plaintful story from a sistering vale"></a></li>
                                                                <li style="margin-right: 3px; width: 69px;"><a style="border-width: 2px;" href="#"><img src="http://www.medinacountyauditor.org/images/2015MemorialDay/LaneyCorell.JPG" data-large="http://www.medinacountyauditor.org/images/2015MemorialDay/LaneyCorell.JPG" alt="image02" data-description="A plaintful story from a sistering vale"></a></li>
                                                                <li style="margin-right: 3px; width: 69px;"><a style="border-width: 2px;" href="#"><img src="http://www.medinacountyauditor.org/images/2015MemorialDay/MaryWatson.JPG" data-large="http://www.medinacountyauditor.org/images/2015MemorialDay/MaryWatson.JPG" alt="image02" data-description="A plaintful story from a sistering vale"></a></li>
                                                                </ul>
							</div>
						<div class="es-nav"><span style="display: none;" class="es-nav-prev">Previous</span><span class="es-nav-next">Next</span></div></div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
                </div>
            </div>
            <aside>
                
            </aside>
        </div>
        <?php include 'Foot.html';?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
            <script src="JS/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="JS/jquery.elastislide.js" type="text/javascript"></script>
       
        <script src="JS/jquery.tmpl.min.js" type="text/javascript"></script>
        <script src="JS/gallery.js" type="text/javascript"></script>
         
</body>
</html>
