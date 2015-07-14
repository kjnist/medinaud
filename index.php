<html>
<head>
    <link href="Test.css" rel="stylesheet" type="text/css"/>
    <title>Medina County Auditor</title>
    <link rel="shortcut icon" href="Images/AuditorSeal.png" />
    <meta charset="UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>  
    <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <script src="JS.js" type="text/javascript"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://apis.google.com/js/platform.js"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</head>
<body>
       <?php include 'Header.php';?>              
        <div class="BodyContainer" >
            <?php include 'MHeader.php';?> 
            <section>
                <div class="PropertyForm" style="padding:4px;">
                    <form  action="http://www.medinacountyauditor.org/propsearch_php.php" method="post" name="propsearch" id="propsearch">
                        <h3 style="text-align: center; font-weight: normal">Property Search</h3>                
                        <p style="text-align: right" class="directions" style="margin: 0px 0px 0px 15px"><i>
                                <font font-family="Open Sans" size="2" color="#000000">Enter Last Name</font></i></p>  
                        <p class="body"><font font-family="Open Sans" size="2">Owner: 
                            <input style="float: right" type="text" name="Owner" class="input"></font></p>    
                        <p style="text-align: right" class="directions" style="margin: 0px 0px 30px 15px"><i>
                                <font font-family="Open Sans" size="2" color="#000000">Narrow search by entering<br>
                                last name (space) first name.</font></i></p>  
                        <p class="body"><font font-family="Open Sans" size="2">Address:
                            <input style="float: right" type="text" name="Address" class="input"></font></p>   
                        <p class="body"><font font-family="Open Sans" size="2">Parcel Number:    
                            <input style="float: right" type="text" name="Parcel" class="input" title="Parcel numbers are 11 digits, 
                                   for example: 028-19B-20-036."></font></p>    
                        <p class="body"><font font-family="Open Sans" size="2">City:
                            <input style="float: right" type="text" name="City" class="input"></font></p>
                        <p class="body" style="width: 100%"><font font-family="Open Sans" size="2">Taxing District:
                            <select style="width: 17em; float: right;" name="Tax" size="1" class="input">
                                <option value="0" selected="selected">-Select-</option>
                                <option value="001">001 - Brunswick Hills (Brunswick City SD)</option>
                                <option value="002">002 - Brunswick Hills (Highland LSD)</option>
                                <option value="003">003 - Brunswick City (Brunswick City SD)</option>
                                <option value="004">004 - Chatham (Cloverleaf LSD)</option>
                                <option value="005">005 - Granger (Highland LSD)</option>
                                <option value="007">007 - Granger (Medina City SD)</option>
                                <option value="008">008 - Guilford (Cloverleaf LSD)</option>
                                <option value="009">009 - Guilford (Wadsworth City SD)</option>
                                <option value="010">010 - Rittman (Rittman City SD)</option>
                                <option value="011">011 - Rittman (Cloverleaf LSD)</option>
                                <option value="012">012 - Seville (Cloverleaf LSD)</option>
                                <option value="013">013 - Harrisville (Cloverleaf LSD)</option>
                                <option value="014">014 - Harrisville (North Central LSD)</option>
                                <option value="015">015 - Lodi (Cloverleaf LSD)</option>
                                <option value="016">016 - Hinckley (Highland LSD)</option>
                                <option value="017">017 - Hinckley (Brunswick City SD)</option>
                                <option value="019">019 - Homer (Black River LSD)</option>
                                <option value="020">020 - Lafayette (Cloverleaf LSD)</option>
                                <option value="021">021 - Lafayette (Medina City SD)</option>
                                <option value="024">024 - Litchfield (Buckeye LSD)</option>
                                <option value="025">025 - Liverpool (Buckeye LSD)</option>
                                <option value="026">026 - Medina Twp. (Medina City SD)</option>
                                <option value="027">027 - Medina Twp. (Highland LSD)</option>
                                <option value="028">028 - Medina City (Medina City SD)</option>
                                <option value="029">029 - Medina City (Buckeye LSD)</option>
                                <option value="030">030 - Montville (Medina City SD)</option>
                                <option value="031">031 - Montville (Highland LSD)</option>
                                <option value="032">032 - Montville Twp. (Wadsworth City SD)</option>
                                <option value="033">033 - Sharon Twp. (Highland LSD)</option>
                                <option value="034">034 - Sharon Twp. (Medina City SD)</option>
                                <option value="035">035 - Sharon Twp. (Wadsworth City SD)</option>
                                <option value="036">036 - Spencer Twp. (Black River LSD)</option>
                                <option value="037">037 - Spencer Village (Black River LSD)</option>
                                <option value="038">038 - Wadsworth Twp. (Wadsworth City SD)</option>
                                <option value="039">039 - Wadsworth Twp. (Rittman City SD)</option>
                                <option value="040">040 - Wadsworth City (Wadsworth City SD)</option>
                                <option value="041">041 - Westfield Twp. (Cloverleaf LSD)</option>
                                <option value="042">042 - Westfield Twp. (North Central LSD)</option>
                                <option value="043">043 - Gloria Glens (Cloverleaf LSD)</option>
                                <option value="044">044 - Westfield Center (Cloverleaf LSD)</option>
                                <option value="045">045 - York (Buckeye LSD)</option>
                                <option value="046">046 - Medina City (Cloverleaf LSD)</option>
                                <option value="047">047 - Creston Village (North Central LSD)</option>
                                <option value="048">048 - Chippewa Lake (Cloverleaf LSD)</option>
                                <option value="049">049 - Wadsworth City (Highland LSD)</option>
                                <option value="050">050 - Medina City / York Twp. (Buckeye LSD)</option>
                                <option value="051">051 - Seville Village / Guilford Twp. (Cloverleaf LSD)</option>
                                <option value="052">052 - Seville Village / Westfield Twp. (Cloverleaf LSD)</option>
                                <option value="053">053 - Medina City / Lafayette Twp. (Medina City SD)</option>
                                <option value="054">054 - Creston Village / Westfield Twp. (North Central LSD)</option>
                                <option value="055">055 - Wadsworth City / Wadsworth Twp. (Wadsworth City SD)</option>
                            </select></font></p>
                        <p style="text-align: center;">
                            <input type="submit" value="Submit" class="buttonsub">
                            <input type="reset" value="Reset" class="buttonres"></p>  
                        <p class="tips">
                            If your search is 
                            not successful try less information. Only fill in one search criterion.                             
                        </p> 
                        <p class="tips">
                            <i>For information 
                            on how to use the search engines, 
                            <br>please refer to <a href="searchtips.htm">Search Tips &amp; Limitations</a>.</i>
                        </p>
                    </form>      
                </div> 
                <div class="PropertyForm" style="padding:4px; margin-top: 30px;">
                <form class="body" action="http://www.medinacountyauditor.org/taxestimator_php.php" method="post" name="taxestimator" id="taxestimator">
                    <h3 style="text-align: center; font-weight: normal">Calculate 2014/2015 Real Estate Taxes</h3>
                    <p class="body"><font font-family="Open Sans" size="2">Taxing District:
                        <select class="input" name="taxdist" size="1" style="width: 17em; float: right;">
                        <option value="0" selected="selected">-Select-</option>
                        <option value="001">001 BRUNSWICK HILLS TWP-B CSD</option>
                        <option value="002">002 BRUNSWICK HILLS TWP-HIG LSD</option>
                        <option value="003">003 BRUNSWICK CITY-BRUNSWICK CSD</option>
                        <option value="004">004 CHATHAM TWP-CLOVERLEAF LSD</option>
                        <option value="005">005 GRANGER TWP-HIGHLAND LSD</option>
                        <option value="007">007 GRANGER TWP-MEDINA CSD</option>
                        <option value="008">008 GUILFORD TWP-CLOVERLEAF LSD</option>
                        <option value="009">009 GUILFORD TWP-WADSWORTH CSD</option>
                        <option value="010">010 RITTMAN CITY-RITTMAN CSD</option>
                        <option value="011">011 RITTMAN CITY-CLOVERLEAF LSD</option>
                        <option value="012">012 SEVILLE VIL-CLOVERLEAF LSD</option>
                        <option value="013">013 HARRISVILLE TWP-CLOVERLEAF LSD</option>
                        <option value="014">014 HARRISVILLE TWP-NORTH CENTRAL LSD</option>
                        <option value="015">015 LODI VIL-CLOVERLEAF LSD</option>
                        <option value="016">016 HINCKLEY TWP-HIGHLAND LSD</option>
                        <option value="017">017 HINCKLEY TWP-BRUNSWICK CSD</option>
                        <option value="019">019 HOMER TWP-BLACK RIVER LSD</option>
                        <option value="020">020 LAFAYETTE TWP-CLOVERLEAF LSD</option>
                        <option value="021">021 LAFAYETTE TWP-MEDINA CSD</option>
                        <option value="024">024 LITCHFIELD TWP-BUCKEYE LSD</option>
                        <option value="025">025 LIVERPOOL TWP-BUCKEYE LSD</option>
                        <option value="026">026 MEDINA TWP-MEDINA CSD</option>
                        <option value="027">027 MEDINA TWP-HIGHLAND LSD</option>       
                        <option value="028">028 MEDINA CITY-MEDINA CSD</option>
                        <option value="029">029 MEDINA CITY-BUCKEYE LSD</option>
                        <option value="030">030 MONTVILLE TWP-MEDINA CSD</option>
                        <option value="031">031 MONTVILLE TWP-HIGHLAND LSD</option>
                        <option value="032">032 MONTVILLE TWP-WADSWORTH CSD</option>
                        <option value="033">033 SHARON TWP-HIGHLAND LSD</option>      
                        <option value="034">034 SHARON TWP-MEDINA CSD</option>       
                        <option value="035">035 SHARON TWP-WADSWORTH CSD</option>
                        <option value="036">036 SPENCER TWP-BLACK RIVER LSD</option>
                        <option value="037">037 SPENCER VIL-BLACK RIVER LSD</option>
                        <option value="038">038 WADSWORTH TWP-WADSWORTH CSD</option>
                        <option value="039">039 WADSWORTH TWP-RITTMAN CSD</option>
                        <option value="040">040 WADSWORTH CITY-WADSWORTH CSD</option>
                        <option value="041">041 WESTFIELD TWP-CLOVERLEAF LSD</option>
                        <option value="042">042 WESTFIELD TWP-NORTH CENTRAL LSD</option>
                        <option value="043">043 GLORIA GLENS PARK V/CLVRLF LSD</option>
                        <option value="044">044 WESTFIELD CENTER V/CLVRLF LSD</option>
                        <option value="045">045 YORK TWP-BUCKEYE LSD</option>
                        <option value="046">046 MEDINA CITY-CLOVERLEAF LSD</option>
                        <option value="047">047 CRESTON CORP-NORTH CENTRAL LSD</option>
                        <option value="048">048 CHIPPEWA LAKE VILL-CLOVERLEAF LSD</option>
                        <option value="049">049 WADSWORTH CITY-HIGHLAND LSD</option>
                        <option value="050">050 YORK TWP-MEDINA CITY-BUCKEYE LSD</option>
                        <option value="051">051 GUILFORD TWP-SEVILLE V-CLOVRLF LSD</option>
                        <option value="052">052 WESTFIELD TWP-SEVILLE V-CLVRLF LSD</option>
                        <option value="053">053 LAFYTE TWP-MEDINA CITY-MEDINA CSD</option>
                        <option value="054">054 WSTFLD TWP-CRSTN CORP-NORTH CENTRAL LSD</option>
                        <option value="055">055 WADS TWP-WADSWORTH CITY-WADSWORTH CSD</option> 
                    </select></font></p> 
                    <p class="body"><font font-family="Open Sans" size="2">Property Value:
                        <input style="float: right; width: 13em;" class="input" type="text" name="amount"></font></p>
                    <p class="body"><font ffont-family="Open Sans" size="2">Is Parcel 
                        Residential/Agricultural? 
                        <input class="buttons" type="radio" name="type" value="res" checked=""></font></p>
                    <p class="body"><font font-family="Open Sans" size="2">Is Parcel Commercial/Other?
                        <input class="buttons"  type="radio" name="type" value="comm"></font></p> 
                    <p class="body"><font font-family="Open Sans" size="2">Is Parcel Owner Occupied?
                        <input class="buttons" type="checkbox" name="owner" value="own"></font></p>
                    <p style="text-align: center">
                        <input class="buttonsub" type="submit" value="Submit">
                        <input class="buttonres" type="reset" value="Reset"></p>
                </form>
                <p style="font-size: .7em">
                    <b>Legal Disclaimer: </b>Public information data is furnished by the
                    Medina County Auditor's Office, and must be accepted and used by the
                    recipient with the understanding that the Medina County Auditor's
                    Office makes no warranties, expressed or implied, concerning the 
                    accuracy, completeness, reliability, or suitability of this data.
                    Furthermore, the Medina County Auditor's Office assumes no liability
                    whatsoever associated with the use or misuse of such data.
                </p></div> 
            </section>
            <aside>              
                <img src="Images/westsidestory.png" class="FrontPage">             
            </aside>      
            <section class="right">
                <div class="BoxAttention" style="padding:5px;">
                    <img src="Images/AuditorSeal.png" alt="" id="Attention" />
                    <p>
                        2nd Half Tax bills have been mailed by the treasurer’s office.<br>
                        Due date is Friday, July 10th.
                    </p>
                </div>
                <div class="BoxRight">
                    <h3>
                        Quick Links
                    </h3> 
                    <p>
                        <a href="IntheNews.php"><img src="Images/Untitled-1.svg" /></a>
                        <br>
                        <br><a href="#"><img src="Images/MemorialButton.svg" /></a>
                    </p>
                </div>
                <div class="BoxRight">
                    <h3>
                        Social Media 
                    </h3> 
                    <a href="Email.php"><img src="Images/Social/email.png" class="Social" alt="" /></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCunLjJkRxiXthFyMbsf0Y9g"><img src="Images/Social/Youtube.png" class="Social" alt="" /></a>
                    <a target="_blank" href="https://www.facebook.com/pages/Medina-County-Auditors-Office/195501610486707"><img src="Images/Social/Facebook.png" class="Social" alt=""/></a>
                    <p class="Social_Buttton"><a class="twitter-follow-button" href="https://twitter.com/MedinaAuditor" data-show-screen-name="false">Follow @MedinaAuditor</a></p>                  
                </div>
            </section>
        </div>
    <?php include 'Foot.html';?>      
</body>
</html>