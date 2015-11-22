<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
} else if(isset($_POST['submitted']))
{
   if($fgmembersite->BroadcastMessage())
   {
        $fgmembersite->RedirectToURL("broadcast-sent.html");
   }
}
?>
<?php include 'php-calendar/calendar.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home > Comunity Connect</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<body>
<div id='fg_membersite_content'>
<div >
	<p class="logo">Zote Web Management</p>
</div>
<ul>
<li class="menuBar" id="connect">
	<a href="">Connect</a>
</li>
<li class="menuBar">
	<a href="channel-list.php">Channel List</a>
</li>
<li class="menuBar">
	<a href="subscriber-list.php">Subscriber List</a>
</li>
<li class="menuBar">
	<a href="add-subscriber.php">Add Subscriber</a>
</li>
<li class="menuBar">
	<a href="trends.php">Trends</a>
</li>
</ul>
<div class="clear"></div>
<div class="mainContent">
	<div class="connect-left">
		<div class="message-div">
		<form id='broadcast' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<input type='hidden' name='hashtag' id='hashtag' value='#kisii'/>
			<b>Broadcast A Message</b><br/>
			<textarea form="broadcast" name="messageText" id="messageText" class="message-text-field" rows="5" placeholder="Enter your message here"></textarea><br/>
			<span style="float:left">Channels</span><span style="float:right"><button type='submit'>Send Now</button><button type="button">Schedule</button></span><br/>
			<a href="">#kisii</a><br />
			People<br/>
			<a href="">@Oksy</a>, <a href="">@user1</a>, <a href="">@pregnantMother</a>
		</form>
		</div>
		<div class="cal-div">
			<?php
				echo draw_calendar(11,2015);
			?>
		</div>
		<div class="clear"></div>
		<div class="hub-channel-list">
		    <ul class="hub-list">
		        <li class="connect-list-item"><a href="">#infection</a></li>
		        <li class="connect-list-item"><a href="">#pregnancy</a></li>
		        <li class="connect-list-item"><a href="">#diabetes</a></li>
		        <li class="connect-list-item"><a href="">#malaria</a></li>
		        <li class="connect-list-item"><a href="">#maasai</a></li>
		        <li class="connect-list-item"><a href="">#accidents</a></li>
		        <li class="connect-list-item"><a href="">#pneumonia</a></li>
		        <li class="connect-list-item"><a href="">#kisii</a></li>
		        <li class="connect-list-item"><a href="">#expectantMothers</a></li>
		        <li class="connect-list-item"><a href="">#newMothers</a></li>
		        <li class="connect-list-item"><a href="">#kipsigis</a></li>
		        <li class="connect-list-item"><a href="">#cholera</a></li>
		        <li class="connect-list-item"><a href="">#cleanWater</a></li>
		        <li class="connect-list-item"><a href="">#safeSex</a></li>
		        <li class="connect-list-item"><a href="">#HIV</a></li>
		        <li class="connect-list-item"><a href="">#childHealth</a></li>
		        <li class="connect-list-item"><a href="">#Tuberculosis</a></li>
		    </ul>
		</div>
		<div class="hub-subscriber-list">
		    <ul class="hub-list">
		        <li class="connect-list-item"><a href="">@expectantMother</a></li>
		        <li class="connect-list-item"><a href="">@kevin</a></li>
		        <li class="connect-list-item"><a href="">@Oksana</a></li>
		        <li class="connect-list-item"><a href="">@Andrew</a></li>
		        <li class="connect-list-item"><a href="">@Arya</a></li>
		        <li class="connect-list-item"><a href="">@Vinitra</a></li>
		        <li class="connect-list-item"><a href="">@user3</a></li>
		        <li class="connect-list-item"><a href="">@johnny</a></li>
		        <li class="connect-list-item"><a href="">@toto</a></li>
		        <li class="connect-list-item"><a href="">@silva</a></li>
		        <li class="connect-list-item"><a href="">@user2</a></li>
		        <li class="connect-list-item"><a href="">@newMother</a></li>
		        <li class="connect-list-item"><a href="">@diabeticPatient</a></li>
		    </ul>
		</div>
	</div>
	<div class="connect-right">
		<b>Recent Broadcasts</b>
		<div class="broadcast-list">
			<ul class="hub-list">
				<li class="broadcast-list-item">
					<a href="">#kisii</a> There will be a water filter workshop in your community next week. Don’t forget to sign up.<br/>
					<span class="date-text">2015-11-21 11:25:58</span>
				</li>
				<li class="broadcast-list-item">
					<a href="">#diabetes</a> There are two major forms of diabetes. Type 1 diabetes is characterized by a lack of insulin production; the cause is unknown and it cannot be prevented. Type 2 diabetes is far more common, accounting for about 90% of all diabetes worldwide. Often preventable, it results from the body's ineffective use of insulin.<br/>
					<span class="date-text">2015-11-20 17:32:45</span>
				</li>
				<li class="broadcast-list-item">
					<a href="">#magonjwayakupumua </a> Zuia matatizo ya pumzi kwa kuruhusu hewa safi wakati wa matumizi ya meko ya gesi. Waweza fanya hivi kwa kuwacha milango na madirisha wazi karibu na eneo ya upishi<br/>
					<span class="date-text">2015-11-20 15:52:09</span>
				</li>
				<li class="broadcast-list-item">
					<a href="">#HIV</a>Although garlic may help strengthen the immune system, garlic supplements also interact with several anti-­HIV drugs — reducing their effectiveness by 50 percent. Occasionally eating garlic in food appears to be safe.<br/>
					<span class="date-text">2015-11-20 13:07:24</span>
				</li>
				<li class="broadcast-list-item">
					<a href="">#maasai</a> & <a href="">#pregnancy</a> Mercury has been found in a nearby water source; Mercury can be harmful to developing children, be sure to use clean, fresh water.<br/>
					<span class="date-text">2015-11-20 11:14:52</span>
				</li>
				<li class="broadcast-list-item">
					<a href="">#diabetes</a> & <a href="">#hypertension</a> Heart disease is the most significant cause of death in the diabetic population. Among persons with diabetes, this is caused by hypertension, high cholesterol and physical inactivity. Diabetic retinopathy is a leading cause of adult blindness.<br/>
					<span class="date-text">2015-11-20 09:00:23</span>
				</li>
				<li class="broadcast-list-item">
					<a href="">#HIV</a> Whey protein, a cheese by-product, can help some people with HIV gain weight. Whey protein also appears to reduce diarrhea and increase immune cell counts.<br/>
					<span class="date-text">2015-11-19 19:07:24</span>
				</li>
				<li class="broadcast-list-item">
					<a href="">#RespiratoryDisease</a> Prevent respiratory illness by venting your house when using a gas stove. Vent by leaving doors and windows open around the area in use.<br/>
					<span class="date-text">2015-11-19 14:22:00</span>
				</li>
				<li class="broadcast-list-item">
					<a href="">#kipsigis </a> The is a cholera breakout in Kipsigis. Text “sym #cholera” for symptoms and “trt #cholera” for treatments<br/>
					<span class="date-text">2015-11-18 22:01:10</span>
				</li>
				<li class="broadcast-list-item">
					<a href="">#pregnancy </a> first trimester physical changes might include breast tenderness, fatigue and nausea. make an appointment with your doctor to begin prenatal care and find out how to take care of yourself and your baby.<br/>
					<span class="date-text">2015-11-18 10:55:11</span>
				</li>
				<li class="broadcast-list-item">
					<a href="">#kisii</a> There will be a vaccination drive next week in your area. Please contact your clinic.<br/>
					<span class="date-text">2015-11-17 13:11:20</span>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>
</body>
</html>
