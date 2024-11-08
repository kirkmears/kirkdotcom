<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"><head id="Head">
<!--**********************************************************************************-->
<!-- kirkmears.com - http://www.kirkmears.com                                         -->
<!-- https://kirkdotcom.azurewebsites.net                                             -->
<!-- by kirk                                                                          -->
<!--**********************************************************************************-->

<body>

<p style="text-align: center;"><img src="icons/1-14-2009-c.jpg" alt="" width="889" height="192" align="middle">&nbsp;</p>

	<div id="gallery">
		<?php
			$dir = "photos/";
			$files = scandir($dir);
			foreach ($files as $file) {
				if ($file != "." && $file != "..") {
					echo "<a href=\"$dir$file\" data-lightbox=\"gallery\"><img src=\"thumbnail.php?file=$dir$file\"></a>";
				}
			}
		?>
	</div>
</body>


<table width="750" height="50" cellspacing="10" cellpadding="10" border="5" align="center">
    <tbody>
        <tr>
            <td style="text-align: center;"><a href="https://www.fox.com/live/" target="_blank"><span style="background-color: rgb(0, 0, 0);"><img src="icons/fox.png" alt="" width="50" height="22" border="2"></span></a></td>
            <td style="text-align: center;"><a href="http://www.nbc.com/live" target="_blank"><img src="icons/kxas-desktop-160x90-color.png" alt="" width="50" height="34"></a></td>
            <td style="text-align: center;"><a href="http://www.amc.com/livestream" target="_blank"><img src="icons/amc_logo_bk_bg.svg" alt="" width="50"></a></td>
            <td style="text-align: center;"><a href="http://www.tbs.com/watchtbs/west" target="_blank"><img src="icons/latest.svg" alt="" width="50" height="29"></a></td>
            <td style="text-align: center;"><a href="https://www.revntv.com/home" target="_blank"><img src="icons/logo_revntv.png" alt="" width="79" height="26"></a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><a href="http://192.168.1.19:8080/" target="_blank"><img src="icons/OI.logo.png" alt="" width="42" height="42"></a></td>
            <td style="text-align: center;"><a href="http://192.168.3.50:8123/" target="_blank"><img src="icons/homeass.png" alt="" width="40" height="40"></a></td>
	    <td style="text-align: center;"><a href="http://192.168.1.4/admin/login.php" target="_blank"><img src="icons/Pi-Hole.svg" alt="" width="42" height="42"></a></td>
	    <td style="text-align: center;"><a href="https://192.168.1.19:8043/" target="_blank"><img src="icons/omada.svg" alt="" width="42" height="42"></a></td>
            <td style="text-align: center;"><a href="http://192.168.3.65:8080/" target="_blank"><img src="icons/OI.logo.png" alt="" width="42" height="42"></a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><a href="http://192.168.1.19:5000/" target="_blank"><img src="icons/synology.png" alt="" width="50" height="50"></a></td>
            <td style="text-align: center;"><a href="http://192.168.1.254/" target="_blank"><img src="icons/att_globe_logo.png" alt="" width="36" height="36"></a></td>
            <td style="text-align: center;"><a href="http://192.168.1.19:32400/web/index.html#" target="_blank"><img src="icons/200px-Plex_vector_logo.png" alt="" width="82" height="27"></a></td>
            <td style="text-align: center;"><a href="http://192.168.1.71/" target="_blank"><img src="icons/1024px-Netgear_logo_2014.png" alt="" width="114" height="18"></a></td>
            <td style="text-align: center;"><a href="http://192.168.1.78/" target="_blank"><img src="icons/HDHomeRun.png" alt="" width="40" height="40"></a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><a href="https://192.168.1.5/" target="_blank"><img src="icons/220px-TPLINK_Logo_2.png" alt="" width="65" height="31"></a></td>
            <td style="text-align: center;"><a href="http://192.168.3.65:7860/" target="_blank"><img src="icons/Comfy.avif" alt="" width="42" height="42"></a></td>
            <td style="text-align: center;"><a href="https://drivetexas.org/#/13/32.8944/-96.8020?future=false&amp;resources=traffic&amp;resources=traffic-cameras&amp;sidebar=false" target="_blank"><img src="icons/ProhibitionSign2.svg" alt="" width="40" height="40"></a>&nbsp;</td>
            <td style="text-align: center;"><a href="http://192.168.1.19/photo/#!Albums" target="_blank"><img src="icons/photo_station.jpg" alt="" width="45" height="34"></a></td>
            <td style="text-align: center;"><a href="https://fiatleak.com/" target="_blank">fiatleak.com</a>&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align: center;"><a href="http://192.168.1.231:81/ui3.htm" target="_blank"><img src="icons/BI.png" alt="" width="43" height="43"></a><a href="http://192.168.1.113:81/ui3.htm" target="_blank"><img src="icons/BI.png" alt="" width="43" height="43"></a></td>
            <td style="text-align: center;"><a href="https://www.flightradar24.com/32.94,-96.83/11" target="_blank"><img src="icons/flightradar24.png" alt="" width="43" height="43"></a></td>
            <td style="text-align: center;"><a href="http://hint.fm/wind/" onclick="window.open(this.href,'USWindSpeed','resizable=yes,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=1280,height=700,left=640,top=640,status'); return false"><img src="icons/wind.square.jpg" alt="" width="43" height="43"></a>&nbsp;</td>
            <td style="text-align: center;">&nbsp;<a href="https://www.pandora.com/" target="_blank"><img src="icons/Pandora.png" alt="" width="43" height="43"></a></td>
            <td style="text-align: center;">&nbsp;<a href="https://tv.youtube.com/" target="_blank"><img src="icons/YouTube.png" alt="" width="50" height="50"></a></td>
        </tr>
        <tr>
            <td style="text-align: center;"><a href="https://www.ctsvowners.com/forum/forum.php"><img src="icons/cadillac_logo_125_2_1_1.jpeg" alt="" width="57" height="50"></a></td>
            <td style="text-align: center;"><a href="https://www.f150online.com/forums/members/32589-ugl.html"><img src="icons/ford_logo_125_2_1_1.jpeg" alt="" width="67" height="50"></a></td>
            <td style="text-align: center;"><a href="https://www.impalas.net/forums/#impala-tech" target="_blank"><img src="icons/chevy_logo_125_2_1_1.jpeg" alt="" width="65" height="50"></a></td>
            <td style="text-align: center;"><a href="http://www.theturboforums.com/forum.php" target="_blank"><img src="icons/precision.jpg" alt="" width="76" height="38"></a>&nbsp;</td>
            <td style="text-align: center;"><a href="https://tbd.com/live" target="_blank"><img src="icons/tbd.png" alt="" width="50" height="32"></a>&nbsp;</td>
        </tr>
        <tr>
            <td style="text-align: center;"><a href="https://www.kirkmears.com"><img src="icons/1-14-2009-c.jpg" alt="" width="200" height="50"></a></td>
            <td style="text-align: center;"><a href="https://www.google.com"><img src="icons/google.svg" alt="" width="50" height="50"></a></td>
            <td style="text-align: center;"><a href="http://www.lightningrodder.com/forum/index.php" target="_blank"><img src="icons/LR.svg" alt="" width="100" height="50"></a></td>
            <td style="text-align: center;"><a href="https://forecast.weather.gov/MapClick.php?lat=32.7942&lon=-96.7652&unit=0&lg=english&FcstType=graphical" target="_blank"><img src="icons/3day.jpg" alt="" width="56" height="51"></a>&nbsp;</td>
            <td style="text-align: center;"><a href="http://www.ontvtonight.com/guide/listings/DallasNight.html" target="_blank"><img src="icons/tv_ontvtonight_14.png" alt="" width="85" height="29"></a>&nbsp;</td>
        </tr>
    </tbody>
</table>


</table>

<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><img src="https://cdn.tegna-media.com/wfaa/weather/7day.jpg" alt="" width="511" height="287" align="middle">&nbsp;</p>
<p style="text-align: center;">&nbsp;</p>


	

<p style="text-align: center;"><a href="http://192.168.0.296/" target="_blank">Proton Docker nginx</a></p>
<p style="text-align: center;"><a href="https://kirkdotcom.azurewebsites.net/mustang" target="_blank">mustang</a></p>
<p style="text-align: center;"><a href="https://kirkdotcom.azurewebsites.net/cts" target="_blank">cts</a></p>
<p style="text-align: center;"><a href="https://kirkdotcom.azurewebsites.net/lightning" target="_blank">Truck</a></p>
<p style="text-align: center;"><a href="https://kirkdotcom.azurewebsites.net/impala" target="_blank">impala</a></p>
<p style="text-align: center;"><a href="https://kirkdotcom.azurewebsites.net/GT80" target="_blank">gt80</a></p>
<p style="text-align: center;"><a href="https://kirkdotcom.azurewebsites.net/Army" target="_blank">Army</a></p>
<p style="text-align: center;"><a href="http://192.168.0.239" target="_blank"><img src="icons/index.html" alt="" width="0" height="0" align="middle"></a></p>
<p style="text-align: center;"><img src="https://radar.weather.gov/ridge/standard/KFWS_loop.gif" alt="" width="600" height="550" align="middle">&nbsp;</p>

</div>


</div>

</div><!-- End_Module_383 --></div>


<table width="750" height="50" cellspacing="10" cellpadding="10" border="5" align="center">
    <tbody>

        <tr>
            <td style="text-align: center;"><a href="https://www.kirkmears.com/lightning" target="_blank"><span style="background-color: rgb(0, 0, 0);"><img src="icons/light.png" alt="" width="120" height="90" border="2"></span></a></td>
            <td style="text-align: center;"><a href="http://192.168.0.239" target="_blank"><img src="http://192.168.0.239/splash.jpg" alt="" width="80" height="60"></a></td>
            <td style="text-align: center;"><a href="https://www.kirkmears.com/mustang" target="_blank"><img src="icons/ford_logo_125_2_1_1.jpeg" alt="" width="125" height="93"></a></td>
            <td style="text-align: center;"><a href="http://www.tbs.com/watchtbs/west" target="_blank"><img src="icons/latest.svg" alt="" width="50" height="29"></a></td>
            <td style="text-align: center;"><a href="https://www.revntv.com/home" target="_blank"><img src="icons/logo_revntv.png" alt="" width="79" height="26"></a></td>
        </tr>



<p style="text-align: center;"><a href="https://kirkdotcom.azurewebsites.net/mustang" target="_blank">mustang</a></p>
<p style="text-align: center;"><a href="https://www.kirkmears.com/cts" target="_blank">cts</a></p>
<p style="text-align: center;"><a href="https://www.kirkmears.com/gt80" target="_blank">gt80</a></p>
<p style="text-align: center;"><a href="https://www.kirkmears.com/army" target="_blank">army</a></p>	    
<p style="text-align: center;"><a href="http://192.168.0.239" target="_blank"><img src="icons/splash.jpg" alt="" width="80" height="80" align="middle"></a></p>
<p style="text-align: center;"><img src="https://radar.weather.gov/ridge/standard/CONUS-LARGE_loop.gif" alt="" width="170" height="80" align="middle">&nbsp;</p>
<p style="text-align: center;"><a href="a href="https://radar.weather.gov/ridge/standard/CONUS-LARGE_loop.gif" target="_blank"><img src="https://radar.weather.gov/ridge/standard/CONUS-LARGE_loop.gif" alt="" width="85" height="40"></a></td>

	<tr>

        </tr>
    </tbody>
</table>


</table>



	<title>Temp GPT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
</head>

</html>
