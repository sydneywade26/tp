<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TravelPak Home Feed</title>
<link href="travel-pak-home-feed.css" rel="stylesheet" type="text/css">

<script src="jquery-3.2.1.min.js"></script>
<script src="travel-pak.js"></script>

<script src="https://use.typekit.net/jzb6src.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body>
<div class="container">
<!---- HEADER ---->
<div class="header clear"> 
	<table class="centered">
	<tr>
    <td id="logo-centered"><img id="tp" src="website assets/images/samplelogo2.png" height="30px" alt="TP"/></td>
    </tr>
    </table>
</div>

<!---- BODY ----->
<div id="body-table" class="clear">
	<div id="td-sidebar">
    	<!---INSERT PHP HERE --->
        <p class="tk-futura-pt text"> Sydney </p>
        <div class="profile-img">
        	<img id="profile-border" src="website assets/images/profile-border.png" height="150px"/>
        	<img id="hover-profile-border" class="hide" src="website assets/images/hover-prof.png" height="150px"/>
        </div>
        <!---INSERT PHP HERE--->
        <p class="tk-futura-pt text"> Atlanta, GA </p>
        <p class="tk-futura-pt text"> Last place visited: Bangkok, Thailand </p>
                
        <div class="sidebar-button" id="explore-button">
        	<a href=""><img class="button" src="website assets/icons/explore-button.png" alt="explore"/></a>
        </div>
        
        <div class="sidebar-button" id="trips-button">
        	<a href=""><img class="button" src="website assets/icons/my-trips-button.png" alt="my trips"/></a>
        </div>
        
 	</div>
    
    <div class="container">        
    	<div id="td-feed">
    		<div class="box">
            	<div class="prof-pic">
                	<!----INSERT PHP HERE------>
                	<img src=""/>
                </div>
                <div class="update-text">
                	<p class="update-p"> Just got back from Paris! Such a beautiful city! Pics to come later!</p>
                </div>
                <div class="update-location">
                	<!----INSERT PHP HERE----->
                	<p class="update-loc-p"> New Haven, CT </p>
                </div>
                <div class="update-date">
                	<!----INSERT PHP HERE----->
                    <p class="update-date-p"> May 26, 2017</p>
                    <p class="update-date-p"> 9:42 pm </p> 
                </div>
            </div>
    	</div>
    </div>
        
</div>
</div>
</body>
</html>