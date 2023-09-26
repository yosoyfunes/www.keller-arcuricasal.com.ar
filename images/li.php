<?php
ob_start();
@set_time_limit(0);
echo "<p align='center'>
<img border='0' src='http://www.seomastering.com/myimages/img/Geolocation.jpg'></p>";
echo "<center><font color='#006600' size='4' face='impact'>SpyHackerz Ip Reverse - SpyTeam</center></font><div id=result>";



echo "<center><br /><br /><form><input size='60' value='spyhackerz.com' name='ghost' /><input type='submit' value='TARA BAKALIM'></form></center>";
if(isset($_GET["ghost"]))
{
$site = $_GET["ghost"];
$ghost = "http://domains.yougetsignal.com/domains.php";

//Curl Function
$ch = curl_init($ghost);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$site&ket=");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
$resp = curl_exec($ch);
$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
$array = explode(",,", $resp);
unset($array[0]);
echo "<table class=tbl>";
foreach($array as $lnk)

{
    print "<tr><td><a href='$lnk' target=_blank>$lnk</a></td></tr>";
}

echo "</table>";
curl_close($ch);
}
?>