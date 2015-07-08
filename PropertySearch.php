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
        <h1 class="PageHeader">Property Search</h1>
        <hr>        
        <div class="SearchPage">
            <form action="http://www.medinacountyauditor.org/propsearch_php.php" method="post" name="propsearch" id="propsearch">
                <p style="text-align: right" class="directions" >
                    <i>Enter Last Name</i>
                </p>
                <p class="body">
                    Owner: 
                    <input style="float: right" type="text" name="Owner" class="input">
                </p>
                <p style="text-align: right" class="directions"><i>
                    Narrow search by entering<br>
                    last name (space) first name.</i>
                </p>
                <p class="body">
                    Address:
                    <input style="float: right" type="text" name="Address" class="input">
                </p>
                <p class="body">
                    Parcel Number:    
                    <input style="float: right" type="text" name="Parcel" class="input" title="Parcel numbers are 11 digits, for example: 028-19B-20-036.">
                </p>
                <p style="text-align: right" class="directions"><i>
                    Parcel numbers are 11 digits<br>
                    For Example:&nbsp;&nbsp; 028-19B-20-036</i>
                </p>
                <p class="body">
                    City:
                    <input style="float: right" type="text" name="City" class="input">
                </p>
                <p class="body">Taxing District:
                    <select class="Select" style="width: 20em" name="Tax" size="1" class="input">
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
                    </select>
                </p>
                <br/>
                <p style="text-align:center">
                    <input type="submit" value="Submit" class="buttonsub" style="width: 5em; float: none;">
                    <input type="reset" value="Reset" class="buttonres" style="width: 5em; float: none;">
                </p>
                <br/>
                <p class="tips">
                    If your search is not successful try less information.
                    Only fill in one search criterion.
                </p>
                <p class="tips"><i>
                    For information on how to use the search engines,<br>
                    please refer to <a href="searchtips.htm">Search Tips &amp; Limitations</a></i>
                </p>
                <br/>
            </form>
        </div>
    </div>
    <?php include 'Foot.html';?>      
</body>
</html>


