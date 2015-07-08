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
            <h1 class="PageHeader">Transfer Search</h1>
            <hr>
            <div class="SearchPage">
                <form class="body" action="http://www.medinacountyauditor.org/transsearch_php.php" method="post" name="transsearch" id="transsearch">
                <p class="body">
                    Year: <select style="width: 7em;" class="input" name="Year" size="1">;
                <option value="0" selected="selected">-Select-</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                </select>
                </p>
                <p class="body">
                Month: <select style="width: 7em;" class="input" name="Month" size="1">
                    <option value="0" selected="selected">-Select-</option>
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                </p>
                <p class="body">
                Transfers Over: <input class="input" type="text" name="AmountMin">
                </p>
                <p class="body">
                Transfers Under: <input class="input" type="text" name="AmountMax">
                </p>
                <br/>
                <p class="directions" style="text-align: right"><i>
                    Enter Last Name</i>
                </p>
                <p class="body">Grantor:
                <input class="input" type="text" name="Grantor" title="Seller">
                </p>
                <p style="text-align: right" class="directions"><i>
                    Narrow search by entering<br>
                    last name (space) first name.</i>
                </p>
                <br/>
                <p class="directions" style="text-align: right"><i>
                    Enter Last Name</i>
                </p>
                <p class="body">Grantee:
                <input class="input" type="text" name="Grantee" title="Buyer">
                </p>
                <p style="text-align: right" class="directions" style="margin: 0px 0px 30px 15px"><i>
                    Narrow search by entering<br>
                    last name (space) first name.</i>
                </p>
                <br/>                
                <p class="body">
                Parcel Number: <input class="input" type="text" name="Parcel" title="Parcel numbers are 11 digits, 
                for example: 028-19B-20-036.">
                                <p style="text-align: right" class="directions"><i>
                    Parcel numbers are 11 digits<br>
                    For Example:&nbsp;&nbsp; 028-19B-20-036</i>
                </p>
                <br/>
                </p>
                <p class="body">
                City: <input class="input" type="text" name="City">
                </p>
                <p class="body">
                    Taxing District: <select style="width: 20em" class="input" name="Tax" size="1">
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
                <p class="body">
                Street: <input class="input" type="text" name="Street">
                </p>
                <p class="body">
                Building: <select style="width: 7em;" class="input" name="Building" size="1">
                    <option value="0" selected="selected">-Select-</option>
                    <option value="N">Yes</option>
                    <option value="Y">No</option>
                </select>
                </p>
                <p class="body">
                Valid Sale: <select style="width: 7em;" class="input" name="Valid" size="1">
                    <option value="0" selected="selected">-Select-</option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
                </p>
                <p class="body">
                DTE Code: <select style="width: 20em" class="input" name="DTE" size="1">
                    <option value="" selected="selected">-Select-</option>
                    <option value="">AGRICULTURAL</option>
                    <option value="100">100 - Agricultural Vacant Land</option>
                    <option value="101">101 - Grain or General Farm</option>
                    <option value="102">102 - Livestock Farms</option>
                    <option value="103">103 - Dairy Farms</option>
                    <option value="104">104 - Poultry Farms</option>
                    <option value="105">105 - Fruit and Nut Farms</option>
                    <option value="106">106 - Vegetable Farms</option>
                    <option value="107">107 - Tobacco Farms</option>
                    <option value="108">108 - Nurseries</option>
                    <option value="109">109 - Greenhouses</option>
                    <option value="110">110 - Ag Vacant Land - CAUV</option>
                    <option value="111">111 - Grain or General Farm - CAUV</option>
                    <option value="112">112 - Livestock Farms - CAUV</option>
                    <option value="113">113 - Dairy Farms - CAUV</option>
                    <option value="114">114 - Poulty Farms - CAUV</option>
                    <option value="115">115 - Fruit and Nut Farms - CAUV</option>
                    <option value="116">116 - Vegetable Farms - CAUV</option>
                    <option value="117">117 - Tobacco Farms - CAUV</option>
                    <option value="120">120 - Timber</option>
                    <option value="121">121 - Timber (non-commercial) - CAUV</option>
                    <option value="122">122 - Timber (commercial) - CAUV</option>
                    <option value="123">123 - Forestland (FLTP) - prior to 1994</option>
                    <option value="124">124 - Forestland (FLTP) - 1994 or later</option>        
                    <option value="190">190 - Other Agricultural Use</option>
                    <option value="199">199 - Other Agricultural Use - CAUV</option>
                    <option value="">MINERAL</option>
                    <option value="210">210 - Coal Lands - Surface and Rights</option>
                    <option value="220">220 - Coal Rights - Working Interest</option>
                    <option value="230">230 - Coal Rights - Separate Royalty Interest</option>
                    <option value="240">240 - Oil &amp; Gas Rights - Working Interest</option>        
                    <option value="250">250 - Oil &amp; Gas Rights - Separate Royalty Interest</option>
                    <option value="260">260 - Other Minerals</option>           
                    <option value="">INDUSTRIAL</option>
                    <option value="300">300 - Industrial Vacant Land</option>
                    <option value="310">310 - Food and Drink Plants</option>
                    <option value="320">320 - Foundries/Heavy Mfg</option>
                    <option value="330">330 - Medium Mfg and Assembly</option>
                    <option value="340">340 - Light Mfg and Assembly</option>
                    <option value="350">350 - Industrial Warehouse</option>
                    <option value="360">360 - Truck Terminals</option>
                    <option value="370">370 - Small Shops</option>
                    <option value="380">380 - Mines and Quarries</option>
                    <option value="390">390 - Grain Elevators</option>
                    <option value="399">399 - Other Industrial Structures</option>
                    <option value="">COMMERCIAL</option>
                    <option value="400">400 - Commercial Vacant Land</option>
                    <option value="401">401 - Apartments - 1 to 19 Units</option>
                    <option value="402">402 - Apartments - 20 to 39 Units</option>
                    <option value="403">403 - Apartments - 39+ Units</option>
                    <option value="410">410 - Motels</option>
                    <option value="411">411 - Hotels</option>
                    <option value="412">412 - Nursing Homes</option>
                    <option value="415">415 - Trailer or Mobile Home Park</option>
                    <option value="416">416 - Camp Grounds</option>
                    <option value="419">419 - Other Commercial Housing</option>
                    <option value="420">420 - Small Retail Stores</option>
                    <option value="421">421 - Supermarkets</option>
                    <option value="422">422 - Small Department Stores</option>
                    <option value="424">424 - Full Department Stores</option>
                    <option value="425">425 - Neighborhood Shopping Center</option> 
                    <option value="426">426 - Community Shopping Center</option>
                    <option value="427">427 - Regional Shopping Center</option>
                    <option value="429">429 - Other Retail Structures</option>
                    <option value="430">430 - Restaurant/Bar</option>
                    <option value="435">435 - Drive-In Restaurant</option>
                    <option value="439">439 - Other Food Service Structures</option>
                    <option value="440">440 - Dry Cleaning</option>
                    <option value="441">441 - Funeral Homes</option>
                    <option value="442">442 - Medical Offices</option>
                    <option value="444">444 - Full Service Banks</option>
                    <option value="445">445 - Savings and Loans</option>
                    <option value="447">447 - Offices, 1-2 Stories</option>
                    <option value="448">448 - Offices, &gt;2 Stories Walk-Up</option>
                    <option value="449">449 - Offices, &gt; 2 Stories Elevator</option>
                    <option value="450">450 - Office Condominiums</option>        
                    <option value="452">452 - Auto Service Station</option>
                    <option value="453">453 - Car Washes</option>
                    <option value="454">454 - Auto Sales and Service</option>
                    <option value="455">455 - Commercial Garages</option>
                    <option value="456">456 - Parking Garage, Structures, Lots</option>
                    <option value="460">460 - Theaters</option>
                    <option value="461">461 - Drive-In Theaters</option>
                    <option value="462">462 - Golf Ranges and Miniature Golf</option>
                    <option value="463">463 - Golf Courses</option>
                    <option value="464">464 - Bowling Alleys</option>
                    <option value="465">465 - Lodge Hall/Amusement&nbsp;Parks</option>
                    <option value="480">480 - Warehouses</option>
                    <option value="482">482 - Truck Terminals</option>
                    <option value="490">490 - Marine Service</option>
                    <option value="496">496 - Marina (Small Boat)</option>        
                    <option value="499">499 - Other Commercial Structures</option>      
                    <option value="">RESIDENTIAL</option>
                    <option value="500">500 - Residential Vacant Land</option>
                    <option value="501">501 - Residential Unplatted 0-9.9 Acres</option>
                    <option value="502">502 - Residential Unplatted 10-19.9 Acres</option>
                    <option value="503">503 - Residential Unplatted 20-29.9 Acres</option>
                    <option value="504">504 - Residential Unplatted 30-39.9 Acres</option>
                    <option value="505">505 - Residential Unplatted 40+ Acres</option>
                    <option value="510">510 - Single Family Dwelling</option>
                    <option value="511">511 - Single Family Unplatted 0-9.9 Acres</option>
                    <option value="512">512 - Single Family Unplatted 10-19.9 Acres</option>
                    <option value="513">513 - Single Family Unplatted 20-29.9 Acres</option>
                    <option value="514">514 - Single Family Unplatted 30-39.9 Acres</option>
                    <option value="515">515 - Single Family Unplatted 40+ Acres</option>
                    <option value="520">520 - Two Family Dwelling</option>
                    <option value="521">521 - Two Family Unplatted 0-9.9 Acres</option>        
                    <option value="522">522 - Two Family Unplatted 10-19.9 Acres</option>
                    <option value="523">523 - Two Family Unplatted 20-29.9 Acres</option>
                    <option value="524">524 - Two Family Unplatted 30-39.9 Acres</option>
                    <option value="525">525 - Two Family Unplatted 40+ Acres</option>
                    <option value="530">530 - Three Family Dwelling</option>
                    <option value="531">531 - Three Family Unplatted 0-9.9 Acres</option>
                    <option value="532">532 - Three Family Unplatted 10-19.9 Acres</option>
                    <option value="533">533 - Three Family Unplatted 20-29.9 Acres</option>
                    <option value="534">534 - Three Family Unplatted 30-39.9 Acres</option>
                    <option value="535">535 - Three Family Unplatted 40+ Acres</option>
                    <option value="540">540 - Four Family Dwelling</option>
                    <option value="550">550 - Condominium Residential Unit</option>
                    <option value="560">560 - Manufactured Homes</option>
                    <option value="599">599 - Other Residential Structures</option>
                            <option value="">EXEMPT</option>
                    <option value="600">600 - Owned by United States of America</option>
                    <option value="610">610 - Owned by State of Ohio</option>
                    <option value="611">611 - Freeway</option>
                    <option value="620">620 - Owned by Counties</option>
                    <option value="630">630 - Owned by Townships</option>
                    <option value="640">640 - Owned by Municipalities</option>
                    <option value="645">645 - Metropolitan Housing Authorities</option>
                    <option value="650">650 - Owned by Board of Education</option>
                    <option value="660">660 - Owned by Park District</option>
                    <option value="670">670 - Owned by Colleges, Academies</option>
                    <option value="680">680 - Charitable Exemptions - Hospitals, etc.</option>
                    <option value="685">685 - Churches, Public Worship</option>
                    <option value="690">690 - Graveyards, Monuments, and Cemeteries</option>
                </select>
                </p>
                <p class="body" style="text-align: center">
                <input class="buttonsub" type="submit" value="Submit" style="width: 5em; float: none;">
                <input class="buttonres" type="reset" value="Reset" style="width: 5em; float: none;">
                </p>
            </form>
            </div>
        </div>
    <?php include 'Foot.html';?>      
</body>
</html>


