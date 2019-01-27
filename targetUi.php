  
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN"
"http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Teer Mela | Tir | Teer Results Online | Target: TeerCounter.com</title>
		<link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="keyword" content="teer,mela,teer result,lottery result,Forum,target,game,prediction">	
		<link href="styles/style1.css" media="all" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="images/16.ico" type="image/x-icon" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104764186-1', 'auto');
  ga('send', 'pageview');

</script>		 	
		<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '319452894894262',
      xfbml      : true,
      version    : 'v2.1'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
var submitting = false;
	function validateFormnew() {
	var round = document.forms["panel"]["selectround"].value;
	var city = document.forms["panel"]["selectcity"].value;
	var x = document.forms["panel"]["directno1"].value;
	var y = document.forms["panel"]["directno2"].value;
	var z = document.forms["panel"]["directno3"].value;
	var hno = document.forms["panel"]["houseno"].value;
	var eno = document.forms["panel"]["endingno"].value;
	var firstsh = null;
	var secondsh = null;
	var firstghy = null;
	var secondghy = null;
	//alert("You Will Not Be Given Any Points If There Is No Teer Game Held For Tommorow");
	if(round == 0)
	{
	alert("Please Select for which round you want to play");
	return false;
	}
	if(city == 0 )
	{
	alert("Please Select for which city you want to play");
	return false;
	}
	if(round != 0 )
	{
	
		if(x == "" && y == ""  && z== "" && hno== "" && eno== "")
		{
			alert("Please play for a number before proceeding");
			return false;
		}
	}
	if(firstsh =='yes'  && city == 'Teer Mela' && round == 'F/R')
	{
		alert("You Have Already Predicted your target for F/R");
		return false;
	}
	if(secondsh =='yes'  && city == 'Teer Mela' && round == 'S/R')
	{
		alert("You Have Already Predicted your target for S/R");
		return false;
	}
	if(firstghy =='yes' && city == 'Guwahati' && round == 'F/R')
	{
		alert("You Have Already Predicted your target for F/R");
		return false;
	}
	if(secondghy =='yes' && city == 'Guwahati' && round == 'S/R')
	{
		alert("You Have Already Predicted your target for S/R");
		return false;
	}
	//second Shillong ends here
	if (x > 99 || y > 99 || z > 99 )
	{
	alert ("Direct Number Should Be Between 0 to 99");
	return false;
	 }	 
	 if (hno  > 9 )
	{
	alert ("House Number Should Be Between 0 to 9");
	return false;
	} 
	if (eno > 9)
	{
	alert ("Ending Number Should Be Between 0 to 9");
	return false;
	}
	/*document.forms["panel"]["submitnew"].disabled=true;
	document.forms["panel"]["submitnew"].value="please wait";
    return true;*/
}
</script> 
    <script language="Javascript" type="text/javascript">
 
        function onlyNos(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    return false;
                }
                return true;
            }
            catch (err) {
                alert(err.Description);
            }
        }
    </script>		
	</head>
	<body>
		<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header">
					<a href="http://teerbodoland.com/index.html"><img src="images/teer.png" title ="Teer" Alt= "Teer"></a>
				</div>
			</div>
			<!---work--->
						<a href='targetgame.php'><button style='background-color :#2E5C8A;color:white;padding:0.4em;margin-top:0.2em;margin-left:3%'>HOME</button></a>							
 <a style ="float :right" href="http://teerbodoland.com/logout.php">Logout</a>
 
							 <div id="work" class="work" style="background-color:white;">													
							<div class="container" style="background-color:white;">
							<div class="head-one text-center team-head">
						
						 	<form id="panel" method="POST" action="http://teerbodoland.com/player.php" onsubmit="return validateFormnew()">
							<!--code to retrieve points of player-->
							<p style='background-color:#E1E5E5 ;color:black;font-size:20px;margin-top:0.3em;width:95%'> Point:- 0 || Rank:- NA </p>								<table class="table2"  style="background-color :#81D4BF;">
								<tr>
								<th colspan="2">TARGET PREDICTION FORM :<h2 style="color:blue">Date : 13-03-2017 (Day: Mon)</h2></th>
								</tr>
								<tr>
								<th>
								<!--<td>-->
								<select name ='selectround' style='background-color:#81D4BF;color:black;width:90%;'>
								<!--<option value='0'> ROUND</option>-->
																<option value='F/R'> First Round</option>	
								<option value='S/R'> Second Round</option>	
																</select>
								</th>
								<th>
								<!--</td>-->	
								<select name ='selectcity' style='background-color:#81D4BF;color:black;width:90%;'>
								<!--<option value='0'>CITY</option>-->
								<option value='Shillong'> Teer Mela</option>
								</select>
								</th>
								</tr>
								<!--hidden values to check if user has already played-->

								<input type="hidden" id="firstsh" name="firstsh" value="">
								<input type="hidden" id="secondsh" name="secondsh" value="">
								<input type="hidden" id="firstghy" name="firstghy" value="">
								<input type="hidden" id="secondghy" name="secondghy" value="">
							
							
								<!--DIRECT-->
								<tr style="background-color:#81D4BF;text-align:centre;"><td colspan="2">DIRECT NUMBER</td></tr>
								<tr style="text-align: center;background-color:#E8F0F0 ; color:bold black;">
								<td>DIRECT NO</td>
								<td>
								<input style="background-color:FFF;width:90%;" type="text" value="" name="directno1" placeholder="Enter Direct No." maxlength="2"onkeypress="return onlyNos(event,this);"></td>
								</tr>
								<tr style="text-align: center;background-color:#E8F0F0; color:bold black;">
								<td> DIRECT NO</td>
								<td>
								<input style="background-color:FFF;width:90%;" type="text" value="" name="directno2" placeholder="Enter Direct No." maxlength="2" onkeypress="return onlyNos(event,this);"></td>
								
								</tr>
								<tr style="text-align: center;background-color:#E8F0F0 ; color:bold black;">
								<td> DIRECT NO</td>
								<td>
								<input style="background-color:FFF;width:90%;" type="text" value="" name="directno3" placeholder="Enter Direct No." maxlength="2" onkeypress="return onlyNos(event,this);"></td>
								</tr>							
								<!--HOUSE-->
								<tr style="background-color:#81D4BF;text-align:center;"><td colspan="2">HOUSE</tr>
								<tr style="text-align: center;background-color:#E8F0F0 ; color:bold black;">
								<td>HOUSE NO</td>
								<td>
								<input style="background-color:FFF;width:90%;" type="text" value="" name="houseno" placeholder="Enter House" maxlength="1" onkeypress="return onlyNos(event,this);"></td>
								</tr>
								<!--ENDING-->
								<tr style="background-color:#81D4BF;text-align:center;"><td colspan="2">ENDING</tr>
								<tr style="text-align: center;background-color:#E8F0F0 ; color:bold black;">
								<td>ENDING NO</td>
								<td>
								<input style="background-color:FFF;width:90%;" type="text" value="" name="endingno" placeholder="Enter Ending"  maxlength="1" onkeypress="return onlyNos(event,this);"></td>
								</tr>
								<tr style="text-align: center;">
								<td colspan = "2">
								<input  type="submit" value="SUBMIT" id="submit" name="submit" style="background-color:#E1E5E5;color:black;padding:0.5em;margin-top:0.3em;">
								</td></tr>
								<tr style="text-align: center; color:bold black;">
								<td colspan = "2">Note : Facing Problems? Have Questions? : <a style="color:red" href="http://social.teercounter.com/groups/target-prediction-game-help-center/"><u>Click Here</u></a>
								</td>
								</tr>
								</table>
								</form>
								</div>
								</div>
								</div>
					<div id="work1" class="container" style="background-color:white;"></div>
					<!---works--->
					<div class="works">
							<div id="whatever">
									<div class="col-md-50 work-grid">
								    <div class="item1">
								         <a href="http://teerbodoland.com/index.html"><img src="images/teer-result.jpg" title="Home"  alt="Online Teer Result"/></a>								        
								    </div>  
							    </div> 
								<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="http://teerbodoland.com/Social"><img src="images/teercounterSocial.jpg" title="teercounterSocial" alt="TeerCounter Social Network" /></a>
								        
								    </div>  
							    </div> 
								<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="dream-numbers.php"><img src="images/teer-dream-numbers.jpg" title="Dream Number" alt="Teer Dream Numbers" /></a>							        
								    </div>  
							    </div> 
								<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="http://teerbodoland.com/win-prizes.php"><img src="images/teer-win-prizes.jpg" title="Win Prizes"  alt="TeerCounter Win Prizes" /></a>								        
								    </div>  
							    </div> 
								<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="http://teerbodoland.com/lotteries.html"><img src="http://teerbodoland.com/images/teer-forum.jpg" title="Groups" alt="TeerCounter Forum"/></a>						        
								    </div>  
							    </div> 
								<div class="col-md-50 work-grid">
								    <div class="item1">
								        <a href="common-numbers.php"><img src="images/teer-common-numbers.jpg" title="Common Number" Alt=" Teer Common Numbers" /></a>								        
								    </div>  
							    </div> 	
						</div>
			</div>
<!--anuja inserted footer-->
<div class='footer-left1'><a href='termsofuse.php'><u>Terms</u></a></div><div class='footer-center1'><a href='contact-us.php'><u>Contact Us</u></a></div><div class='footer-right1'><a href='privacypolicy.php'><u>Privacy Policy</u></a></div><!--footer ends here-->	</body>
</html>
