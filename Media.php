<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        <?php include 'Header.html';?>        
        <div class="BodyContainer" >
            <input type="checkbox" name="vehicle" value="Address 1" />
            <header>               
                <div class="banner2"><img src="Images/NewSiteBanner2Small.png" alt="" style="display: inline; width: 100%; margin: 0px;"/>     
                </div> 
                 <div class="Mwrapper">
                    <nav class="MNavBar ">
                        <label for="show-menu" class="show-menu">Menu</label>
                        <input type="checkbox" id="show-menu" role="button">                
                        <ul id="menu">
                            <li><a class="Home" href="Index.html">Home</a></li>
                            <li><a href="#" class="">Real Estate</a>
                                <ul class="hidden" >
                                    <li><a href="#" class="">Property Search</a></li>
                                    <li><a href="#" class="">MH Search</a></li>
                                    <li><a href="#" class="">Transfers</a></li>
                                    <li><a href="#" class="">Splits</a></li>
                                    <li><a href="#" class="">Destruction Of Property</a></li>
                                    <li><a href="#" class="">Special Assessment</a></li>
                                    <li><a href="#" class="">Search Special Assets</a></li>
                                    <li><a href="#" class="">Search Tax Maps</a></li>
                                    <li><a href="#" class="">Conveyance Fee Calculator</a></li>
                                    <li><a href="#" class="">Board of Revision</a></li>
                                    <li><a href="#" class="">Transferring Property</a></li>
                                    <li><a href="#" class="">Download Data</a></li>
                                </ul>
                            </li>            
                            <li><a href="#" class="">Tax Info</a>
                                <ul class="hidden" >
                                    <li><a href="#" class="">CAUV</a></li>
                                    <li><a href="#" class="">Homestead</a></li>
                                    <li><a href="#" class="">Owner Occup.</a></li>
                                    <li><a href="#" class="">Forestry</a></li>
                                    <li><a href="#" class="">HT Compute Tax Bill</a></li>
                                    <li><a href="#" class="">Tax Estimator</a></li>
                                    <li><a href="#" class="">New Millage</a></li>
                                    <li><a href="#" class="">Tax Settlement</a></li>
                                    <li><a href="#" class="">Delinquent</a></li>
                                </ul>
                            </li>            
                            <li><a href="#" class="">Dog License</a>
                                <ul class="hidden">                            
                                    <li><a href="#" class="">Purchase Dog licenses </a></li>
                                    <li><a href="#" class="">Licensing Locations</a> </li>
                                    <li><a href="#" class="">Lost Pet Board</a> </li>
                                    <li><a href="#" class="">Report Lost Pet</a></li>
                                    <li><a href="#" class="">Dog License Brochure</a></li>
                                    <li><a href="#" class="">Animal Shelter</a></li>
                                    <li><a href="#" class="">Kitten Krazy</a></li>
                                    <li><a href="#" class="">Save Ohio Strays</a></li>
                                    <li><a href="#" class="">SPCA</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="">Financial Transparency</a>
                                <ul class="hidden">
                                    <li><a href="#" class="">County Budget</a></li>
                                    <li><a href="#" class="">Current Quarter Budget</a></li>
                                    <li><a href="#" class="">CAFR</a></li>
                                    <li><a href="#" class="">Weekly Expense </a></li>
                                    <li><a href="#" class="">PAFR</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="" >Weights & Measures</a>
                                <ul class="hidden">
                                    <li><a href="#" class="">Contact</a></li>
                                    <li><a href="#" class="">Consumer Information</a></li>
                                    <li><a href="#" class="">Tips</a></li>
                                    <li><a href="#" class="">Pass/Fail</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="" >Community Outreach</a>
                                <ul class="hidden">
                                    <li><a href="IntheNews.html" class="">Auditor's Office in the News</a></li>
                                    <li><a href="#" class="">About The Auditor</a></li>
                                    <li><a href="#" class="">Weekly Stats Report</a></li>
                                    <li><a href="#" class="">Auditor Ledger</a></li>
                                    <li><a href="#" class="">Photo Gallery</a></li>
                                    <li><a href="#" class="">SOM</a></li>
                                    <li><a href="#" class="">Duties & Responsibility</a></li>
                                    <li><a href="#" class="">Brochures</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="" >Additional Services</a>
                                <ul class="hidden">
                                    <li><a href="#" class="">Seniors</a></li>
                                    <li><a href="#" class="">Vendors Licenses</a></li>
                                    <li><a href="#" class="">Sheriff Sales</a></li>
                                    <li><a href="#" class="">County Unclaim</a></li>
                                    <li><a href="#" class="">State Unclaim</a></li>
                                    <li><a href="#" class="">Online Services</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>    
                </div>
            </header>
            <h1 style="margin: 15px;text-align: center">Videos</h1>
            <hr />
            
                <div id="videoDiv" style="display: flex; flex-grow: 1; justify-content: space-around; flex-wrap: wrap">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bNg1ANpAZuU" frameborder="0" allowfullscreen></iframe>
                <iframe width="420" height="315" src="https://www.youtube.com/embed/RzuJGArD1jk" frameborder="0" allowfullscreen></iframe>
                </div>
            <h1 style="margin: 15px;text-align: center">Pictures</h1>
            <hr />
            <div id="picDiv" style="width: 50%;">
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
        <div class="wrapperFoot">
            <nav class="Footer">
                <ul>
                    <li><a href="Contact.html">Contact Us</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Employment</a></li>
                    <li><a href="#">Forms</a></li>
                    <li><a href="#">Legal/Bid</a></li>
                    <li><a href="#">Accessibility</a></li>
                    <li><a href="#">Ohio Auditors</a></li>
                </ul>
            </nav>
            <br>
            <br>
            <br>
            <div class="Quotes">
                <hr class="hr">
            <h2>                
                "Proudly serving the residents of Medina County"
            </h2>
<!--        <p style="color: #666666; float: right; font-size: .7em;margin-right: 10px;">&copy; Copyright of Medina County Auditor's Office</p>-->
            </div>
        </div> 
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
            <script src="JS/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="JS/jquery.elastislide.js" type="text/javascript"></script>
       
        <script src="JS/jquery.tmpl.min.js" type="text/javascript"></script>
        <script src="JS/gallery.js" type="text/javascript"></script>
         
</body>
</html>
