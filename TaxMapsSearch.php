<html>
    <head>
        <link href="Test.css" rel="stylesheet" type="text/css"/>
        <title>Medina County Auditor</title>
        <link rel="shortcut icon" href="Images/AuditorSeal.png"/>
        <meta charset="UTF-8"/>
        <link href='http://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>  
        <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'/>
    </head>
<body>
       <?php include 'Header.php';?>              
        <div class="BodyContainer" >
            <?php include 'MHeader.php';?> 
            <h1 class="PageHeader">Tax Map Search</h1>
            <hr>
            <div class="SearchPage">
            <form class="body" action="http://www.medinacountyauditor.org/taxmapssearch_php.php" method="post" name="taxmapssearch" id="taxmapssearch">
                <br/>
                <p class="body">Parcel Number:
                <input class="input" type="text" name="Parcel" title="Parcel numbers are 11 digits, for example: 028-19B-20-036."></p>
                <br/>
                <p class="body">Zoom to:
                <select class="input" name="City" size="1">
                    <option value="0" selected="selected">-Select-</option>
                    <option value="0"></option>
                    <option value="BrunsCity">Brunswick City</option>
                    <option value="MedCity">Medina City</option>
                    <option value="Rittm">Rittman City</option>
                    <option value="WadsCity">Wadsworth City</option>
                    <option value="0"></option>
                    <option value="BrunsHills">Brunswick Hills Twp.</option>
                    <option value="Chath">Chatham Twp.</option>
                    <option value="Hinck">Hinckley Twp.</option>
                    <option value="Harris">Harrisville Twp.</option>
                    <option value="Homer">Homer Twp.</option>
                    <option value="Grang">Granger Twp.</option>
                    <option value="Guil">Guilford Twp.</option>
                    <option value="Lafay">Lafayette Twp.</option>
                    <option value="Litch">Litchfield Twp.</option>
                    <option value="Liver">Liverpool Twp.</option>  		
                    <option value="Medin">Medina Twp.</option> 
                    <option value="Mont">Montville Twp.</option>
                    <option value="Sharo">Sharon Twp.</option> 
                    <option value="Spence">Spencer Twp.</option>
                    <option value="Wads">Wadsworth Twp.</option>
                    <option value="Westf">Westfield Twp.</option>
                    <option value="York">York Twp.</option>
                    <option value="0"></option>    	
                    <option value="Chipp">Chippewa Lake Vil.</option>
                    <option value="Creston">Creston Vil.</option>
                    <option value="Gloria">Gloria Glens Vil.</option>
                    <option value="Lodi">Lodi Vil.</option>       
                    <option value="Sevil">Seville Vil.</option>
                    <option value="SpencVil">Spencer Vil.</option>     
                    <option value="WestCent">Westfield Center Vil.</option>
                </select></p>
                                <br/>
                <p style="text-align: center">
                <input class="buttonsub" type="submit" value="Submit" style="width: 5em; float: none;">
                <input class="buttonres" type="reset" value="Reset" style="width: 5em; float: none;"></p>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/> 
            </form>
        </div>
    </div>
    <?php include 'Foot.html';?>      
</body>
</html>


